<?php
include("requiredFiles.php");
if(isset($_POST["loggedIn"]))
{
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    // $checkloginquery='select * from users where email="'.$email.'" and password="'.md5($password).'"';
    $checkloginquery="select * from users where email='".$email."' and password='".md5($password)."'";
    $checklogin_result = mysqli_query($conn,$checkloginquery);
    $count=mysqli_num_rows($checklogin_result);
    if($count)
    {
        $row = mysqli_fetch_assoc($checklogin_result);
        $_SESSION["user_id"]=$row["id"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["user_type"]=$row["user_type"];
        header('Location:dashboard.php');
    }
    else
    {
        $_SESSION["error"]="Email or password does not match";
        header('Location:index.php');
    }

}
