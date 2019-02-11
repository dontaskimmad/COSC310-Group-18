<?php
	//code for checking dictionary
	include "accessDB.php";
	
	$q = $_GET['q'];
	$response = "";
	
	/* CODE FOR ROBOT GOES HERE */
	
	if ($q !== ""){
		$response = "Hello!";
	} else {
		$response =  "Anyone there?";
	}
	echo $response;
?>