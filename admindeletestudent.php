<?php
$con= new mysqli('localhost:3307','root','Gaurmitt@1234','dsce_cse');
	if(mysqli_connect_error())
	{
		die("server not connected");
	}
	$sid=$_REQUEST['sid'];
	$del="delete from student where sid=$sid";

	if(mysqli_query($con,$del))
	{
		header("location:admindashboard.php");
	}
	else
	{
		echo mysqli_error();
	}
?>