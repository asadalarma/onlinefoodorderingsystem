<?php
include("../requiredFiles.php");
if (isset($_POST["editadmins"])) {
    $name = isset($_POST["name"]) ? mysqli_real_escape_string($conn, $_POST["name"]) : null;
    $username = isset($_POST["username"]) ? mysqli_real_escape_string($conn, $_POST["username"]) : null;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : null;
    $address = isset($_POST["address"]) ? mysqli_real_escape_string($conn, $_POST["address"]) : null;
    $phone = isset($_POST["phone"]) ? mysqli_real_escape_string($conn, $_POST["phone"]) : null;
    $userid = isset($_POST["userid"]) ? mysqli_real_escape_string($conn, $_POST["userid"]) : null;

    $oldpassword = isset($_POST["oldpassword"]) ? mysqli_real_escape_string($conn, $_POST["oldpassword"]) : null;
    $newpassword = isset($_POST["newpassword"]) ? mysqli_real_escape_string($conn, $_POST["newpassword"]) : null;
    $confirmpassword = isset($_POST["confirmpassword"]) ? mysqli_real_escape_string($conn, $_POST["confirmpassword"]) : null;
    $newpasswordquery = '';
    if (!empty($oldpassword)) {
        $check = checkOldPassword($conn, md5($oldpassword));
        if (!$check) {
            $_SESSION["error"] = "Old Password does not match....!";
            header('Location:edit.php?id=' . $userid);
        }
    }

    if (!empty($newpassword) && !empty($confirmpassword)) {
        if ($newpassword != $confirmpassword) {
            $_SESSION["error"] = "New Password and Confirm Password does not match....!";
            header('Location:edit.php?id=' . $userid);
        } else {
            $newpassword = md5($newpassword);
            $newpasswordquery = ",password='$newpassword'";
        }
    }

    if (!empty($newpassword) && empty($confirmpassword)) {
        $_SESSION["error"] = "Please enter Confirm Password....!";
        header('Location:edit.php?id=' . $userid);
    }

    if (empty($newpassword) && !empty($confirmpassword)) {
        $_SESSION["error"] = "Please enter New Password....!";
        header('Location:edit.php?id=' . $userid);
    }


    $updatequery = "update users set name='$name',email='$email'$newpasswordquery,username='$username',phone='$phone',address='$address' where id=$userid";
    $updatequery_result = mysqli_query($conn, $updatequery);
    $count = mysqli_affected_rows($conn);

    if ($count == 0 || $count == 1) {
        $_SESSION["message"] = "Updated Successfully....!";
        header('Location:index.php');
    } else {
        $_SESSION["error"] = "Somethings Went Wrong....!";
        header('Location:index.php');
    }

}