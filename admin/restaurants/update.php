<?php
include("../requiredFiles.php");
if(isset($_POST["editrestaurants"])){
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $url = isset($_POST["url"]) ? mysqli_real_escape_string($conn, $_POST["url"]) : null;
    $approval_status = isset($_POST["approval_status"]) ? mysqli_real_escape_string($conn, $_POST["approval_status"]) : null;
    $userid = isset($_POST["userid"]) ? mysqli_real_escape_string($conn, $_POST["userid"]) : null;

    if ( isset( $_FILES["inputFile"] ) && !empty( $_FILES["inputFile"]["name"] ) ){
        $filename =  $_FILES["inputFile"]["name"];
        $filename_tempname =  $_FILES["inputFile"]["tmp_name"];
        $original_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $unique_time = time() . mt_rand(10000, 99999);
        $file_with_time = $unique_time . '.' . $original_extension;
        $target_file = '../../restaurant-images/' . $file_with_time;
        if (move_uploaded_file($filename_tempname, $target_file)) {
            $image_query=",image='restaurant-images/$file_with_time'";
        }
    } else {
        $image_query="";
    }
    $updatequery = "update users set name='$name',email='$email',phone='$phone',url='$url',approval_status='$approval_status' $image_query where id=$userid";
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