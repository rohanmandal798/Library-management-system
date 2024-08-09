<?php
	// $con=mysql_connect('localhost','root','37890fhasd') or die(mysql_error());
	// mysql_select_db('library') or die("cannot select DB");
	$servername = 'localhost';
	$username = 'root'; // Change if needed
	$password = ''; // Update with the correct password if necessary
	$dbname = 'library'; // Ensure this database exists

	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>