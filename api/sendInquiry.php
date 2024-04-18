<?php

	header('Content-Type: application/json; charset=utf-8');

	include "connection.php";

	$name 			= $_GET['name'];
	$mobile 		= $_GET['mobile'];
	$address 		= $_GET['address'];
	$email 			= $_GET['email'];
	$message 		= $_GET['message'];
	$created_at 	= date('Y-m-d h:i:s');

	$sql = "INSERT INTO inquiry (name, mobile, address, email, message, created_at) VALUES ('$name', '$mobile', '$address', '$email', '$message', '$created_at')";

	if ($conn->query($sql) === true) {
		$data 	= [
			"success"		=> true,
			 "message"		=> "Inquiry successfully sent"
		];
		echo json_encode($data);
	} else {
		$data 	= [
			"success"		=> false,
			  "message"		=> "Unable to send inquiry, try again later."
		];
		echo json_encode($data);
	}
	$conn->close();


?>