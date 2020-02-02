<?php
session_start();
session_destroy();
$_SESSION["admin-login"] = "";
$_SESSION['aid']="";
header('Location:admin.php');
?>
