<?php
	include "acccessDB.php";
	header('Content-Type: application/json');
	
	$q = $_REQUEST["q"];
	$response = "";
	
	/* CODE FOR ROBOT GOES HERE */
	
	if ($q !== ""){
		$response = "Hello!";
	} else {
		$response =  "Anyone there?";
	}
	echo $response;
?>