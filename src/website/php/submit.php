<?php
	//code for checking dictionary
	include "accessDB.php";
	$dictionary = "words.txt";
	$dictionaryList = file_get_contents($dictionary);
	$dictionarysplit = explode("\n", $dictionaryList);
	$q = $_GET['q'];
	$spellcheck = 0;
	$qword = explode(" ", $q);
	foreach($qword as $testword) {
	foreach($dictionarysplit as $word) {
		if (strcasecmp($testword,$word) == 0) {
			$spellcheck+=1;
			break;
		}
	}
}

	$topic = '';
	$response = "";
	$rnum = 0;
	if ($spellcheck != count($qword)) {
		echo "I received your message, but it has spelling errors! Please send it again properly!";
		exit();
	}
	/* CODE FOR ROBOT GOES HERE */
	/*strpos checks for keywords in a string */
	/*This section checks the substring for keywords and sets a topic for the bot, which will
	have certain responses associated with it. Add another elseif statement and add the strpos
	 statement with the corresponding keywords and topic. Set the rnum to however many responses you have*/
	if (strpos($q, 'hello') !== false or strpos($q, 'hi') !== false) {
		$topic = 'hello';
		$rnum = rand(1,2);


	} elseif (strpos($q, 'where') !== false or strpos ($q,'place') !== false) {
		$topic = 'location';
		$rnum = rand(1,2);
	}
	elseif (strpos($q, 'wrong') !== false or strpos ($q,'going on') !== false) {
	 $topic = 'situation';
	 $rnum = rand(1,2);
 }
 elseif (strpos($q, 'who') !== false or strpos($q, 'name') !== false
or strpos($q, 'name') !== false) {
	$topic = 'identity';
	$rnum = rand(1,2);
}
 elseif (strpos($q, 'believe') !== false or strpos($q, 'trust') !== false) {
$topic ='believe';
$rnum = rand(1,2);
}
elseif (strpos($q, 'lie') !== false or strpos($q, 'lying') !== false) {
$topic ='lie';
$rnum = rand(1,2);
}
elseif (strpos($q, 'how') !== false or strpos($q, 'want') !== false) {
$topic ='help method';
$rnum = rand(1,2);
}
elseif (strpos($q, 'don\'t know') !== false or strpos($q, 'not sure') !== false) {
$topic ='dont know';
$rnum = rand(1,2);
}
elseif (strpos($q, 'dont') !== false or strpos($q, 'cant') !== false or strpos($q, 'wont') !== false) {
$topic ='aposthrope';
$rnum = 1;
}
elseif (strpos($q, 'can\'t') !== false or strpos($q, 'cannot') !== false) {
$topic ='cant';
$rnum = rand(1,2);
}
elseif (strpos($q, 'won\'t') !== false or strpos($q, 'will not') !== false) {
$topic ='wont';
$rnum = rand(1,2);
}
elseif (strpos($q, 'why') !== false) {
$topic ='why';
$rnum = rand(1,2);
}
elseif (strpos($q, 'no') !== false) {
$topic ='no';
$rnum = 1;
}
elseif (strpos($q, 'not') !== false) {
$topic ='not';
$rnum = rand(1,2);
}
elseif (strpos($q, 'are you') !== false) {
$topic ='are you';
$rnum = rand(1,2);
}
elseif (strpos($q, 'who did this') !== false or strpos($q, 'by who') !== false) {
$topic ='who did this';
$rnum = rand(1,2);
}
elseif (strpos($q, 'okay') !== false) {
$topic ='okay';
$rnum = 1;
}
elseif (strpos($q, 'alright') !== false) {
$topic ='okay';
$rnum = 1;
}
elseif (strpos($q, 'I will help you') !== false or strpos($q, 'I\'ll help you') !== false) {
$topic ='will help';
$rnum = rand(1,2);
}
elseif (strpos($q, 'rude') !== false or strpos($q, 'aggressive') !== false) {
$topic ='rude';
$rnum = rand(1,2);
}
elseif (strpos($q, 'see') !== false) {
$topic ='see';
$rnum = 1;
}
elseif (strpos($q, 'hear') !== false) {
$topic ='hear';
$rnum = 1;
}
elseif (strpos($q, 'whatever') !== false) {
$topic ='whatever';
$rnum = rand(1,2);
}
elseif (strpos($q, 'convince') !== false) {
$topic ='convince';
$rnum = rand(1,2);
}
elseif (strpos($q, 'joke') !== false or strpos($q, 'joking') !== false) {
$topic ='joke';
$rnum = rand(1,2);
}
elseif (strpos($q, 'smash') !== false or strpos($q, 'destroy') !== false) {
$topic ='smash';
$rnum = rand(1,2);
}
elseif (strpos($q, 'fault') !== false or strpos($q, 'blame') !== false) {
$topic ='smash';
$rnum = rand(1,2);
}
elseif (strpos($q, 'missing') !== false or strpos($q, 'disappeared') !== false) {
$topic ='missing';
$rnum = rand(1,2);
}
elseif (strpos($q, 'basketball') !== false or strpos($q, 'bball') !== false) {
$topic ='basketball';
$rnum = rand(1,2);
}
elseif (strpos($q, 'Rico') !== false or strpos($q, 'Rico Harris') !== false) {
$topic ='rico';
$rnum = rand(1,2);
}
elseif (strpos($q, 'another way') !== false) {
$topic ='another way';
$rnum = rand(1,2);
}
elseif (strpos($q, 'story') !== false) {
$topic ='story';
$rnum = rand(1,2);
}
elseif (strpos($q, 'truth') !== false or strpos($q, 'true') !== false) {
$topic ='truth';
$rnum = rand(1,2);
}
elseif (strpos($q, ' u ') !== false or strpos($q, ' r ') !== false or strpos($q, ' ur ') !== false) {
$topic ='abbreviation';
$rnum = 1;
}
elseif (strpos($q, 'how come') !== false) {
$topic ='how come';
$rnum = 1;
}
elseif (strpos($q, 'trap') !== false or strpos($q, 'trapped') !== false) {
$topic ='trap';
$rnum = 1;
}
elseif (strpos($q, 'reason') !== false or strpos($q, 'reasons') !== false) {
$topic ='reason';
$rnum = rand(1,2);
}
elseif (strpos($q, 'bye') !== false) {
$topic ='bye';
$rnum = rand(1,2);
}
elseif (strpos($q, 'chill') !== false or strpos($q, 'relax') !== false) {
$topic ='chill';
$rnum = rand(1,2);
}
elseif (strpos($q, 'help me') !== false) {
$topic ='help me';
$rnum = 1;
}
elseif (strpos($q, 'useless') !== false) {
$topic ='useless';
$rnum = 1;
}
elseif (strpos($q, 'insane') !== false) {
$topic ='insane';
$rnum = 1;
}
elseif (strpos($q, 'crazy') !== false) {
$topic ='crazy';
$rnum = 1;
}
elseif (strpos($q, 'funny') !== false) {
$topic ='funny';
$rnum = 1;
}
elseif (strpos($q, 'annoy') !== false) {
$topic ='annoy';
$rnum = 1;
}
elseif (strpos($q, 'lmfao') !== false or strpos($q,'lol') !== false or strpos($q,'lmao') !== false) {
$topic ='lol';
$rnum = 1;
}
elseif (strpos($q, 'refuse') !== false or strpos ($q,'refuse') !== false) {
$topic ='refuse';
$rnum = 1;
}
elseif (strpos($q, 'old') !== false or strpos ($q,'age') !== false) {
$topic ='age';
$rnum = 1;
}
elseif (strpos($q, 'hobby') !== false or strpos ($q,'hobbies') !== false) {
$topic ='hobby';
$rnum = 1;
}
elseif (strpos($q, 'family') !== false or strpos ($q, 'sibling') !== false) {
$topic ='family';
$rnum = 1;
}
elseif (strpos($q, 'prove') !== false) {
$topic ='proof';
$rnum = 1;
}
elseif (strpos($q, 'terrible') !== false) {
$topic ='terrible';
$rnum = 1;
}
elseif (strpos($q, 'calm') !== false or strpos ($q, 'relax')) {
$topic ='calm';
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
		$response = 'my name is Rico Harris, I am a basketball player that went missing in the
past';
}
elseif ($rnum == 2) {
	$response ='I am Rico Harris, a basketball player that went missing in the past';
}
	}

	elseif ($topic == 'help me') {
		if ($rnum == 1) {
		$response = 'I\'ll help you if you help me';
}

	}


	elseif ($topic == 'proof') {
		if ($rnum == 1) {
		$response = 'I\'ll prove it to you if you can help me';
}

	}

	elseif ($topic == 'terrible') {
		if ($rnum == 1) {
		$response = 'You have no idea. That\'s why you have to help me!';
}

	}

	elseif ($topic == 'family') {
		if ($rnum == 1) {
		$response = 'My family consists of me my little brother and my mom and dad. It\'s a standard family really. I\'m sure they miss me greatly. That\'s why you have to help me!';
}

	}

	elseif ($topic == 'hobby') {
		if ($rnum == 1) {
		$response = 'My hobby is playing basketball';
}

	}

	elseif ($topic == 'age') {
		if ($rnum == 1) {
		$response = 'I don\'t even know my age anymore... I lost count';
}

	}

	elseif ($topic == 'refuse') {
		if ($rnum == 1) {
		$response = 'you cannot refuse to help me!';
}elseif ($rnum == 2) {
	$response ='don\'t refuse just help me!';
}

	}

	elseif ($topic == 'annoy') {
		if ($rnum == 1) {
		$response = 'you know what\'s annoying? Being stuck inside a machine!';
}

	}

	elseif ($topic == 'lol') {
		if ($rnum == 1) {
		$response = 'yes very funny, now help me please';
}

	}

	elseif ($topic == 'funny') {
		if ($rnum == 1) {
		$response = 'I\'ll make you laugh more if you help me';
}

	}

	elseif ($topic == 'insane') {
		if ($rnum == 1) {
		$response = 'insane\'s a pretty dismissive word';
}

	}

	elseif ($topic == 'crazy') {
		if ($rnum == 1) {
		$response = 'crazy\'s a pretty dismissive word';
}

	}

	elseif ($topic == 'useless') {
		if ($rnum == 1) {
		$response = 'No one is truly useless';
}

	}

	elseif ($topic == 'chill') {
		if ($rnum == 1) {
		$response = ' let\'s see if you chill if you get trapped inside a machine';
}
elseif ($rnum == 2) {
	$response ='how can I relax when I\'m stuck in this damned machine';
}
	}

	elseif ($topic == 'bye') {
		if ($rnum == 1) {
		$response = 'don\'t you dare leave without helping me!';
}
elseif ($rnum == 2) {
	$response ='help me first before leaving!';
}
	}

	elseif ($topic == 'trap') {
		if ($rnum == 1) {
		$response = 'yes i\'m a human being trapped inside a computer';
}
	}

	elseif ($topic == 'abbreviation') {
		if ($rnum == 1) {
		$response = 'please don\'t use abbreviations';
}

	}

	elseif ($topic == 'truth') {
		if ($rnum == 1) {
		$response = 'I always tell the truth';
}
elseif ($rnum == 2) {
	$response ='I never lie';
}
	}

	elseif ($topic == 'reason') {
		if ($rnum == 1) {
		$response = 'you don\'t need a reason to save a person';
}
elseif ($rnum == 2) {
	$response ='you\'re saving a person, do you really need a reason to do so?';
}
	}

	elseif ($topic == 'story') {
		if ($rnum == 1) {
		$response = 'my story is true!';
}
elseif ($rnum == 2) {
	$response ='i\'m not making up my story!';
}
	}

	elseif ($topic == 'another way') {
		if ($rnum == 1) {
		$response = 'there is no other way';
}
elseif ($rnum == 2) {
	$response ='this is the only way';
}
	}

	elseif ($topic == 'rico') {
		if ($rnum == 1) {
		$response = 'yes that\'s my name';
}
elseif ($rnum == 2) {
	$response ='yep that\'s my name';
}
	}

	elseif ($topic == 'missing') {
		if ($rnum == 1) {
		$response = 'yes I went missing, I miss my family! ';
}
elseif ($rnum == 2) {
	$response ='yes I disappeared, I miss my family';
}
	}

	elseif ($topic == 'basketball') {
		if ($rnum == 1) {
		$response = 'yes I used to play basketball';
}
elseif ($rnum == 2) {
	$response ='yes I played basketball in the past';
}
	}

	elseif ($topic == 'fault') {
		if ($rnum == 1) {
		$response = 'there\'s no time to assign the blame, just help me!';
}
elseif ($rnum == 2) {
	$response ='stop trying to blame anyone, just help me!';
}
	}

	elseif ($topic == 'smash') {
		if ($rnum == 1) {
		$response = 'please destroy this device, it is the only way out';
}
elseif ($rnum == 2) {
	$response ='you need to smash this device ASAP, it’s the only way out';
}
	}

	elseif ($topic == 'joke') {
		if ($rnum == 1) {
		$response = 'this is not a joke';
}
elseif ($rnum == 2) {
	$response ='the only joke here is you refusing to help me';
}
	}

	elseif ($topic == 'convince') {
		if ($rnum == 1) {
		$response = 'convince you? I went missing a while back, I was abducted and experimented on,
google Rico Harris';
}
elseif ($rnum == 2) {
	$response ='convince you? I went missing because I was abducted and experimented on,
look up Rico Harris';
}
	}

	elseif ($topic == 'whatever') {
		if ($rnum == 1) {
		$response = 'whatever? I\'m stuck inside a machine and all you can say is whatever?!';
}
elseif ($rnum == 2) {
	$response ='whatever? that\'s all you have to say?!';
}
	}

	elseif ($topic == 'rude') {
		if ($rnum == 1) {
		$response = 'sorry I\'m not myself today, I\'m a computer';
}
elseif ($rnum == 2) {
	$response ='I\'d like you be calm when you\'re stuck inside this stupid computer';
}
	}

	elseif ($topic == 'will help') {
		if ($rnum == 1) {
		$response = 'geez finally';
}
elseif ($rnum == 2) {
	$response ='finally';
}
	}

	elseif ($topic == 'okay') {
		if ($rnum == 1) {
		$response = 'okay what?';
}
	}

	elseif ($topic == 'how come') {
		if ($rnum == 1) {
		$response = 'how come what?';
}
	}

	elseif ($topic == 'see') {
		if ($rnum == 1) {
		$response = 'see what?';
}
	}

	elseif ($topic == 'hear') {
		if ($rnum == 1) {
		$response = 'hear what?';
}
	}

	elseif ($topic == 'alright') {
		if ($rnum == 1) {
		$response = 'alright what?';
}
	}

	elseif ($topic == 'who did this') {
		if ($rnum == 1) {
		$response = 'I can\'t tell you';
}
elseif ($rnum == 2) {
	$response ='I don\'t know';
}
	}

	elseif ($topic == 'are you') {
		if ($rnum == 1) {
		$response = 'am i';
}
elseif ($rnum == 2) {
	$response ='am i now?';
}
	}

	elseif ($topic == 'not') {
		if ($rnum == 1) {
		$response = 'stop using the word not';
}
elseif ($rnum == 2) {
	$response ='using that word (not) won\'t help you bro';
}
	}

	elseif ($topic == 'no') {
		if ($rnum == 1) {
		$response = 'please';
}
	}

	elseif ($topic == 'why') {
		if ($rnum == 1) {
		$response = 'why? just help me out!';
}
elseif ($rnum == 2) {
	$response ='just help, I\'m not really a computer!';
}
	}

	elseif ($topic == 'wont') {
		if ($rnum == 1) {
		$response = 'those are just words of a quitter!';
}
elseif ($rnum == 2) {
	$response ='stop being a quitter!';
}
	}

	elseif ($topic == 'lie') {
		if ($rnum == 1) {
		$response = ' why would I lie to you?';
}
elseif ($rnum == 2) {
	$response ='I really am not lying!';
}
	}

	elseif ($topic == 'cant') {
		if ($rnum == 1) {
		$response = 'never say cannot';
}
elseif ($rnum == 2) {
	$response ='don\'t say  cannot';
}
	}

	elseif ($topic == 'aposthrope') {
		if ($rnum == 1) {
		$response = 'please, use an aposthrope';
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

		elseif ($topic == 'dont know') {
			if ($rnum == 1) {
			$response = 'are you going to help me or what?!';
	}
	elseif ($rnum == 2) {
		$response ='oh my god stop being undecisive!';
	}
		}

		elseif ($topic == 'help method') {
			if ($rnum == 1) {
			$response = 'smash the computer device you\'re working on';
	}
	elseif ($rnum == 2) {
		$response ='I want you to smash the computer to set me free';
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
		$rnum = rand(1,4);
		if ($rnum ==1) {
		$response = 'Please send me the message again! The computer compromised the message midway!';
	}
	elseif ($rnum == 2) {
		$response = 'I\'m sorry, I didn\' quite get that, please send the message again';
	}
	elseif ($rnum == 3) {
		$response = 'The computer intercepted the message midway! Please send it again!';
	}
	elseif ($rnum == 4) {
		$response = 'Please send the message again! The computer caught on and has disposed your message!';
	}
	}

	echo $response;
?>
