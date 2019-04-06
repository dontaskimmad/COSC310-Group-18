<?php
include "porter2.php";

//PorterStremmer simplifies words, capitals are removed and punctuation removed

function formatWord($q){
	$PorterStemmer = new Porter2();
	$words = explode(' ', $q);
	$q = "";
	foreach($words as $word){
		$q = $q . " " . $PorterStemmer -> stem($word);
	}

	$q = strtolower($q);
	$q = preg_replace("/[^a-z 0-9]+/", "", $q);
	
	return $q;
} 


function returnTopic($q){	
	/*strpos checks for keywords in a string */
	/*This section checks the substring for keywords and sets a topic for the bot, which will
	have certain responses associated with it. Add another elseif statement and add the strpos
	 statement with the corresponding keywords and topic. Set the rnum to however many responses you have*/
	 
	$topic = '';
	
	if (strpos($q, 'usernam') !== false){
		$topic = 'username';
	} elseif (strpos($q, 'where') !== false or strpos ($q,'place') !== false or strpos($q, 'locat') !== false) {
		$topic = 'location';
	} elseif (strpos($q, 'when') !== false and strpos ($q, 'you') !== false){
		$topic = 'when';
	} elseif (strpos($q, 'who did this') !== false or strpos($q, 'by who') !== false) {
		$topic ='who did this';
	} elseif (strpos($q, 'wrong') !== false or strpos ($q,'go on') !== false) {
		$topic = 'situation';
	} elseif (strpos($q, ' who ') !== false or strpos($q, 'name') !== false) {
		$topic = 'identity';
	} elseif (strpos($q, 'believ') !== false or strpos($q, 'trust') !== false) {
		$topic ='believe';
	} elseif (strpos($q, ' lie ') !== false) {
		$topic ='lie';
	} elseif (strpos($q, 'how') !== false or strpos($q, 'want') !== false) {
		$topic ='help method';
	} elseif (strpos($q, 'dont know') !== false or strpos($q, 'not sure') !== false) {
		$topic ='dont know';
	} elseif (strpos($q, 'cant') !== false or strpos($q, 'cannot') !== false) {
		$topic ='cant';
	} elseif (strpos($q, 'wont') !== false or strpos($q, 'will not') !== false) {
		$topic ='wont';
	} elseif (strpos($q, 'why') !== false) {
		$topic ='why';
	} elseif (strpos($q, 'no') !== false) {
		$topic ='no';
	} elseif (strpos($q, 'not') !== false) {
		$topic ='not';
	} elseif (strpos($q, 'are you') !== false) {
		$topic ='are you';
	} elseif (strpos($q, 'okay') !== false) {
		$topic ='okay';
	} elseif (strpos($q, 'alright') !== false) {
		$topic ='okay';
	} elseif (strpos($q, 'i will help') !== false or strpos($q, 'ill help') !== false) {
		$topic ='will help';
	} elseif (strpos($q, 'rude') !== false or strpos($q, 'aggressive') !== false) {
		$topic ='rude';
	} elseif (strpos($q, 'see') !== false) {
		$topic ='see';
	} elseif (strpos($q, 'hear') !== false) {
		$topic ='hear';
	} elseif (strpos($q, 'whatever') !== false) {
		$topic ='whatever';
	} elseif (strpos($q, 'convince') !== false) {
		$topic ='convince';
	} elseif (strpos($q, 'joke') !== false) {
		$topic ='joke';
	} elseif (strpos($q, 'smash') !== false or strpos($q, 'destroy') !== false) {
		$topic ='smash';
	} elseif (strpos($q, 'fault') !== false or strpos($q, 'blame') !== false) {
		$topic ='smash';
	} elseif (strpos($q, 'miss') !== false or strpos($q, 'disappear') !== false) {
		$topic ='missing';
	} elseif (strpos($q, 'basketball') !== false or strpos($q, 'bball') !== false) {
		$topic ='basketball';
	} elseif (strpos($q, 'rico') !== false or strpos($q, 'rico harris') !== false) {
		$topic ='rico';
	} elseif (strpos($q, 'another way') !== false) {
		$topic ='another way';
	} elseif (strpos($q, 'stori') !== false) {
		$topic ='story';
	} elseif (strpos($q, 'truth') !== false or strpos($q, 'true') !== false) {
		$topic ='truth';
	} elseif (strpos($q, ' u ') !== false or strpos($q, ' r ') !== false or strpos($q, ' ur ') !== false) {
		$topic ='abbreviation';
	} elseif (strpos($q, 'how come') !== false) {
		$topic ='how come';
	} elseif (strpos($q, 'trap') !== false) {
		$topic ='trap';
	} elseif (strpos($q, 'reason') !== false) {
		$topic ='reason';
	} elseif (strpos($q, 'bye') !== false) {
		$topic ='bye';
	} elseif (strpos($q, 'chill') !== false or strpos($q, 'relax') !== false) {
		$topic ='chill';
	} elseif (strpos($q, 'help me') !== false) {
		$topic ='help me';
	} elseif (strpos($q, 'useless') !== false) {
		$topic ='useless';
	} elseif (strpos($q, 'insan') !== false) {
		$topic ='insane';
	} elseif (strpos($q, 'craz') !== false) {
		$topic ='crazy';
	} elseif (strpos($q, 'funn') !== false) {
		$topic ='funny';
	} elseif (strpos($q, 'annoy') !== false) {
		$topic ='annoy';
	} elseif (strpos($q, 'lmfao') !== false or strpos($q,'lol') !== false or strpos($q,'lmao') !== false) {
		$topic ='lol';
	} elseif (strpos($q, 'refuse') !== false) {
		$topic ='refuse';
	} elseif (strpos($q, 'hello') !== false or strpos($q, ' hi ') !== false) {
		$topic = 'hello';
	}
	return $topic;
}

