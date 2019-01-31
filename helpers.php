<?php

function getCurrentDirectory()
{
    $path = dirname($_SERVER['PHP_SELF']);
    $position = strrpos($path, '/') + 1;
    return substr($path, $position);
}

function getadminurl()
{
    $url = '/onlinefoodorderingsystem/admin/';
    return $url;
}

function imageurl($url)
{
    $url = '/onlinefoodorderingsystem/' . $url;
    return $url;
}

function getUserRecord($conn, $id)
{
    $getrecordquery = "select * from users where id=$id";

    $getrecordqueryresult = mysqli_query($conn, $getrecordquery);
    $count = mysqli_num_rows($getrecordqueryresult);
    if ($count) {
        $row = mysqli_fetch_assoc($getrecordqueryresult);
    } else {
        $row = null;
    }
    return $row;
}
