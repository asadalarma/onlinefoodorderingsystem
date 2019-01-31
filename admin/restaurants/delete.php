<?php
include("../requiredFiles.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $updatequery = "update users set is_deleted=1 where id=$id";
    $updatequery_result = mysqli_query($conn, $updatequery);
    $count = mysqli_affected_rows($conn);
    if($count){
        $_SESSION["message"] = "Deleted Successfully....!";
        header('Location:index.php');
    }else {
        $_SESSION["error"] = "Something Wrong....!";
        header('Location:index.php');
    }
}


