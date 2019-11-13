<?php
error_reporting(0);
session_start();
$con = new mysqli('localhost:3307', 'root', 'Gaurmitt@1234', 'dsce_cse');
if (mysqli_connect_error()) {
	die("server not connected");
}
if (isset($_POST['btn'])) {
	$erl = $_POST['enrollid'];
	$pwd = $_POST['password'];
	$sel = "select * from student where enrollid='$erl' and password='$pwd'";
	$res = mysqli_query($con, $sel);
	if ($rr = mysqli_fetch_array($res)) {
		$erl = $rr['enrollid'];
		$_SESSION['sserl'] = $erl;
		header("location:studentprofileview.php");
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::LOGIN PAGE::</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="bootstrap-3.1.1/dist/css/bootstrap.min.css "rel="stylesheet" type="text/css" >
		<link rel="icon" type="image/png" href="img/Logo.png"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Lato Ruqaa' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<script type="text/javascript" src="jquery-3.2.1.js"></script>
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
		    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
		/>
		<script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
	</head>


	<body style="background-image:url(img/logo2.jpg); background-size: cover; ">
		<div style=" background-color:rgba(236, 245, 245, 0.93); color:#000000;  font-weight:1000; font-size:18px; border-radius:3px; padding:2% 10%;  width:50%; height:400px; margin:10% 25% 10% 25%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8); " >
			<center><h1 style="color:#800000; font-family: 'Cinzel', serif; font-weight: bold;">Student Login</h1></center>

			<form class="form-horizontal" method="post">

			<input type="text" class="form-control" name="enrollid" placeholder="Enter Enrollid">
			<br />

			<input type="password" class="form-control" name="password" placeholder="Enter password">
			<br/>



			<center>
			<input type="submit" value="LOGIN" class="btn btn-primary form-control" name="btn" style="font-size:14px;" />
			</center>
			</form>
		</div>
	</body>
</html>
