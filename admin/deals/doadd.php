<?php
include("../requiredFiles.php");

if (isset($_POST["adddeal"])) {
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $description = isset($_POST["description"]) ? mysqli_real_escape_string($conn, $_POST["description"]) : null;


    $filename = $_FILES["inputFile"]["name"];
    $filename_tempname = $_FILES["inputFile"]["tmp_name"];
    $original_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $unique_time = time() . mt_rand(10000, 99999);
    $file_with_time = $unique_time . '.' . $original_extension;
    $target_file = '../../deal-images/' . $file_with_time;

    if (move_uploaded_file($filename_tempname, $target_file)) {

        $target_filename = 'deal-images/' . $file_with_time;
        $dealregisterquery = "INSERT INTO `deals` (`name`, `description`, `image`) VALUES ('" . $name . "','" . $description . "','" . $target_filename . "');";

        $dealregisterresult = mysqli_query($conn, $dealregisterquery);
        $count = mysqli_affected_rows($conn);

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