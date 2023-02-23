<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "@dmin12";
	$dbname = "feedback_section";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}else{
        header("location: index.php");
    }

?>