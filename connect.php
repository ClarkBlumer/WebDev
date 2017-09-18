<?php
	/* connect to a database to compare login creditials */
	$DBHost = 'dbhost-mysql.cs.missouri.edu'; 
	$DBUser = 'cjbq4f';
	$DBPass - 'password';
	$DBName = 'cjbq4f';

	$mysqli = new mysqli('$DBHost', '$DBUser', '$DBPass', '$DBName');

	if($mysqli->connect_error) {
		die('Connect Error (' . mysqli_connect_errno() . ')');
	}

	echo 'Sucess...' . $mysqli->host_info . '\n';

	$mysqli->close();
?>