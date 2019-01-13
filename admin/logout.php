<?php
include("requiredFiles.php");
session_unset();
session_destroy();
header('Location:index.php');
?>