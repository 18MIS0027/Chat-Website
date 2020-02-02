<?php
session_start();
session_destroy();
$_SESSION["login"] = "";
$_SESSION["name"] = "";
header('Location:../index.php');
?>
