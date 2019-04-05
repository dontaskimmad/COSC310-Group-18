<?php
	session_start();
	//code for checking dictionary
	include "accessDB.php";
	include "response.php";
	
	$q = $_GET['q'];
	/*$q = formatWord($q);
	*/
	
	$topic = returnTopic($q);
	echo returnResponse($topic);

?>
