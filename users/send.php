<?php
session_start();
include('../includes/config.php');
	$userid=$_SESSION['id'];		
 $name=$_SESSION['name'];		
	$message = $_POST['message'];
	$sql = "insert into message (userid,name,message) values ('$userid','$name','$message')";
	if(mysqli_query($con, $sql)){					
	}
?>
