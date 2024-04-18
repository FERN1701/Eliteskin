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
        $id = $fetch_info['userID'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
        if($roles == 1 ){
            header('Location: ../admin/index.php');
        }else{
            
            $title = "user";
        }
    }
}else{
    header('Location: ../index.php');
}

$sys = mysqli_query($con,"SELECT * FROM details;");
$details = mysqli_fetch_assoc($sys);

if(isset($_POST['profile'])){
    if($_FILES['lis_img0']['name']!=''){
        $lis_img0 = $_FILES['lis_img0']['name'];
        }
        else{
          $lis_img0 = $fetch_info['profile'];
        }
        $tempname = $_FILES['lis_img0']['tmp_name'];
        $folder = "../images/profiles/".$lis_img0;
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    move_uploaded_file($tempname, $folder);
    $update = mysqli_query($con, "UPDATE users SET profile = '$lis_img0', first_name= '$fname', last_name= '$lname', email= '$email', contact= '$number', address= '$address' WHERE userID = $id");
    if($update){
        echo "<script>alert('Update Profile Successfully');window.location.href='about.php'</script>";
    }else{
        echo "<script>alert('Update Profile not Successfull');window.location.href='about.php'</script>";
    }
}


$ser = mysqli_query($con,"SELECT * FROM service;");
$doc = mysqli_query($con,"SELECT * FROM doctors;");
if (isset($_GET['viewser'])) {
    $getID = $_GET['viewser'];
    $serz = mysqli_query($con,"SELECT * FROM service WHERE serviceID = $getID;");
    $services = mysqli_fetch_assoc($serz);
    # code...
}

if (isset($_GET['editappoint'])) {
    $editappoint = $_GET['editappoint'];
    $serzapt = mysqli_query($con,"SELECT * FROM appointment WHERE appointmentID = $editappoint;");
    $appointment = mysqli_fetch_assoc($serzapt);
    # code...
}
if (isset($_GET['deleteappoint'])) {
    $deleteappoint = $_GET['deleteappoint'];
    $deleser = mysqli_query($con,"DELETE FROM appointment WHERE appointmentID = $deleteappoint;");
    if($deleser){
        echo "<script>alert('Deleted Successfully');window.location.href='index.php'</script>";
        }else{
        echo "<script>alert('Denied');window.location.href='index.php'</script>";
        }
    # code...
}
if (isset($_POST['appointments'])) {
    if($_FILES['lis_img0']['name']!=''){
        $lis_img0 = $_FILES['lis_img0']['name'];
        }
        else{
          $lis_img0 = $appointment['skin_image'];
        }
        $tempname = $_FILES['lis_img0']['tmp_name'];
        $folder = "../images/conditions/".$lis_img0;
        if(empty($_POST['conditions'])){
            $errors['conditions'] = "Add Conditions";
        }else {
            $conditions = $_POST['conditions'];
        }
        if(empty($_POST['services'])){
            $errors['services'] = "Add services";
        }else {
            $services = $_POST['services'];
        }
        if(empty($_POST['doctor'])){
            $errors['doctor'] = "Add doctor";
        }else {
            $doctor = $_POST['doctor'];
        }
        if(empty($_POST['dates'])){
            $errors['dates'] = "Add date";
        }else {
            $dates = $_POST['dates'];
        }
        if(empty($_POST['times'])){
            $errors['times'] = "Add time";
        }else {
            $times = $_POST['times'];
        }
        if(count($errors) === 0){
            if ($editappoint =="") {
                move_uploaded_file($tempname, $folder);
                $insert = mysqli_query($con,"INSERT INTO appointment(userID,serviceID,doctorsID,skin_image,conditions,date_approint,time_approint)
                                            VAlUES ('$id','$services','$doctor','$lis_img0','$conditions','$dates','$times')" );
                if($insert){
                    echo "<script>alert('Appoint Successfully');window.location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Denied');window.location.href='index.php'</script>";
                }
            }else {
                move_uploaded_file($tempname, $folder);
                $update = mysqli_query($con,"UPDATE appointment SET serviceID = '$services',doctorsID  = '$doctor',skin_image  = '$lis_img0',conditions = '$conditions',date_approint  = '$dates',time_approint = '$times' WHERE appointmentID = $editappoint" );
                if($update){
                    echo "<script>alert('Update Successfully');window.location.href='index.php'</script>";
                }else{
                    echo "<script>alert('Denied');window.location.href='index.php'</script>";
                }
            }
        }
}
$ffq = mysqli_query($con,"SELECT * FROM faq;");
$apt = mysqli_query($con,"SELECT appointment.appointmentID, appointment.date_approint, appointment.time_approint, doctors.name, service.title, appointment.status from appointment join doctors on doctors.doctorsID = appointment.doctorsID join service on service.serviceID = appointment.serviceID WHERE appointment.userID = $id;");


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