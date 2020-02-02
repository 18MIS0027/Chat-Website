<?php
session_start();
include('../includes/config.php');
if (!isset($_SESSION['login'])) {
	header('Location:../index.php');
	exit();
}
if(isset($_POST['delmsg']))
		  {
		          mysqli_query($con,"delete from message where userid='".$_SESSION['id']."'");
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
		<title>Chat history</title>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 		<style>
  html, body { 
  overflow-x: hidden; 
  }
  .content input[type="submit"] {
  	width: 70%;
  }
		</style>				
	</head>
	<body oncontextmenu="return false">
<?php include('../includes/nav-user.php');?>	
		<style>
   .content > div {
   height: 460px;
  	overflow-y: auto;
   overflow-x: auto;
   }
		</style>				

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
			<h2>Chat History</h2>
</div>
<br>
		<div class='content'>
		 <div>	 
				<table>
<?php
// Attempt select query execution
$sql = "SELECT * FROM message where userid='".$_SESSION['id']."'";		
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_array($result)){	
	 	?>
					<tr>
     <td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $row["id"];?>"></td> 	
						<td><?php echo htmlentities($row['name']);?>:</td>
						<td><?php echo htmlentities($row['message']);?></td>
					</tr>
   <?php } ?>
<?php } ?>
<?php } ?>			
</table>
			</div>
		<form action="my.php" method="post">
	   <center><input type="submit" name="delmsg" value="Delete all my messages"></center>
			<center><input name="delete" type="submit" id="delete" value="Delete selected messages"></center>

</form>
		</div>





	</body>
</html>
