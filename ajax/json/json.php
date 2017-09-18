<?php
	// Variables on the server that we want to pacakge for the client
	$name = 'Justin';
	$pet = 'bunnies';
	
	// The client is anticipating JSON. We want to output something like this:
	// {"name": "Justin", "pet": "Bunnies"}
	
	// We could accomplish that like this:
	//print '{"name": "' . $name . '", "pet": "' . $pet . '"}';
	
	
	// Another option would be to use an array and json_encode
	$me = array('name' => 'Justin', 'pet' => 'bunnies');
	
	// json_encode can create a JSON representation of the value you pass it
	// http://www.php.net/manual/en/function.json-encode.php
	print json_encode($me);
?>