<?php
session_start();
include('../includes/config.php');
	$userid=$_SESSION['id'];		
	$message = $_POST['message'];
	$sql = "insert into notesuser (userid,text) values ('$userid','$message')";
	if(mysqli_query($con, $sql)){					
	}
?>



