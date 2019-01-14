<?php
include("customerrequiredfiles.php");


if (isset($_POST["customer_register"])) {
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $address = isset($_POST["address"]) ? mysqli_real_escape_string($conn, $_POST["address"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : null;

// insert into users user_type ='customer'
//mysqli_affected_rows
    $customerregisterquery = "INSERT INTO `users` (`name`, `email`, `address`, `phone`, `password`, `user_type`) VALUES ('" . $name . "', '" . $email . "', '" . $address . "', '".$phone."', '".md5($password)."','customer');";

    $customerregisterresult = mysqli_query($conn, $customerregisterquery);
    $count = mysqli_affected_rows($conn);

    if ($count) {
        $_SESSION["message"] = "Customer Register Successfully..!";
        header('Location:registration.php');
    } else {
        $_SESSION["error"] = "Some went wrong....!";
        header('Location:registration.php');
    }

}

if(isset($_POST["customer_loggedIn"]))
{
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    // $checkloginquery='select * from users where email="'.$email.'" and password="'.md5($password).'"';
    $customerloginquery="select * from users where email='".$email."' and password='".md5($password)."' and user_type = 'customer'";
    $customerlogin_result = mysqli_query($conn,$customerloginquery);
    $count=mysqli_num_rows($customerlogin_result);
    if($count)
    {
        $row = mysqli_fetch_assoc($customerlogin_result);
        $_SESSION["user_id"]=$row["id"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["user_type"]=$row["user_type"];
        header('Location:index.php');
    }
    else
    {
        $_SESSION["error"]="Email or password does not match";
        header('Location:registration.php');
    }

}
?>