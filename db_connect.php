<?php
	//make connection with database
	$link = mysqli_connect("localhost","root","","vimal");
	// Check connection
	if($link === false) {
    	die("ERROR: Could not connect. " . mysql_connect_error());
	}
?>
