<?php
include("../requiredFiles.php");

if(isset($_POST["addadmin"])){
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $username = isset($_POST["username"]) ? mysqli_real_escape_string($conn, $_POST["username"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : null;
    $address = isset($_POST["address"]) ? mysqli_real_escape_string($conn, $_POST["address"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;

    $adminregisterquery = "INSERT INTO `users` (`name`, `email`, `password`, `username`, `address`, `phone`, `user_type`) VALUES ('".$name."', '".$email."', '".md5($password)."', '".$username."', '".$address."', '".$phone."','admin')";
    $adminregisterresult = mysqli_query($conn, $adminregisterquery);
    $count = mysqli_affected_rows($conn);
    if($count){
        $_SESSION["message"] = "Insert Successfully....!";
        header('Location:index.php');
    }else{
        $_SESSION["error"] = "Somethings Went Wrong....!";
        header('Location:index.php');
    }
}