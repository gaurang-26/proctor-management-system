<?php
$con= new mysqli('localhost:3307','root','Gaurmitt@1234','dsce_cse');
	if(mysqli_connect_error())
	{
		die("server not connected");
	}

$tid=$_REQUEST['tid'];

$del="delete from teacher where tid=$tid";

if(mysqli_query($con,$del))
{

	header("location:adminteacher.php");

}
else
{
echo mysqli_error();
}

?>