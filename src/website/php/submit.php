<?php
	//code for checking dictionary
	include "accessDB.php";


	$q = $_GET['q'];
	$topic = '';
	$response = "";
	$rnum = 0;

	/* CODE FOR ROBOT GOES HERE */
	/*strpos checks for keywords in a string */
	/*This section checks the substring for keywords and sets a topic for the bot, which will
	have certain responses associated with it. Add another elseif statement and add the strpos
	 statement with the corresponding keywords and topic. Set the rnum to however many responses you have*/
	if (strpos($q, 'hello') !== false or strpos($q, 'hi') !== false) {
		$topic = 'hello';
		$rnum = rand(1,2);


	} elseif (strpos($q, 'where') !== false or strpos ($q,'place')) {
		$topic = 'location';
		$rnum = rand(1,2);
	}
	elseif (strpos($q, 'wrong') !== false or strpos ($q,'going on')) {
	 $topic = 'situation';
	 $rnum = rand(1,2);
 }
 elseif (strpos($q, 'who') !== false or strpos($q, 'name') !== false
or strpos($q, 'name') !== false) {
	$topic = 'identity';
	$rnum = rand(1,2);
} elseif (strpos($q, 'believe') !== false or strpos($q, 'trust') !== false) {
$topic ='believe';
$rnum = rand(1,2);
}


/*This is the list of possible responses, determined by the topic and its response number
These are randomized using the rand(x,y) function, where x is the smallest possible integer
 and y is the largest, if you want to add some responses, just increment y by however many
responses you add.

*/

	if ($topic == 'hello') {
		if ($rnum == 1) {
		$response = 'is anyone there? please help!';
}
		elseif ($rnum ==2) {
			$response = 'is someone there? oh my god please help me!';
		}
}


	elseif ($topic == 'identity') {
		if ($rnum == 1) {
		$response = ' my name is Rico Harris, I am a basketball player that went missing in the
past';
}
elseif ($rnum == 2) {
	$response ='I am Rico Harris, a basketball player that went missing in the past';
}
	}


		elseif ($topic == 'situation') {
			if ($rnum == 1) {
			$response = 'I am stuck inside this computer!';
	}
	elseif ($rnum == 2) {
		$response ='I got kidnapped and is now held captive in this computer!';
	}
		}

		elseif ($topic == 'location') {
			if ($rnum == 1) {
			$response = 'I don\'t know where I am. All I know is that I\'m inside this computer';
	}
	elseif ($rnum == 2) {
		$response ='I have no idea... but you have to help me!';
	}
		}


	elseif ($topic == 'believe') {
		if ($rnum == 1) {
		$response = 'you have to believe me!';
}
elseif ($rnum == 2) {
	$response ='please believe me!';
}
	}


	elseif ($topic == '') {
		$response = 'Please send me the message again! The computer compromised the message midway!';
	}

	echo $response;
?>
