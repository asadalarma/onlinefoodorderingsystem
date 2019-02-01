<?php
include("../requiredFiles.php");
if (isset($_POST["editdeals"])) {
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $description = isset($_POST["description"]) ? mysqli_real_escape_string($conn, $_POST["description"]) : null;
    $userid = isset($_POST["userid"]) ? mysqli_real_escape_string($conn, $_POST["userid"]) : null;


    if ( isset( $_FILES["inputFile"] ) && !empty( $_FILES["inputFile"]["name"] ) ){
        $filename =  $_FILES["inputFile"]["name"];
        $filename_tempname =  $_FILES["inputFile"]["tmp_name"];
        $original_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $unique_time = time() . mt_rand(10000, 99999);
        $file_with_time = $unique_time . '.' . $original_extension;
        $target_file = '../../deal-images/' . $file_with_time;
        if (move_uploaded_file($filename_tempname, $target_file)) {
            $image_query=",image='deal-images/$file_with_time'";
        }
    } else {
        $image_query="";
    }

    $updatequery = "update deals set name='$name',description='$description' $image_query where id=$userid";
    $updatequery_result = mysqli_query($conn, $updatequery);
    $count = mysqli_affected_rows($conn);
    if($count){
        $_SESSION["message"] = "Updated Successfully....!";
        header('Location:index.php');
    }else{
        $_SESSION["error"] = "Somethings Went Wrong....!";
        header('Location:index.php');
    }

}