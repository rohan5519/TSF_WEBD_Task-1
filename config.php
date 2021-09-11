<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "easymoney";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Connection failure to database, reason: ".mysqli_connect_error());
	}

?>
