<?php

	include "connection.php";

	$email 			= $_GET['email'];
	$password 		= $_GET['password'];

	$sql 		= "SELECT id, firstname, lastname, address, mobile, email  FROM user WHERE email = '".$email."' AND password = '".$password."' LIMIT 1";
	$result 	= $conn->query($sql);
	$data 		= [];

	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
	  	$data 	= [
	  		"success"	=> true,
	  		"data"		=> $row
	  	];
	  }
	}
	else {
	  	$data 	= [
	  		"success"	=> false,
	  		"data"		=> null
	  	];
	}

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($data);


?>