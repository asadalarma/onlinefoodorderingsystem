<?php
include("customerrequiredfiles.php");


if (isset($_POST["customer_register"])) {

    $_SESSION["customerloginerror"] = "";
    unset($_SESSION["customerloginerror"]);

    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $address = isset($_POST["address"]) ? mysqli_real_escape_string($conn, $_POST["address"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : null;

    //check the email address exist or not
    $checkemailquery = "select * from users where email='$email'";

    $checkemailresult = mysqli_query($conn, $checkemailquery);
    $countexistemail = mysqli_num_rows($checkemailresult);

    if ($countexistemail) {
        $_SESSION["cutomerregerror"] = "Email Address already exist..!";
        header('Location:registration.php');
    } else {
        $customerregisterquery = "INSERT INTO `users` (`name`, `email`, `address`, `phone`, `password`, `user_type`) VALUES ('" . $name . "', '" . $email . "', '" . $address . "', '" . $phone . "', '" . md5($password) . "','customer')";
        $customerregisterresult = mysqli_query($conn, $customerregisterquery);
        $count = mysqli_affected_rows($conn);

        if ($count) {
            $_SESSION["cutomerregmessage"] = "Customer Register Successfully..!";
            header('Location:registration.php');
        } else {
            $_SESSION["cutomerregerror"] = "Some went wrong....!";
            header('Location:registration.php');
        }
    }
}

if (isset($_POST["customer_loggedIn"])) {
    $_SESSION["cutomerregmessage"] = "";
    $_SESSION["cutomerregerror"] = "";
    unset($_SESSION["cutomerregmessage"]);
    unset($_SESSION["cutomerregerror"]);

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $customerloginquery = "select * from users where email='" . $email . "' and password='" . md5($password) . "' and user_type = 'customer'";
    $customerlogin_result = mysqli_query($conn, $customerloginquery);
    $count = mysqli_num_rows($customerlogin_result);

    if ($count) {
        $row = mysqli_fetch_assoc($customerlogin_result);
        $_SESSION["customer_id"] = $row["id"];
        $_SESSION["customer_name"] = $row["name"];
        $_SESSION["customer_email"] = $row["email"];
        $_SESSION["customer_username"] = $row["username"];
        $_SESSION["customer_user_type"] = $row["user_type"];
        header('Location:index.php');
    } else {
        $_SESSION["customerloginerror"] = "Email or password does not match";
        header('Location:registration.php');
    }

}
?>