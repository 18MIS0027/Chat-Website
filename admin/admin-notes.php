<?php
session_start();
include('../includes/config.php');
$adminid=$_SESSION['aid'];

if (!isset($_SESSION['admin-login'])) {
	header('Location: admin.php');
	exit();
}
if(isset($_POST['delmsg']))
		  {
		          mysqli_query($con,"delete from notesadmin where adminid='".$_SESSION['aid']."'");
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
		<title>My notes</title>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://cd.cnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../js/jquery.min.js"></script> 
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
			<script>
  function scrollDown() { document.getElementById('scroll').scrollTop = document.getElementById('scroll').scrollHeight }
  </script>
 <script>

		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		document.getElementById('notes').innerHTML = req.responseText;
		} 
		}
		req.open('GET','admin-receive-notes.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
	</head>
	<body onload="ajax();" oncontextmenu="return false">
<?php include('../includes/nav-admin.php');?>
		<style>
   .content > div {
   height: 420px;
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
			<h2>My Notes</h2>
</div>
<br>
		<div class="content">
<form action="admin-send-notes.php" method="post" id="myform">		
						<input type="text" name="message" placeholder="Type your text here..." id="message" autocomplete="off" autofocus>				
						<input hidden type="submit" onclick='scrollDown()'  value="Send" id="insert">
</form>						
		</div>		
<script src='../includes/insert.js'></script>	


		<div class="content">	
    <div id="scroll">			
				<div id="notes">	

			</div>
  <br>
		</div>			
 </div>
		<div class="content">	
		<form action="admin-notes.php" method="post">
	   <center><input type="submit" name="delmsg" value="Delete all notes"></center>
			<center><input name="delete" type="submit" id="delete" value="Delete selected notes"></center>
</form>
</div>
	</body>
</html>





























