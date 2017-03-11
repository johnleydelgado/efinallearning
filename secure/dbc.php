<?php

	//credentials
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "student_management_portal";

	//making connection
	$conn = new mysqli($servername, $username, $password, $dbName);

	//testing connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>