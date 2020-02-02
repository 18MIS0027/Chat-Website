<?php
session_start();
include('../includes/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM reg WHERE id=1 and status=1");
$num=mysqli_fetch_array($query);
if($num>0)
{
$query=mysqli_query($con,"SELECT * FROM users WHERE phoneno='$phoneno' or email='$email'");
$num=mysqli_fetch_array($query);
if($num>0)
{
echo "<script>alert('Mobile number or Email you entered is already regitered or admin disabled registration');</script>";
}
else{
$query=mysqli_query($con,"insert into users(status,name,phoneno,email,password) values(1,'$name','$phoneno','$email','$password')");
if($query)
{
	echo "<script>alert('You have successfully registered');</script>";
	echo'<script> window.location="../index.php"; </script> '; 
}
else{
echo "<script>alert('Not registered something went worng');</script>";
echo'<script> window.location="register.php"; </script> '; 
}
}
}
else{
echo "<script>alert('Admin disabled registration');</script>";
echo'<script> window.location="../index.php"; </script> '; 
}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport"
content="width=device-width,initial-scale=0.9,user-scalable=no">
		<title>Register</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<div class="links">
				<a href="../index.php">Login</a>
				<a href="register.php" class="active">Register</a>
			 <a href="../admin/admin.php">Admin</a>
			</div>
			<form action="register.php" method="post" autocomplete="off">
				<label for="Name">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="name" placeholder="Name" id="name" required>
				<label for="phoneno">
					<i class="fas fa-phone"></i>
				</label>
				<input type="number" name="phoneno" placeholder="Mobile number" id="phoneno" required>								
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>				
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>				
				<input type="submit" name="submit" value="Register">
			</form>
		</div>
	</body>
</html>
