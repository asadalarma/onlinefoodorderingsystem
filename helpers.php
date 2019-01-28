<?php

function getCurrentDirectory() {
    $path = dirname($_SERVER['PHP_SELF']);
    $position = strrpos($path,'/') + 1;
    return substr($path,$position);
}

function getadminurl() {
    $url='/onlinefoodorderingsystem/admin/';
    return $url;
}