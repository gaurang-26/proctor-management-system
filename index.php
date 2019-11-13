<?php
// error_reporting(0);
session_start();



$con= new mysqli('localhost:3307','root','Gaurmitt@1234','dsce_cse');
	if(mysqli_connect_error())
	{
		die("server not connected");
	}





if (isset($_POST['btn']))
{
$uname=$_POST['username'];
$pwd=$_POST['password'];
$membertype=$_POST['membertype'];


	if($membertype=='admin')
	{

		$sel="select * from admin where username='$uname' and password='$pwd'";

		$res=mysqli_query($con,$sel);
		if($rr=mysqli_fetch_array($res))
		{
			$username=$rr['username'];
			$_SESSION['ausername']=$username;
			header("location:admindashboard.php");
		}

	}

	if($membertype=='teacher')
	{

		$sel="select * from teacher where username='$uname' and password='$pwd'";

		$res=mysqli_query($con,$sel);
		if($rr=mysqli_fetch_array($res))
		{
			$username=$rr['username'];
			$_SESSION['tusername']=$username;
			header("location:teacherdashboard.php");

		}
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
<style>

#r1,#r2
{
	margin:6px 0 0 50px;
}
</style>

	<body style="">
		<div style="background-color:rgba(236, 245, 245, 0.93); color:#000000;  font-weight:1000; font-size:18px; border-radius:3px; padding:2% 10%;  width:50%; height:400px; margin:10% 25% 10% 25%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8); " >
			<center><h1 style="color:#800000; font-family: 'Cinzel', serif; font-weight: bold;">Login</h1></center>

			<form class="form-horizontal" method="post">

			<input type="text" class="form-control" name="username" placeholder="Enter Username">
			<br />

			<input type="password" class="form-control" name="password" placeholder="Enter password">
			<br/>

			<input type="radio" value="admin"  name="membertype"  id="r1"/> &nbsp;Admin &nbsp &nbsp <input type="radio" value="teacher" name="membertype" id="r2" />&nbsp;Teacher
			<br /><br/>

			<center>
			<input type="submit" value="LOGIN" class="btn btn-primary form-control" name="btn" style="font-size:14px;" />
			</center>
			</form>
		</div>
	</body>
</html>
