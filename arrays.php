<?php
	$numArray = array(1, 2, 3);
	print $numArray[0];//prints 1
	print "<br>\n";

	for($i = 0; $i < count($numArray); $i++) {
		print $numArray[$i] . "<br>\n";
	}

	/* key => value example using a foreach loop  */
	$me = array("fname" => "Clark", "lname" => "Blumer");
	foreach($me as $value) {
		print "$value<br>\n";//prints value of the keys of the array
	}

	/* As of php 5.4 -- Mizzou babbage server uses 5.3  */
	/*
	$miniMe = [ 
		"fname" => "Sally",
		"lname" => "Smith",
	];
	print_r($miniMe);
	*/

	/* Arrays in an Array  */
	$zoo = array("bigCats" => array("Lion", "Tiger", "Liger"), 
		     "barnAnimals" => array("Goat", "Duck", "Bear")
	);
	foreach($zoo as $animalCategory => $animalArray){
		print "$animalCategory<br>\n";
		foreach($animalArray as $key => $value) {
			print "-> $key = $value<br>\n";
		}
	}

	/*   */
?>
