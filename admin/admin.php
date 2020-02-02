<?php
session_start();
include('../includes/config.php');
if(isset($_POST['submit']))
{
   $phoneno=$_POST['phoneno'];
   $password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM admin WHERE phoneno='$phoneno' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$_SESSION['aid']=$num['id'];
$_SESSION["admin-login"] = true;  
header("location:admin-home.php");
exit();
}
else{
echo "<script>alert('Something went worng');</script>";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport"
content="width=device-width,initial-scale=0.9,user-scalable=no">
		<title>Admin</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Admin</h1>
			<div class="links">
				<a href="../index.php">Login</a>
				<a href="../users/register.php">Register</a>
				<a href="admin.php" class="active">Admin</a>
			</div>
			<form action="admin.php" method="post">
				<label for="phoneno">
					<i class="fas fa-phone"></i>
				</label>
				<input type="number" name="phoneno" placeholder="Mobile number" id="phoneno" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				
				<input type="submit" name="submit" value="Login">
			</form>
		</div>
	</body>
</html>
