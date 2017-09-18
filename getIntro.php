<?php
	$name = $_GET['name'];
	$lang = $_GET['lang'];
	
	if($lang == 'de')
		print "Guten tag $name";
	else
		print "Hello " . $name . "!";
	
?>
