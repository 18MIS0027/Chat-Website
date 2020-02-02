<?php
session_start();
include('../includes/config.php');
if (!isset($_SESSION['admin-login'])) {
	header('Location: admin.php');
	exit();
}
if(isset($_POST['regenable']))
		  {
		          mysqli_query($con,"update reg set status=1 where id = 1");
echo'<script> window.location="javascript:history.go(-1)"; </script> ';                       
}
if(isset($_POST['regdisable']))
		  {
		          mysqli_query($con,"update reg set status=0 where id = 1");
echo'<script> window.location="javascript:history.go(-1)"; </script> ';                       
}
if(isset($_GET['enable']))
		  {
		          mysqli_query($con,"update users set status=1 where id = '".$_GET['id']."'");
echo'<script> window.location="javascript:history.go(-1)"; </script> ';                       
}
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from users where id = '".$_GET['id']."'");
echo'<script> window.location="javascript:history.go(-1)"; </script> ';                       
}
if(isset($_GET['disable']))
		  {
		          mysqli_query($con,"update users set status=0 where id = '".$_GET['id']."'");
echo'<script> window.location="javascript:history.go(-1)"; </script> ';                       
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport"
content="width=device-width,initial-scale=0.7,user-scalable=no">
		<title>Admin Portal</title>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://cd.cnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 		<style>
  html, body { 
  overflow-x: hidden; 
  }
		</style>				
	</head>
	<body oncontextmenu="return false">
<?php include('../includes/nav-admin.php');?>
<?php
// Attempt select query execution
$sql = "SELECT * FROM reg";		
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_array($result)){	
	 	?>
	 	
		<div class='content'>
		 <div>	 
	<form method="post" action="admin-users.php">	 
						<p>Registration Form Status: <?php echo htmlentities($row['status']);?></p>
				<center>
    <input type="submit" name="regenable" value="Enable">
	   <input type="submit" name="regdisable" value="Disable">
					</center>
						 </form>
			</div>
		</div>
   <?php } ?>
<?php } ?>
<?php } ?>			




<div class='content'>
		<style>
		.content h2 {
  	margin: 0;
  	padding: 25px 0;
  	font-size: 22px;
  	border-bottom: 1px solid #e0e0e3;
  	color: #ffffff;
}
		</style>
			<h2>Users List</h2>
</div>
<?php
// Attempt select query execution
$sql = "SELECT * FROM users";		
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_array($result)){	
	 	?>
	 	
		<div class='content'>
		 <div>	 
	<form method="post" action="admin-users.php">	 
			<p>Id: <?php echo htmlentities($row['id']);?></p>
						<p>Status: <?php echo htmlentities($row['status']);?></p>
				<table>
					<tr>
						<td>Name:</td>
						<td><?php echo htmlentities($row['name']);?></td>
					</tr>
					<tr>
						<td>Mobile Number:</td>
						<td><?php echo htmlentities($row['phoneno']);?></td>
					</tr>
					<tr>
						<td>Email Id:</td>
						<td><?php echo htmlentities($row['email']);?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?php echo htmlentities($row['password']);?></td>
					</tr>		
				</table>
				<br>
				<center>
<!--
   <input type="submit" id="<?php echo $row['id']?>" name="enable" value="Enable">
		  <input type="submit" name="del" value="Del user">
	   <input type="submit" id="<?php echo $row['id']?>" name="disable" value="Disable">
-->
				<a href="admin-users.php?id=<?php echo $row['id']?>&enable=enable">Enable</a>
				<a href="admin-users.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete user?')"><i class="fa fa-trash"></i> Delete User</a>
					<a href="admin-users.php?id=<?php echo $row['id']?>&disable=disable">Disable</a>			
					</center>
						 </form>
			</div>
		</div>
   <?php } ?>
<?php } ?>
<?php } ?>			


	</body>
</html>
