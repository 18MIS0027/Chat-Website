<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
   $phoneno=$_POST['phoneno'];
   $password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM users WHERE phoneno='$phoneno' and password='$password' and status=1");
$num=mysqli_fetch_array($query);
if($num>0)
{
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$_SESSION["login"] = true;  
header("location:users/home.php");
exit();
}
else{
echo "<script>alert('Invalid credentials or admin disabled your login');</script>";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport"
content="width=device-width,initial-scale=0.9,user-scalable=no">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> 	
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />   
    <link href="css/styles.css" rel="stylesheet"> 
    
    
		<link rel="stylesheet" href="css/style.css">     		
	</head>
	<body>
	
		<div class="login">
			<h1>Login</h1>
			<div class="links">
				<a href="index.php" class="active">Login</a>
				<a href="users/register.php">Register</a>
				<a href="admin/admin.php">Admin</a>
			</div>
			<form action="index.php" method="post">
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

   <!--Scripts-->
    <script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="js/nav.js" type="text/javascript"></script>

    <!--Plugin Initialization-->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#Menu").aceResponsiveMenu({
                resizeWidth: '768', // Set the same in Media query       
                animationSpeed: 'fast', //slow, medium, fast
                accoridonExpAll: false //Expands all the accordion menu on click
            });
        });
    </script>


	</body>
</html>
