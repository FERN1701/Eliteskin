<?php
	
	header('Content-Type: application/json; charset=utf-8');

	$firstname 			= $_GET['firstname'];
	$lastname 			= $_GET['lastname'];
	$mobile 			= $_GET['mobile'];
	$email 				= $_GET['email'];
	$address 			= $_GET['address'];
	$password 			= $_GET['password'];
	$confirm_password 	= $_GET['confirm_password'];

	if($firstname == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your firstname"
		];
		echo json_encode($data);
	}
	else if($lastname == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your lastname"
		];
		echo json_encode($data);
	}
	else if($mobile == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your mobile"
		];
		echo json_encode($data);
	}
	else if($email == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your email"
		];
		echo json_encode($data);
	}
	else if($address == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your address"
		];
		echo json_encode($data);
	}
	else if($password == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your password"
		];
		echo json_encode($data);
	}
	else if($confirm_password == '') {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Please provide your confirmation password"
		];
		echo json_encode($data);
	}
	else if($confirm_password !== $password) {
		$data 	= [
			"success"		=> false,
		  	"message"		=> "Password and confirmation password doesn't match",
		];
		echo json_encode($data);
	}
	else {

		include "connection.php";
		$password 			= $_GET['password'];
		$sql = "INSERT INTO user (firstname, lastname, address, mobile, email, password) VALUES ('$firstname', '$lastname', '$address', '$mobile', '$email', '$password')";

		if ($conn->query($sql) === true) {
		  	$data 	= [
				"success"		=> true,
			  	"message"		=> "Account successfully created"
			];
			echo json_encode($data);
		} else {
		  	$data 	= [
				"success"		=> false,
			  	"message"		=> "Unable to create account, try again later."
			];
			echo json_encode($data);
		}
		$conn->close();
	}
?>