function returnResponse($topic, $q){
/*This is the list of possible responses, determined by the topic and its response number
These are randomized using the rand(x,y) function, where x is the smallest possible integer
 and y is the largest, if you want to add some responses, just increment y by however many
responses you add. */

	$rnum = rand(1,2);
	$response = "";
	
	if ($topic == 'hello') {
		if ($rnum == 1) {
		$response = 'is anyone there? please help!';
		} elseif ($rnum ==2) {
			$response = 'is someone there? oh my god please help me!';
		}
	} elseif ($topic == 'identity') {
		if ($rnum == 1) {
			$response = 'my name is Rico Harris, I am a basketball player that went missing in the past';
		} elseif ($rnum == 2) {
			$response ='I am Rico Harris, a basketball player that went missing in the past';
		}
	} elseif ($topic == 'help me') {
		$response = 'I\'ll help you if you help me';
	} elseif ($topic == 'refuse') {
		if ($rnum == 1) {
			$response = 'you cannot refuse to help me!';
		}elseif ($rnum == 2) {
			$response ='don\'t refuse just help me!';
		}
	} elseif ($topic == 'annoy') {
		$response = 'you know what\'s annoying? Being stuck inside a machine!';
	} elseif ($topic == 'lol') {
		$response = 'yes very funny, now help me please';
	}elseif ($topic == 'funny') {
		$response = 'I\'ll make you laugh more if you help me';
	} elseif ($topic == 'insane') {
		$response = 'insane\'s a pretty dismissive word';
	} elseif ($topic == 'crazy') {
		$response = 'crazy\'s a pretty dismissive word';
	} elseif ($topic == 'useless') {
		$response = 'No one is truly useless';
	} elseif ($topic == 'chill') {
		if ($rnum == 1) {
			$response = ' let\'s see if you chill if you get trapped inside a machine';
		} elseif ($rnum == 2) {
			$response ='how can I relax when I\'m stuck in this damned machine';
		}
	} elseif ($topic == 'bye') {
		if ($rnum == 1) {
			$response = 'don\'t you dare leave without helping me!';
		} elseif ($rnum == 2) {
			$response ='help me first before leaving!';
		}
	} elseif ($topic == 'trap') {
		$response = 'yes i\'m a human being trapped inside a computer';
	} elseif ($topic == 'abbreviation') {
		$response = 'please don\'t use abbreviations';
	} elseif ($topic == 'truth') {
		if ($rnum == 1) {
			$response = 'I always tell the truth';
		} elseif ($rnum == 2) {
			$response ='I never lie';
		}
	} elseif ($topic == 'reason') {
		if ($rnum == 1) {
			$response = 'you don\'t need a reason to save a person';
		} elseif ($rnum == 2) {
			$response ='you\'re saving a person, do you really need a reason to do so?';
		}
	} elseif ($topic == 'story') {
		if ($rnum == 1) {
			$response = 'my story is true!';
		} elseif ($rnum == 2) {
			$response ='i\'m not making up my story!';
		}
	} elseif ($topic == 'another way') {
		if ($rnum == 1) {
			$response = 'there is no other way';
		} elseif ($rnum == 2) {
			$response ='this is the only way';
		}
	} elseif ($topic == 'rico') {
		if ($rnum == 1) {
			$response = 'yes that\'s my name';
		} elseif ($rnum == 2) {
			$response ='yep that\'s my name';
		}
	} elseif ($topic == 'missing') {
		if ($rnum == 1) {
			$response = 'yes I went missing, I miss my family! ';
		} elseif ($rnum == 2) {
			$response ='yes I disappeared, I miss my family';
		}
	} elseif ($topic == 'basketball') {
		if ($rnum == 1) {
			$response = 'yes I used to play basketball';
		} elseif ($rnum == 2) {
			$response ='yes I played basketball in the past';
		}
	} elseif ($topic == 'fault') {
		if ($rnum == 1) {
			$response = 'there\'s no time to assign the blame, just help me!';
		} elseif ($rnum == 2) {
			$response ='stop trying to blame anyone, just help me!';
		}
	} elseif ($topic == 'smash') {
		if ($rnum == 1) {
			$response = 'please destroy this device, it is the only way out';
		} elseif ($rnum == 2) {
			$response ='you need to smash this device ASAP, it’s the only way out';
		}
	} elseif ($topic == 'joke') {
		if ($rnum == 1) {
			$response = 'this is not a joke';
		} elseif ($rnum == 2) {
			$response ='the only joke here is you refusing to help me';
		}
	} elseif ($topic == 'convince') {
		if ($rnum == 1) {
			$response = 'convince you? I went missing a while back, I was abducted and experimented on, google Rico Harris';
		} elseif ($rnum == 2) {
			$response ='convince you? I went missing because I was abducted and experimented on, look up Rico Harris';
		}
	} elseif ($topic == 'whatever') {
		if ($rnum == 1) {
			$response = 'whatever? I\'m stuck inside a machine and all you can say is whatever?!';
		} elseif ($rnum == 2) {
			$response ='whatever? that\'s all you have to say?!';
		}
	} elseif ($topic == 'rude') {
		if ($rnum == 1) {
			$response = 'sorry I\'m not myself today, I\'m a computer';
		} elseif ($rnum == 2) {
			$response ='I\'d like you be calm when you\'re stuck inside this stupid computer';
		}
	} elseif ($topic == 'will help') {
		if ($rnum == 1) {
			$response = 'geez finally';
		} elseif ($rnum == 2) {
			$response ='finally';
		}
	}elseif ($topic == 'when'){
		$response ='I\'ve been trapped in here since October, 2014';
	} elseif ($topic == 'okay') {
		$response = 'okay what?';
	} elseif ($topic == 'how come') {
		$response = 'how come what?';
	} elseif ($topic == 'see') {
		$response = 'see what?';
	} elseif ($topic == 'hear') {
		$response = 'hear what?';
	} elseif ($topic == 'alright') {
		$response = 'alright what?';
	} elseif ($topic == 'who did this') {
		if ($rnum == 1) {
			$response = 'I can\'t tell you';
		} elseif ($rnum == 2) {
			$response ='I don\'t know';
		}
	} elseif ($topic == 'are you') {
		if ($rnum == 1) {
			$response = 'am i';
		} elseif ($rnum == 2) {
			$response ='am i now?';
		}
	} elseif ($topic == 'not') {
		if ($rnum == 1) {
			$response = 'stop using the word not';
		} elseif ($rnum == 2) {
			$response ='using that word (not) won\'t help you bro';
		}
	} elseif ($topic == 'no') {
		$response = 'please';
	} elseif ($topic == 'why') {
		if ($rnum == 1) {
			$response = 'why? just help me out!';
		} elseif ($rnum == 2) {
			$response ='just help, I\'m not really a computer!';
		}
	} elseif ($topic == 'wont') {
		if ($rnum == 1) {
			$response = 'those are just words of a quitter!';
		} elseif ($rnum == 2) {
			$response ='stop being a quitter!';
		}
	} elseif ($topic == 'lie') {
		if ($rnum == 1) {
			$response = ' why would I lie to you?';
		} elseif ($rnum == 2) {
			$response ='I really am not lying!';
		}
	} elseif ($topic == 'cant') {
		if ($rnum == 1) {
			$response = 'never say cannot';
		} elseif ($rnum == 2) {
			$response ='don\'t say  cannot';
		}
	} elseif ($topic == 'situation') {
		if ($rnum == 1) {
			$response = 'I am stuck inside this computer!';
		} elseif ($rnum == 2) {
			$response ='I got kidnapped and is now held captive in this computer!';
		}
	} elseif ($topic == 'location') {
		if ($rnum == 1) {
			$response = 'I don\'t know where I am. All I know is that I\'m inside this computer';
		} elseif ($rnum == 2) {
			$response ='I have no idea... but you have to help me!';
		}
	} elseif ($topic == 'dont know') {
		if ($rnum == 1) {
			$response = 'are you going to help me or what?!';
		} elseif ($rnum == 2) {
			$response ='oh my god stop being undecisive!';
		}
	} elseif ($topic == 'help method') {
		if ($rnum == 1) {
			$response = 'smash the computer device you\'re working on';
		} elseif ($rnum == 2) {
			$response ='I want you to smash the computer to set me free';
		}
	} elseif ($topic == 'believe') {
		if ($rnum == 1) {
			$response = 'you have to believe me!';
		} elseif ($rnum == 2) {
			$response ='please believe me!';
		}
	}elseif ($topic == 'username') {
		if ($_SESSION["username"] == 0){
			$response = 'Is ' . ucfirst(substr($q, 8)) . ' your name? It doesn\'t matter, you need to help me.';
			$_SESSION["username"] = 1;
		} elseif ($_SESSION["username"] == 1){
			$response = 'I already told you, names don\'t matter. I just need your help.';
			$_SESSION["username"] = 2;
		} else {
			$response = 'Would you drop it? I don\'t care what your name is!';
		}
	} elseif ($topic == '') {
		$rnum = rand(1,5);
		if ($rnum == 1){
			$response = 'Please send me the message again! The computer compromised the message midway!';
		} elseif ($rnum == 2){
			$response = 'I feel like you don\'t believe me...';
		} elseif ($rnum == 3) {
			$response = 'I need to get out of here, I feel like I\'m going insane';
		} elseif($rnum == 4) {
			$response = 'Are you not reading what I\'m saying? I need to get out of here';
		} else {
			$response = 'I don\'t understand what you\'re trying to say.';
		}
	}

	return $response;
}
	
?>