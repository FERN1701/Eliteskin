<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host = 'smtp.hostinger.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'mailer@psucpe.tech';
	$mail->Password   = 'PSU$mailer2024';
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;

	$mail->setFrom('mailer@psucpe.tech', 'Eliteskin PH');
    $mail->addAddress($_GET['email'], $_GET['name']);

    $html_body = 	"<div>
	    				<h3>Appointment Booking Received</h3>
		    			<p>
		    				Thank you for your interest in Eliteskin PH<br/>
		    				We'll let you know if any changes in your request is made.
		    				<br/>
		    				<br/>
		    				<br/>
		    				Eliteskin PH<br/>
		    				Address: 2L, Il Centro, Sta Lucia Mall, Marcos Highway cor. Felix Ave 1900 Cainta, PhilippinesPH<br/>
		    				Email: hello@eliteskinph.com
		    			</p>
    				</div>";

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $html_body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail client';
    header('Content-Type: application/json; charset=utf-8');
	
    if($mail->send()) {
    	$data = ["success"	=> true];
    	echo json_encode($data);
    }
    else {
    	$data = ["success"	=> false];
    	echo json_encode($data);
    }

?>