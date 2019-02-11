<?php 
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> ChatBot </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--<link rel="stylesheet" href="../css/homepage.css">-->
	<script type="text/javascript" src="../../scripts/submit.js"></script>
</head>
<body>
<?php
	include "accessDB.php";
?>
	<h1> ChatBot </h1>
	<div class="main">
		<div id="textfield"></div>
		<form id="submitform" >
			<input type="text" id="submittxt" name="input">
			<input type="submit" id="submitbtn" name="submit" >
		</form>
		<p id="errormsg"></p>
	</div>
</body>
</html>