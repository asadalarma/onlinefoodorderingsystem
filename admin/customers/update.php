<?php
include("../requiredFiles.php");
if(isset($_POST["editcustomers"])){
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $address = isset($_POST["address"]) ? mysqli_real_escape_string($conn, $_POST["address"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $userid = isset($_POST["userid"]) ? mysqli_real_escape_string($conn, $_POST["userid"]) : null;

    $updatequery = "update users set name='$name',email='$email',phone='$phone',address='$address' where id=$userid";
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