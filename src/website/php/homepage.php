<?php 
session_start();
$_SESSION["username"] = false; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> ChatBot </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/compromise@latest/builds/compromise.min.js"></script>
	<link rel="stylesheet" href="../../css/homepage.css">
	<link rel="stylesheet" href="../../css/chat.css">
	<link rel="stylesheet" href="../../css/form.css">
	<script type="text/javascript" src="../../scripts/submit.js"></script>
</head>
<body>
	<div class="main">
		<h1> ChatBot </h1>
		<!--Chat-->
		<div class="container" id="textfield">
			<h2>Text Chat</h2>
		</div>
		<!--text submission-->
		<form class="container" id="submitform" >
			<input type="text" id="submittxt" name="input">
			<input type="submit" id="submitbtn" name="submit" >
			<p id="errormsg"></p>
		</form>
	</div>
</body>
</html>