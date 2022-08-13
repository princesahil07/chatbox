<?php

	// SQL Connection
	$con = mysqli_connect("localhost", "root", "", "shoutit");
	// test the connection
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_error());
	}

?>
