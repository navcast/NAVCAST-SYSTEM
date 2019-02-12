<?php
	$conn = mysqli_connect("localhost", "root", "", "navcast");
	
	if($conn-> connect_error){
		die("Connection Failed");
		
	}
?>