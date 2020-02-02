<?php
session_start();
include('../includes/config.php');
if (!isset($_SESSION['login'])) {
	header('Location:../index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport"
content="width=device-width,initial-scale=0.7,user-scalable=no">
		<title>Home Page</title>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" href="https://cd.cnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="../js/jquery.min.js"></script> 	
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
			<script>
  function scrollDown() { document.getElementById('scroll').scrollTop = document.getElementById('scroll').scrollHeight }
  </script>
 <script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		document.getElementById('scroll').scrollTop = document.getElementById('scroll').scrollHeight;
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','receive.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
 		<style>
  html, body { 
  overflow-x: hidden; 
  }
		</style>				
	</head>
	<body onload="ajax();">
 <?php include('../includes/nav-user.php');?>
		<style>
		.content {
  	width: 490px;
   height: 475px;
   }
   .content > div {
   height: 460px;
  	overflow-y: auto;
   overflow-x: auto;
   }
		</style>				
		<div class="content">	
   <div id="scroll">			
				<div id="chat">	

			</div>
  <br>
  </div>
		</div>			
					
		<div class="content">
<form action="send.php" method="post" id="myform">		
						<input type="text" name="message" placeholder="Type your message here..." id="message" autocomplete="off" autofocus>				
						<input type="submit" onclick='scrollDown()' value="Send" id="insert">
</form>						
		</div>		
<script src='../includes/insert.js'></script>



	</body>
</html>
