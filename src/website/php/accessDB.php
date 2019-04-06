<?php
	include "../../database/db_credential.php";
	global $host, $user, $password, $database, $table;
		
	function returnWord($word){
		//connect to database
		$connection = mysqli_connect($host, $user, $password, $database);
		//check for errors
		$error = mysqli_connect_error();
		$errorarray = array();
		if($error != null) {
			//return an array with a single value which is an error message
			$errorarray[] = "Failed to connect to database";
			return $errorarray;
		} else {
			//return an array which contains all the values of the product
			$sql = "SELECT * FROM '$table' WHERE word = '$word'";
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_row($result);
			mysqli_close($connection);
			return $row;
		}
		//return an array with a single value which is an error message
		$errorarray[] = "Could not find " . (string)$word;
		return $errorarray;
	}


?>
