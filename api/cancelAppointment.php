<?php

	header('Content-Type: application/json; charset=utf-8');

	include "connection.php";

	$id 	= $_GET['id'];
	$sql 	= "DELETE FROM appointment WHERE id = '".$id."'";

	if ($conn->query($sql) === true) {
	  	$data 	= ["success" => true ];
	  	echo json_encode($data);
	} else {
	  	$data 	= ["success" => false ];
	  	echo json_encode($data);
	}

	$conn->close();

?>