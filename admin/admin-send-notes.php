<?php
session_start();
include('../includes/config.php');
	$adminid=$_SESSION['aid'];		
	$message = $_POST['message'];
	$sql = "insert into notesadmin (adminid,text) values ('$adminid','$message')";
	if(mysqli_query($con, $sql)){					
	}
?>



