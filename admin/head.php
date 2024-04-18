<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<?php 
$pass = 0;
require_once "../control.php";
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        $roles = $fetch_info['roles'];
        $id = $fetch_info['usersID'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
        if($roles == 1 ){
            $title = "System Administrator";
        }else{
            header('Location: ../user/home.php');
        }
    }
}else{
    header('Location: ../index.php');
}

$sys = mysqli_query($con,"SELECT * FROM details;");
$details = mysqli_fetch_assoc($sys);

if (isset($_POST['system_details'])) {
    $about = $_POST['about'];
    $expirience = $_POST['expirience'];
    $customers = $_POST['customers'];
    $award = $_POST['award'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $opening = $_POST['opening'];
    $vacations = $_POST['vacations'];
    $update = mysqli_query($con,"UPDATE details SET about = '$about', expirience = '$expirience',customers = '$customers',award = '$award',tel = '$tel',
                                email = '$email',address = '$address',opening = '$opening',vacations = '$vacations' WHERE id = 1" );
    if($update){
        echo "<script>alert('Update  Successfully');window.location.href='about.php'</script>";
    }else{
        echo "<script>alert('Denied');window.location.href='about.php'</script>";
    }
    # code...
}
$ser = mysqli_query($con,"SELECT * FROM service;");

if (isset($_GET['editser'])) {
    $getID = $_GET['editser'];
    $serz = mysqli_query($con,"SELECT * FROM service WHERE serviceID = $getID;");
    $services = mysqli_fetch_assoc($serz);
    # code...
}
if (isset($_GET['deleteser'])) {
    $delID = $_GET['deleteser'];
    $deleser = mysqli_query($con,"DELETE FROM service WHERE serviceID = $delID;");
    if($deleser){
        echo "<script>alert('Deleted Successfully');window.location.href='services.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='services.php'</script>";
        }
    # code...
}
if(isset($_POST['services'])){
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    if ($getID == "") {
        $insert = mysqli_query($con,"INSERT INTO service(icon,title,description) VALUES('$icon','$title','$description');" );
            if($insert){
            echo "<script>alert('Add Successfully');window.location.href='services.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='services.php'</script>";
            }
    }else {
        
        $update = mysqli_query($con,"UPDATE service SET icon = '$icon', title = '$title',description = '$description' WHERE serviceID = $getID;" );
            if($update){
            echo "<script>alert('Update Successfully');window.location.href='services.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='services.php'</script>";
            }
    }
    
}

if (isset($_GET['editdoc'])) {
    $getID = $_GET['editdoc'];
    $dov = mysqli_query($con,"SELECT * FROM doctors WHERE doctorsID = $getID;");
    $doctors = mysqli_fetch_assoc($dov);
    # code...
}
if (isset($_GET['deletedoc'])) {
    $delID = $_GET['deletedoc'];
    $deleser = mysqli_query($con,"DELETE FROM doctors WHERE doctorsID = $delID;");
    if($deleser){
        echo "<script>alert('Deleted Successfully');window.location.href='doctors.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='doctors.php'</script>";
        }
    # code...
}
$ddc = mysqli_query($con,"SELECT * FROM doctors;");
if(isset($_POST['doctor'])){
    $dname = $_POST['dname'];
    if ($getID == "") {
        $insert = mysqli_query($con,"INSERT INTO doctors(name) VALUES('$dname');" );
            if($insert){
            echo "<script>alert('Add Successfully');window.location.href='doctors.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='doctors.php'</script>";
            }
    }else {
        
        $update = mysqli_query($con,"UPDATE doctors SET name = '$dname' WHERE doctorsID = $getID;" );
            if($update){
            echo "<script>alert('Update Successfully');window.location.href='doctors.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='doctors.php'</script>";
            }
    }
    
}
$appt = mysqli_query($con,"SELECT appointment.appointmentID, users.first_name, users.last_name, users.contact,users.email,appointment.date_approint, appointment.time_approint, doctors.name, service.title, appointment.status from appointment join doctors on doctors.doctorsID = appointment.doctorsID join service on service.serviceID = appointment.serviceID join users on users.userID = appointment.userID;");

if (isset($_GET['approve'])) {
    $approve = $_GET['approve'];
    $deleser = mysqli_query($con,"UPDATE appointment SET status ='Approved' WHERE appointmentID = $approve;");
    if($deleser){
        echo "<script>alert('Approved Successfully');window.location.href='index.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='index.php'</script>";
        }
    # code...
}

if (isset($_GET['denied'])) {
    $denied = $_GET['denied'];
    $deleser = mysqli_query($con,"UPDATE appointment SET status ='Denied' WHERE appointmentID = $denied;");
    if($deleser){
        echo "<script>alert('Denied Appointment');window.location.href='index.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='index.php'</script>";
        }
    # code...
}

$ffq = mysqli_query($con,"SELECT * FROM faq;");
if (isset($_GET['editfaq'])) {
    $editfaq = $_GET['editfaq'];
    $dov = mysqli_query($con,"SELECT * FROM faq WHERE faqID = $editfaq;");
    $faqq = mysqli_fetch_assoc($dov);
    # code...
}
if (isset($_GET['deletfaq'])) {
    $deletfaq = $_GET['deletfaq'];
    $deleser = mysqli_query($con,"DELETE FROM faq WHERE faqID = $deletfaq;");
    if($deleser){
        echo "<script>alert('Delete Faq');window.location.href='faq.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='faq.php'</script>";
        }
    # code...
}
if(isset($_POST['faq'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    if ($editfaq == "") {
        $insert = mysqli_query($con,"INSERT INTO faq(title,description) VALUES('$title','$description');" );
            if($insert){
            echo "<script>alert('Add Successfully');window.location.href='faq.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='faq.php'</script>";
            }
    }else {
        
        $update = mysqli_query($con,"UPDATE faq SET title = '$title',description = '$description' WHERE faqID = $editfaq;" );
            if($update){
            echo "<script>alert('Update Successfully');window.location.href='faq.php'</script>";
            }else{
            echo "<script>alert('Denied');window.location.href='faq.php'</script>";
            }
    }
    
}


?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
	<title>Eliteskin -Administrative</title>
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>