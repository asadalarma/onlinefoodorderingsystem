<?php
include("customerrequiredfiles.php");

if(isset($_POST["register_restaurant"])){

    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : null;

    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $url = isset($_POST["url"]) ? mysqli_real_escape_string($conn, $_POST["url"]) : null;
    $openinghours = isset($_POST["openinghours"]) ? mysqli_real_escape_string($conn, $_POST["openinghours"]) : null;
    $closinghours = isset($_POST["closinghours"]) ? mysqli_real_escape_string($conn, $_POST["closinghours"]) : null;

    $filename =  $_FILES["inputFile"]["name"];
    $filename_tempname =  $_FILES["inputFile"]["tmp_name"];
    $original_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $unique_time = time() . mt_rand(10000, 99999);
    $file_with_time = $unique_time . '.' . $original_extension;
    $target_file = 'restaurant-images/' . $file_with_time;
    if (move_uploaded_file($filename_tempname, $target_file)) {

        $restaurantregisterquery = "INSERT INTO `users` (`name`, `email`, `phone`, `password`, `url`, `openinghours`, `closinghours`, `user_type`, `image`) VALUES ('".$name."', '".$email."', '".$phone."', '".md5($password)."','".$url."','".$openinghours."','".$closinghours."','restaurant','".$target_file."');";

        $restuarantregisterresult = mysqli_query($conn, $restaurantregisterquery);
        $count = mysqli_affected_rows($conn);

        if ($count) {
            $_SESSION["restaurantregmessage"] = "Restaurant Register Successfully..!";
            header('Location:submition.php');
        } else {
            $_SESSION["restaurantregerror"] = "Some went wrong....!";
            header('Location:submition.php');
        }

    } else {
        $_SESSION["restaurantregerror"] = "Sorry, there was an error uploading your file.";
        header('Location:submition.php');
    }


}