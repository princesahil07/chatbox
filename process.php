<?php include 'database.php'; ?>

<?php
	// getting user information 
	if(isset($_POST['submit'])){
		// mysqli_real_escape_string set for security region
		$user = mysqli_real_escape_string($con, $_POST['user']);
		$message = mysqli_real_escape_string($con, $_POST['message']);

		// set timezone for india
		date_default_timezone_get();
		$time = date('h:i:s', time()); 

		//validity input
		if(!isset($user) || $user == '' || !isset($message) || $message == ''){
			$error = '<script>alert("Please fill username and message")</script>';
			header("location : index.php");
			exit();
		}
		else{
			$query = "INSERT INTO shouts(user,message,time) VALUES('$user','$message','$time')";
			if(!mysqli_query($con, $query)){
				die("Submit Failed ".mysqli_error($con));
			}
			else{
				header("location : index.php");
				exit();
			}
		}

	}
?>