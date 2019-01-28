<?php
$path = dirname($_SERVER['PHP_SELF']);
$position = strrpos($path, '/') + 1;
if (substr($path, $position) == "admin") {
    include("../startsession.php");
    include("../connection.php");
    include("../helpers.php");
} else {
    include("../../startsession.php");
    include("../../connection.php");
    include("../../helpers.php");
}
?>