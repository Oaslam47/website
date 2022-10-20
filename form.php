<?php

	$hostName = "localhost";
	$userName = "root";
	$passWord = "";
	// Create connection
	$conn = mysqli_connect($hostName, $userName, $passWord);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo 'Connected successfully';
	}

	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO entries(fname,email,msg) VALUES ('$fname','$email', '$msg')";

	if(mysqli_query($conn,$sql)){
		echo "done";
	}

	// Close connection
	mysqli_close($conn);
	
?>	
