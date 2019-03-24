<?php
	$conn = new mysqli('localhost', 'root', '', 'room');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	