<?php
session_start();

// inactive in seconds
$inactive = 5;
if( !isset($_SESSION['timeout']) )
    $_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive) {
    unset($_SESSION["error"]);
    unset($_SESSION["message"]);
}

$_SESSION['timeout']=time();
?>