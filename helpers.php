<?php

function getCurrentDirectory()
{
    $path = dirname($_SERVER['PHP_SELF']);
    $position = strrpos($path, '/') + 1;
    return substr($path, $position);
}

function getParentFolderName($slash=null){
   return dirname($_SERVER["PHP_SELF"], 3).$slash;
}

function getadminurl()
{
    $url = getParentFolderName('/').'admin/';
    return $url;
}

function imageurl($url)
{
    $url = getParentFolderName('/').$url;
    return $url;
}

function getUserRecord($conn, $id)
{
    $getrecordquery = "select * from users where id=$id and is_deleted=0";

    $getrecordqueryresult = mysqli_query($conn, $getrecordquery);
    $count = mysqli_num_rows($getrecordqueryresult);
    if ($count) {
        $row = mysqli_fetch_assoc($getrecordqueryresult);
    } else {
        $row = null;
    }
    return $row;
}

function getDealsRecord($conn, $id)
{
    $getrecordquery = "select * from deals where id=$id and is_deleted=0";

    $getrecordqueryresult = mysqli_query($conn, $getrecordquery);
    $count = mysqli_num_rows($getrecordqueryresult);
    if ($count) {
        $row = mysqli_fetch_assoc($getrecordqueryresult);
    } else {
        $row = null;
    }
    return $row;
}

function checkOldPassword($conn, $password){
    $getrecordquery = "select * from users where password='$password' and is_deleted=0";

    $getrecordqueryresult = mysqli_query($conn, $getrecordquery);
    $count = mysqli_num_rows($getrecordqueryresult);
    if ($count) {
        $row = $count;
    } else {
        $row = null;
    }
    return $row;
}