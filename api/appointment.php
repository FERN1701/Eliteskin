<?php

	header('Content-Type: application/json; charset=utf-8');

	$user_id 		= $_GET['user_id']; 
	$services 		= json_encode($_GET['services']); 
	$sched_date 	= $_GET['sched_date']; 
	$sched_time 	= $_GET['sched_time'];
	$doctor 		= $_GET['doctor'];
	$message 		= $_GET['message'];
	$total 			= $_GET['total'];

	if($sched_date == '') {
		$data = [
			"success" 	=> false,
			"message"	=> "Please provide appointment date."
		];
		echo json_encode($data);
	}
	else if($sched_time == '') {
		$data = [
			"success" 	=> false,
			"message"	=> "Please provide appointment time."
		];
		echo json_encode($data);
	}
	else if($message == '') {
		$data = [
			"success" 	=> false,
			"message"	=> "Please provide message"
		];
		echo json_encode($data);
	}
	else if($total == '') {
		$data = [
			"success" 	=> false,
			"message"	=> "Please select at least one service"
		];
		echo json_encode($data);
	}
	else {

		include "connection.php";

		$sql = "INSERT INTO appointment (user_id, services, sched_date, sched_time, doctor, message, total) VALUES ('$user_id', '$services', '$sched_date', '$sched_time', '$doctor', '$message', '$total')";

		if ($conn->query($sql) === true) {
		  	$data 	= [
				"success"		=> true,
			  	"message"		=> "Appointment successfully created"
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