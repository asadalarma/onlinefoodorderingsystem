<?php
include("../requiredFiles.php");

if (isset($_POST["addmeal"])) {
    $restaurant = isset($_POST["restaurant"]) ? mysqli_real_escape_string($conn, $_POST["restaurant"]) : null;
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $description = isset($_POST["description"]) ? mysqli_real_escape_string($conn, $_POST["description"]) : null;
    $assigndeals = isset($_POST["assigndeals"]) ?  $_POST["assigndeals"] : null;

    $filename = $_FILES["inputFile"]["name"];
    $filename_tempname = $_FILES["inputFile"]["tmp_name"];
    $original_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $unique_time = time() . mt_rand(10000, 99999);
    $file_with_time = $unique_time . '.' . $original_extension;
    $target_file = '../../meal-images/' . $file_with_time;

    if (move_uploaded_file($filename_tempname, $target_file)) {

        $target_filename = 'meal-images/' . $file_with_time;
        $dealregisterquery = "INSERT INTO `meals` (`restaurant_id`,`name`, `description`, `image`) VALUES ('".$restaurant."','".$name."','".$description."','".$target_filename."');";

        $dealregisterresult = mysqli_query($conn, $dealregisterquery);
        $mealid=mysqli_insert_id($conn);
        $count = mysqli_affected_rows($conn);
        if(!empty($assigndeals)){
            foreach($assigndeals as $assigndeal){
                $meal_dealsquery = "INSERT INTO `meal_deals` (`meal_id`,`deal_id`) VALUES ('".$mealid."','".$assigndeal."');";
                $meal_dealsresult = mysqli_query($conn, $meal_dealsquery);
            }
        }
        if ($count) {
            $_SESSION["message"] = "Insert Successfully....!";
            header('Location:index.php');
        } else {
            $_SESSION["error"] = "Somethings Went Wrong....!";
            header('Location:index.php');
        }

    } else {
        $_SESSION["error"] = "Somethings Went Wrong....!";
        header('Location:index.php');
    }

}