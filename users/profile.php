<?php
session_start();
include('../includes/config.php');
if (!isset($_SESSION['login'])) {
	header('Location:../index.php');
	exit();
}
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM users where password='".$_POST['password1']."' and id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update users set password='".$_POST['password2']."' where id='".$_SESSION['id']."'");
echo "<script>alert('Password changed successfully');</script>";
echo'<script> window.location="profile.php"; </script> ';   
}
else
{
echo "<script>alert('Something went worng');</script>";
}
}
$stmt = $con->prepare('SELECT name,phoneno,email FROM users WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($name,$phoneno,$email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta http-equiv="refresh" content="30">
    <meta name="viewport"
content="width=device-width,initial-scale=0.7,user-scalable=no">
		<title>Profile Page</title>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 		<style>
  html, body { 
  overflow-x: hidden; 
  }
		</style>				
	</head>
	<body oncontextmenu="return false" onkeydown="return (event.keyCode != 116)">
<?php include('../includes/nav-user.php');?>	
		<div class="content">
		<style>
		.content h2 {
  	margin: 0;
  	padding: 25px 0;
  	font-size: 22px;
  	border-bottom: 1px solid #e0e0e3;
  	color: #ffffff;
}
		</style>
			<h2>Your Profile</h2>
			<div>
				<p>Your details are below:</p>
				<table>
					<tr>
						<td>Name:</td>
						<td><?=$name?></td>
					</tr>
					<tr>
						<td>Mobile Number:</td>
						<td><?=$phoneno?></td>
					</tr>
					<tr>
						<td>Email Id:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
		
			<div class="content">
		<style>
		.content h2 {
  	margin: 0;
  	padding: 25px 0;
  	font-size: 22px;
  	border-bottom: 1px solid #e0e0e3;
  	color: #ffffff;
}
		</style>
			<h2>Change Password</h2>	
  </div>			
					<div class="content">
					<div>
			<form action="profile.php" method="post">
				<label for="password1">
				</label>
			<center>	<input type="password" name="password1" placeholder="Old password" id="password1" required></center>
				<label for="password2">					
				</label>
			<center>	<input type="password" name="password2" placeholder="New password" id="password2" required></center>
				
				<center><input type="submit" name="submit" value="Update"></center>
			</form>
		</div>		
		</div>
	</body>
</html>
