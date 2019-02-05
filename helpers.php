<?php

function getCurrentDirectory()
{
    $path = dirname($_SERVER['PHP_SELF']);
    $position = strrpos($path, '/') + 1;
    return substr($path, $position);
}

function getParentFolderName($slash=null){
    if(dirname($_SERVER["PHP_SELF"], 3) == '\\'){
      $dir =  dirname($_SERVER["PHP_SELF"], 2);
    }else {
        $dir =  dirname($_SERVER["PHP_SELF"], 3);
    }
   return $dir.$slash;
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

function getAssignedDeals($conn,$mealid){
   $response=[];
    $counter=0;
    $getrecordquery = "select md.id AS id , d.name AS dealname , d.id AS dealid from meal_deals md,deals d where d.id=md.deal_id  and md.meal_id='$mealid' and d.is_deleted=0 and md.is_deleted=0";

    $getrecordqueryresult = mysqli_query($conn, $getrecordquery);
    if($getrecordqueryresult){
        $count = mysqli_num_rows($getrecordqueryresult);
        if ($count) {
            while( $row = mysqli_fetch_array($getrecordqueryresult)){
                $response[$counter]["id"]=$row["id"];
                $response[$counter]["dealname"]=$row["dealname"];
                $response[$counter]["dealid"]=$row["dealid"];
                $counter++;
            }
        } else {
            $response = null;
        }
    }else{
        $response = null;
    }

    return $response;
}