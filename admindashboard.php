<?php
	session_start();
$con= new mysqli('localhost:3307','root','Gaurmitt@1234','dsce_cse');
	if(mysqli_connect_error())
	{
		die("server not connected");
	}
	if(isset($_SESSION['ausername']))
	{
		$username=$_SESSION['ausername'];
		$sel="select * from admin where username='$username'";
		$res=mysqli_query($con,$sel);
	}
	else
	{
		header("location:index.php");
	}
	if(isset($_POST['logout']))
	{
		unset($_SESSION['username']);
		header("location:index.html");
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>::HOMEPAGE::</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="bootstrap-3.1.1/dist/css/bootstrap.min.css "rel="stylesheet" type="text/css" >
	<link rel="icon" type="image/png" href="img/Logo.png"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
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
		<style>
			body {
				margin: 0;
				font-family: Verdana,sans-serif;;
			}
			/* .navbar{
				background-attachment: fixed;
				color:#fff;
				background-color: #333;
				position:fixed;
			}
			.navbar a {
				float: left;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				font-size: 17px;
			}
			.topnav-right {
				float: right;
			}
*/
.navbar {
	background-color: #24305e !important;
	border-radius:0px !important;
}
			.table {
				width: 100%;
			}
			.sidenav {
				font-family: Verdana,sans-serif;
				font-size: 17px;
				height: 100%;
				width:10%;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
				color:#fff;
				background-color: #374781;
				overflow-x: hidden;
				padding-top: 20px;
			}
			.sidenav a {
				padding: 6px 8px 6px 16px;
				text-decoration: none;
				font-size: 17px;
				/* background-color: #333; */
				color: #FFF;
				display: block;
			}
			.sidenav a:hover {
				background-color: #ddd;
				color: black;
			}
#logout
{
	background-color:
#333;
border: 1px solid
black;
color:
#FFFFFF;
padding: 12px;
border-radius: 10px;
}
#navbarNav
{
	color:#fff;
}
.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 24px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
		</style>
	</head>

	<body style="background-color:#a8d0e6;">

	<?php
		while($rr=mysqli_fetch_array($res))
		{
	?>
<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
<!-- <div class="navbar  navbar-fixed-top"> -->
 <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
						<a>Hello <?php echo $rr['title']." ".$rr['name']?></a>
					 </li>

</ul>
</div>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

				<li class="nav-item">

	          <form method="post">

          <button type="submit" name="logout" id="logout">Logout</button>
	</form>
</li>
</ul>
</div>



</nav>
		<?php } ?>
		<div class="sidenav">
			<br/><br/>
			<a href="admindashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
			<a href="adminteacher.php" style="font-family: Verdana,sans-serif;">TEACHERS</a>
			<a href="admininsertstudent.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>
			<a href="insertteacher.php" style="font-family: Verdana,sans-serif;">ADD TEACHER</a>
		</div>

		<div class="main">
			<div class="container-fluid" style="padding:100px;  width:100%; height:1000px; " >
				<div class="col-md-6" style=" padding:20px;">
					<div style="padding:25px; border:solid;  background-color:black; opacity:0.85; color:#FFFFFF; font-size:25px; font-family: Verdana,sans-serif;">
						<form class="form-horizontal" method="POST" action='adminstudent.php'>
							<div class="form-group" >
								<label class="control-label col-md-2" >USN:</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name="usn" placeholder="Enter USN">
								</div>
							</div>

							<div class="form-group" >
								<div class="col-md-offset-2 col-md-10">
									<button type="submit" class="btn btn-primary" name="btn1">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6" style=" padding:20px;">
					<div style="padding:25px; background-color:black; opacity:0.85; color:#FFFFFF; font-size:25px; font-family: Verdana,sans-serif;">
						<form class="form-horizontal" method="post" action="adminyear.php">
							<div class="form-group" method="post">
								<label class="control-label col-md-2" >Year:</label>
							<div class="col-md-10">
								<select name="year" class="form-control" >
								<option value="none">Select</option>
								<option value="1st Year">1st year</option>
								<option value="2nd year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
							</select>
							</div>
						</div>
						<div class="form-group" method="post">
							<div class="col-md-offset-2 col-md-10">
								<button type="submit" class="btn btn-primary" name="btn2">Search</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>