<?php
ob_start();


session_start();

$con = new mysqli('localhost:3307', 'root', '', 'dsce_cse');
if (mysqli_connect_error()) {
	die("server not connected");
}

if (isset($_SESSION['tusername'])) {
	$username = $_SESSION['tusername'];
	$sel1 = "select * from teacher where username='$username'";

	$res1 = mysqli_query($con, $sel1);
	unset($_SESSION['ausername']);
} else if (isset($_SESSION['ausername'])) {
	$username = $_SESSION['ausername'];
	$sel1 = "select * from admin where username='$username'";

	$res1 = mysqli_query($con, $sel1);
	unset($_SESSION['tusername']);
} else {
	header("location:index.php");
}



$sid = $_REQUEST['sid'];
$sel = "select * from student where sid=$sid";

$res = mysqli_query($con, $sel);


while ($rr = mysqli_fetch_array($res)) {

	$ttl = $rr['title'];
	$fnm = $rr['firstname'];
	$mnm = $rr['middlename'];
	$lnm = $rr['lastname'];
	$usn = $rr['usn'];
	$enrl = $rr['enrollid'];

	$sec = $rr['section'];
	$sft = $rr['shift'];
	$admtyp = $rr['admissiontype'];
	$cursem = $rr['currentsem'];
	$curyr = $rr['currentyear'];
	$admdt = $rr['admissiondate'];
	$acdyr = $rr['academicyear'];
	$rno = $rr['rollno'];
	$db = $rr['dob'];
	$gen = $rr['gender'];

	$ph = $rr['phone'];
	$eml = $rr['email'];

	$rel = $rr['religion'];

	$cat = $rr['category'];


	$motnm = $rr['mothername'];
	$motph = $rr['motherphone'];
	$fatnm = $rr['fathername'];
	$fatph = $rr['fatherphone'];
	$sem1 = $rr['sem1'];
	$sem2 = $rr['sem2'];
	$sem3 = $rr['sem3'];
	$sem4 = $rr['sem4'];
	$sem5 = $rr['sem5'];
	$sem6 = $rr['sem6'];
	$sem7 = $rr['sem7'];
	$sem8 = $rr['sem8'];
	$cgpa = $rr['cgpa'];
	$rsadd = $rr['resadd'];
	$rsdst = $rr['resdist'];
	$rsstt = $rr['resstate'];
	$rspin = $rr['respin'];
	$lcladd = $rr['localadd'];
	$lcldst = $rr['localdist'];
	$lclstt = $rr['localstate'];
	$lclpin = $rr['localpin'];
	$hmtyp = $rr['hometype'];
	$extracurr1 = $rr['extracurr1'];
	$extracurr2 = $rr['extracurr2'];
	$extracurr3 = $rr['extracurr3'];

	$issues = $rr['issues'];
	$subject1 = $rr['subject1'];
	$subject2 = $rr['subject2'];
	$subject3 = $rr['subject3'];
	$subject4 = $rr['subject4'];
	$subject5 = $rr['subject5'];
	$subject6 = $rr['subject6'];
	$pid = $rr['proctorid'];
}




if (isset($_POST['btn'])) {
	$ttl = $_POST['title'];
	$fnm = $_POST['firstname'];
	$mnm = $_POST['middlename'];
	$lnm = $_POST['lastname'];
	$usn = $_POST['usn'];
	$enrl = $_POST['enrollid'];

	$sec = $_POST['section'];
	$sft = $_POST['shift'];
	$admtyp = $_POST['admissiontype'];
	$cursem = $_POST['currentsem'];
	$curyr = $_POST['currentyear'];
	$admdt = $_POST['admissiondate'];
	if ($admdt == "")
		$admdt = '1000-01-31';
	$acdyr = $_POST['academicyear'];
	$rno = $_POST['rollno'];
	$db = $_POST['dob'];
	if ($db == "")
		$db = '1000-01-31';
	$gen = $_POST['gender'];

	$ph = $_POST['phone'];
	$eml = $_POST['email'];

	$rel = $_POST['religion'];

	$cat = $_POST['category'];



	$motnm = $_POST['mothername'];
	$motph = $_POST['motherphone'];
	$fatnm = $_POST['fathername'];
	$fatph = $_POST['fatherphone'];
	$sem1 = $_POST['sem1'];
	$sem2 = $_POST['sem2'];
	$sem3 = $_POST['sem3'];
	$sem4 = $_POST['sem4'];
	$sem5 = $_POST['sem5'];
	$sem6 = $_POST['sem6'];
	$sem7 = $_POST['sem7'];
	$sem8 = $_POST['sem8'];
	$cgpa = $_POST['cgpa'];
	$rsadd = $_POST['resadd'];
	$rsdst = $_POST['resdist'];
	$rsstt = $_POST['resstate'];
	$rspin = $_POST['respin'];
	$lcladd = $_POST['localadd'];
	$lcldst = $_POST['localdist'];
	$lclstt = $_POST['localstate'];
	$lclpin = $_POST['localpin'];
	$hmtyp = $_POST['hometype'];
	$extracurr1 = $_POST['extracurr1'];
	$extracurr2 = $_POST['extracurr2'];
	$extracurr3 = $_POST['extracurr3'];


	$issues = $_POST['issues'];
	$subject1 = $_POST['SUB1'];
	$subject2 = $_POST['SUB2'];
	$subject3 = $_POST['SUB3'];
	$subject4 = $_POST['SUB4'];
	$subject5 = $_POST['SUB5'];
	$subject6 = $_POST['SUB6'];
	$pid = $_POST['proctorid'];



	$updt = "update student set title='$ttl',firstname='$fnm',middlename='$mnm',lastname='$lnm',usn='$usn',enrollid='$enrl',section='$sec',shift='$sft',admissiontype='$admtyp',currentsem='$cursem',currentyear='$curyr',admissiondate='$admdt',academicyear='$acdyr',rollno='$rno',dob='$db',gender='$gen',phone='$ph',email='$eml',religion='$rel',category='$cat',mothername='$motnm',motherphone='$motph',fathername='$fatnm',fatherphone='$fatph',sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8',cgpa='$cgpa',resadd='$rsadd',resdist='$rsdst',resstate='$rsstt',respin='$rspin',localadd='$lcladd',localdist='$lcldst',localstate='$lclstt',localpin='$lclpin',hometype='$hmtyp',extracurr1='$extracurr1',extracurr2='$extracurr2',extracurr3='$extracurr3',issues='$issues',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',proctorid='$pid'  where   sid='$sid'";
	if (mysqli_query($con, $updt)) {
		header("location:index.php");
	} else {
		echo mysqli_error();
	}
}


if (isset($_POST['logout'])) {
	unset($_SESSION['tusername']);
	unset($_SESSION['ausername']);
	header("location:index.html");
}
ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>::HOMEPAGE::</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="bootstrap-3.1.1/dist/css/bootstrap.min.css " rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="img/Logo.png" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		body {
			margin: 0;
			font-family: Verdana, sans-serif;
			;
		}

		/*
.navbar{
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
} */

		.table {
			width: 100%;
		}


		.navbar {
			background-color: #24305e !important;
			border-radius: 0px !important;
		}

		.sidenav {
			font-family: Verdana, sans-serif;
			font-size: 17px;
			height: 100%;
			width: 10%;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			color: #fff;
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

		.main {
			margin-left: 160px;
			/* Same as the width of the sidenav */
			font-size: 24px;
			/* Increased text to enable scrolling */
			padding: 0px 10px;
		}

		#logout {
			background-color:
				#333;
			border: 1px solid black;
			color:
				#FFFFFF;
			padding: 12px;
			border-radius: 10px;
		}

		#navbarNav {
			color: #fff;
		}
	</style>

</head>


<body style="">


	<?php

	while ($rr1 = mysqli_fetch_array($res1)) {
		?>

		<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-between"">
<!-- <div class=" navbar navbar-fixed-top"> -->
			<div class="collapse navbar-collapse " id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a>Hello <?php echo $rr1['title'] . " " . $rr1['name'] ?></a>
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
		<br /><br />

		<?php
		if (isset($_SESSION['ausername'])) {

			echo '<a href="admindashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
			<a href="adminteacher.php" style="font-family: Verdana,sans-serif;">TEACHERS</a>
			<a href="admininsertstudent.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>
			<a href="insertteacher.php" style="font-family: Verdana,sans-serif;">ADD TEACHER</a>';
		} else {
			echo '<a href="teacherdashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
<a href="teacherdashboard.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>';
		} ?>

	</div>

	<div class="main" style="padding:150px;">











		<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()">





			<div class="container-fluid">
				<div class="row">




					<div class="panel panel-default" style="opacity:0.9">
						<div class="panel-heading" style="background-color:#2d98da;color:white">
							<center>
								<h1>EDIT STUDENT PROFILE</h1>
							</center>
						</div>
						<div class="panel-body container-fluid">
							<div class=" col-sm-12">
								<table class="table table-user-information">
									<tbody>


										<tr>

											<td>
												STUDENT NAME
												<div class="form-group">
													<label class="control-label col-md-3">Title:</label>
													<div class="col-md-9">



														<?php if ($ttl == "Ms.") { ?>

															<select name="title" class="form form">
																<option value="none">Select</option>
																<option selected value="Ms.">Ms.</option>
																<option value="Mr.">Mr.</option>
															</select>
														<?php } elseif ($ttl == "Mr.") { ?>

															<select name="title" class="form form">
																<option value="none">Select</option>
																<option value="Ms.">Ms.</option>
																<option selected value="Mr.">Mr.</option>
															</select>
														<?php } else { ?>
															<select name="title" class="form form">
																<option selected value="none">Select</option>
																<option value="Ms.">Ms.</option>
																<option value="Mr.">Mr.</option>
															</select>
														<?php	} ?>



													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">First Name:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="firstname" value="<?php echo $fnm ?>" placeholder="Enter First Name">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Middle Name:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="middlename" value="<?php echo $mnm ?>" placeholder="Enter Middle Name">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Last Name:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="lastname" value="<?php echo $lnm ?>" placeholder="Enter Last Name">
													</div>
												</div>


											</td>
										</tr>

										<tr>

											<td>


												<div class="form-group">
													<label class="control-label col-md-3">Proctor's ID:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="proctorid" placeholder=" <?php echo $pid; ?>">

													</div>
												</div>



											</td>
										</tr>


										<tr>

											<td>
												ADMISSION DETAILS
												<div class="form-group">
													<label class="control-label col-md-3">USN:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="usn" value="<?php echo $usn ?>" placeholder="Enter Student's USN" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Enroll ID:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="enrollid" value="<?php echo $enrl ?>" placeholder="Enter Student's Enroll ID" />
													</div>
												</div>



												<div class="form-group">
													<label class="control-label col-md-3">Section:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="section" value="<?php echo $sec ?>" placeholder="Enter Student's Section" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Shift:</label>
													<div class="col-md-9">


														<?php if ($sft == "Yes") { ?>

															<input type="radio" value="Yes" checked="checked" name="shift" />Yes <input type="radio" value="No" name="shift" />No
														<?php } elseif ($sft == "No") { ?>

															<input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" checked="checked" name="shift" />No
														<?php } else { ?>
															<input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" name="shift" />No
														<?php	} ?>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Admission Type:</label>
													<div class="col-md-9">




														<?php if ($admtyp == "CET") { ?>

															<select name="admissiontype" class="form">
																<option value="none">Select</option>
																<option selected value="CET">CET</option>
																<option value="COMED-K">COMED-K</option>
																<option value="Management">Management</option>
															</select>
														<?php } elseif ($admtyp == "COMED-K") { ?>

															<select name="admissiontype" class="form">
																<option value="none">Select</option>
																<option value="CET">CET</option>
																<option selected value="COMED-K">COMED-K</option>
																<option value="Management">Management</option>
															</select>
														<?php } elseif ($admtyp == "Management") { ?>

															<select name="admissiontype" class="form">
																<option value="none">Select</option>
																<option value="CET">CET</option>
																<option value="COMED-K">COMED-K</option>
																<option selected value="Management">Management</option>
															</select>
														<?php } else { ?>
															<select name="admissiontype" class="form">
																<option selected value="none">Select</option>
																<option value="CET">CET</option>
																<option value="COMED-K">COMED-K</option>
																<option value="Management">Management</option>
															</select>
														<?php	} ?>



													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Current Semester:</label>
													<div class="col-md-9">





														<?php if ($cursem == "1st Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option selected value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php } elseif ($cursem == "2nd Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option selected value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php } elseif ($cursem == "3rd Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option selected value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php } elseif ($cursem == "4th Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option selected value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php } elseif ($cursem == "5th Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option selected value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>

														<?php } elseif ($cursem == "6th Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option selected value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>

														<?php } elseif ($cursem == "7th Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option selected value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php } elseif ($cursem == "8th Semester") { ?>

															<select name="currentsem" class="form form">
																<option value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option selected value="8th Semester">8th Semester</option>

															</select>
														<?php } else { ?>
															<select name="currentsem" class="form form">
																<option selected value="none">Select</option>
																<option value="1st Semester">1st Semester</option>
																<option value="2nd Semester">2nd Semester</option>
																<option value="3rd Semester">3rd Semester</option>
																<option value="4th Semester">4th Semester</option>
																<option value="5th Semester">5th Semester</option>
																<option value="6th Semester">6th Semester</option>
																<option value="7th Semester">7th Semester</option>
																<option value="8th Semester">8th Semester</option>

															</select>
														<?php	} ?>


													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Current Year:</label>
													<div class="col-md-9">



														<?php if ($curyr == "1st Year") { ?>

															<select name="currentyear" class="form form">
																<option value="none">Select</option>
																<option selected value="1st Year">1st Year</option>
																<option value="2nd Year">2nd Year</option>
																<option value="3rd Year">3rd Year</option>
																<option value="4th Year">4th Year</option>
															</select>
														<?php } elseif ($curyr == "2nd Year") { ?>

															<select name="currentyear" class="form form">
																<option value="none">Select</option>
																<option value="1st Year">1st Year</option>
																<option selected value="2nd Year">2nd Year</option>
																<option value="3rd Year">3rd Year</option>
																<option value="4th Year">4th Year</option>
															</select>
														<?php } elseif ($curyr == "3rd Year") { ?>

															<select name="currentyear" class="form form">
																<option value="none">Select</option>
																<option value="1st Year">1st Year</option>
																<option value="2nd Year">2nd Year</option>
																<option selected value="3rd Year">3rd Year</option>
																<option value="4th Year">4th Year</option>
															</select>
														<?php } elseif ($curyr == "4th Year") { ?>

															<select name="currentyear" class="form form">
																<option value="none">Select</option>
																<option value="1st Year">1st Year</option>
																<option value="2nd Year">2nd Year</option>
																<option value="3rd Year">3rd Year</option>
																<option selected value="4th Year">4th Year</option>
															</select>
														<?php } else { ?>
															<select name="currentyear" class="form form">
																<option selected value="none">Select</option>
																<option value="1st Year">1st Year</option>
																<option value="2nd Year">2nd Year</option>
																<option value="3rd Year">3rd Year</option>
																<option value="4th Year">4th Year</option>
															</select>
														<?php	} ?>

													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Admission Date:</label>
													<div class="col-md-9">
														<input type="date" class="form form" value="<?php echo $admdt ?>" name="admissiondate" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Academic Year:</label>
													<div class="col-md-9">



														<?php if ($acdyr == "2014-2018") { ?>

															<select name="academicyear" class="form form">
																<option value="none">Select</option>
																<option selected value="2014-2018">2014-2018</option>
																<option value="2015-2019">2015-2019</option>
																<option value="2016-2020">2016-2020</option>
																<option value="2017-2021">2017-2021</option>
															</select>
														<?php } elseif ($acdyr == "2015-2019") { ?>

															<select name="academicyear" class="form form">
																<option value="none">Select</option>
																<option value="2014-2018">2014-2018</option>
																<option selected value="2015-2019">2015-2019</option>
																<option value="2016-2020">2016-2020</option>
																<option value="2017-2021">2017-2021</option>
															</select>
														<?php } elseif ($acdyr == "2016-2020") { ?>


															<select name="academicyear" class="form form">
																<option value="none">Select</option>
																<option value="2014-2018">2014-2018</option>
																<option value="2015-2019">2015-2019</option>
																<option selected value="2016-2020">2016-2020</option>
																<option value="2017-2021">2017-2021</option>
															</select>
														<?php } elseif ($acdyr == "2017-2021") { ?>


															<select name="academicyear" class="form form">
																<option value="none">Select</option>
																<option value="2014-2018">2014-2018</option>
																<option value="2015-2019">2015-2019</option>
																<option value="2016-2020">2016-2020</option>
																<option selected value="2017-2021">2017-2021</option>
															</select>
														<?php } else { ?>
															<select name="academicyear" class="form form">
																<option selected value="none">Select</option>
																<option value="2014-2018">2014-2018</option>
																<option value="2015-2019">2015-2019</option>
																<option value="2016-2020">2016-2020</option>
																<option value="2017-2021">2017-2021</option>
															</select>
														<?php	} ?>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Class Roll No.:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="rollno" value="<?php echo $rno ?>" placeholder="Roll No." style="width:10%;" />
													</div>
												</div>


											</td>
										</tr>


										<tr>

											<td>
												PERSONAL DETAILS
												<div class="form-group">
													<label class="control-label col-md-3">Date of Birth:</label>
													<div class="col-md-9">
														<input type="date" class="form form" id="dob" name="dob" value="<?php echo $db ?>" placeholder="Enter Date of Birth" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-9">

														<?php if ($gen == "Male") { ?>

															<input type="radio" value="Male" name="gender" checked="checked" />Male <input type="radio" value="Female" name="gender" />Female
														<?php } elseif ($gen == "Female") { ?>

															<input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" checked="checked" />Female
														<?php } else { ?>
															<input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" />Female
														<?php	} ?>

													</div>
												</div>

												<!-- <div class="form-group" >
									<label class="control-label col-md-3" >Photo:</label>
									<div class="col-md-9">
									<img src="<?php echo "img/" . $pht; ?>" height="50px"  />
									  <input type="file" id="photo" name="photo" style="float:center;"  />
									</div>
								  </div> -->

												<div class="form-group">
													<label class="control-label col-md-3">Phone Number:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="phone" value="<?php echo $ph ?>" placeholder="Enter Phone No." />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Email-Id:</label>
													<div class="col-md-9">
														<input type="email" class="form-control" name="email" value="<?php echo $eml ?>" placeholder="Enter Email ID" />
													</div>
												</div>

												<!-- <div class="form-group" >
									<label class="control-label col-md-3" >Aadhar Card No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="aadhar" value="<?php echo $adhr ?>"placeholder="Enter your Aadhar Card No." />
									</div>
								  </div> -->

												<div class="form-group">
													<label class="control-label col-md-3">Religion :</label>
													<div class="col-md-9">




														<?php if ($rel == "Hinduism") { ?>
															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option selected value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Islam") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option selected value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Christianity") { ?>
															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option selected value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Sikhism") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option selected value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Buddhism") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option selected value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Jainism") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option selected value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Zoroastrianism") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option selected value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php } elseif ($rel == "Others") { ?>

															<select name="religion" class="form form">
																<option value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option selected value="Others">Others</option>

															</select>
														<?php } else { ?>
															<select name="religion" class="form form">
																<option selected value="none">Select</option>
																<option value="Hinduism">Hinduism</option>
																<option value="Islam">Islam</option>
																<option value="Christianity">Christianity</option>
																<option value="Sikhism">Sikhism</option>
																<option value="Buddhism">Buddhism</option>
																<option value="Jainism">Jainism</option>
																<option value="Zoroastrianism">Zoroastrianism</option>
																<option value="Others">Others</option>

															</select>
														<?php	} ?>



													</div>
												</div>

												<!-- <div class="form-group" >
									<label class="control-label col-md-3" >Reserve Category:</label>
									<div class="col-md-9">

									<?php if ($rescat == "Yes") { ?>

                        <input type="radio" value="Yes" checked="checked" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No
						<?php } elseif ($rescat == "No") { ?>

						<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" checked="checked" name="reservecategory" />No
						<?php } else { ?>
						<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No
						<?php	} ?>



									</div>
								  </div> -->

												<div class="form-group">
													<label class="control-label col-md-3">Category:</label>
													<div class="col-md-9">




														<?php if ($cat == "General") { ?>

															<select name="category" class="form form">
																<option value="none">Select</option>
																<option selected value="General">General</option>
																<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php } elseif ($cat == "OBC(Creamy layer)") { ?>

															<select name="category" class="form form">
																<option value="none">Select</option>
																<option value="General">General</option>
																<option selected value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php } elseif ($cat == "OBC(Non-Creamy Layer)") { ?>


															<select name="category" class="form form">
																<option value="none">Select</option>
																<option value="General">General</option>
																<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option selected value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php } elseif ($cat == "Scheduled Caste(SC)") { ?>


															<select name="category" class="form form">
																<option value="none">Select</option>
																<option value="General">General</option>
																<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option selected value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php } elseif ($cat == "Scheduled Tribe(ST)") { ?>


															<select name="category" class="form form">
																<option value="none">Select</option>
																<option value="General">General</option>
																<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option selected value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php } else { ?>
															<select name="category" class="form form">
																<option selected value="none">Select</option>
																<option value="General">General</option>
																<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
																<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
																<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
																<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

															</select>
														<?php	} ?>


													</div>
												</div>




											</td>
										</tr>


										<tr>

											<td>
												PARENTS DETAILS
												<div class="form-group">
													<label class="control-label col-md-3">Mother's name:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="name" name="mothername" value="<?php echo $motnm ?>" placeholder="Enter your Mother's Name" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Mother's Phone No.:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="motherphone" value="<?php echo $motph ?>" placeholder="Enter Mother's Phone No." />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Father's Name:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="name" name="fathername" value="<?php echo $fatnm ?>" placeholder="Enter your Father's Name" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Father's Phone No.:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="fatherphone" value="<?php echo $fatph ?>" placeholder="Enter father's Phone No." />
													</div>
												</div>


											</td>
										</tr>


										<tr>

											<td>

												<table border="1">

													<thead>ACADEMIC DETAILS</thead>
													<tr>
														<th>SEMESTER</th>
														<th>1ST SEM</th>
														<th>2ND SEM</th>
														<th>3RD SEM</th>
														<th>4TH SEM</th>
														<th>5TH SEM</th>
														<th>6TH SEM</th>
														<th>7TH SEM</th>
														<th>8TH SEM</th>
														<th>SGPA</th>
													</tr>
													<tr>
														<th>GRADE POINT</th>
														<td><input type="text" class="form-control" id="sem1" name="sem1" placeholder="1st Sem" value="<?php echo $sem1 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem2" name="sem2" placeholder="2nd Sem" value="<?php echo $sem2 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem3" name="sem3" placeholder="3rd Sem" value="<?php echo $sem3 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem4" name="sem4" placeholder="4th Sem" value="<?php echo $sem4 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem5" name="sem5" placeholder="5th Sem" value="<?php echo $sem5 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem6" name="sem6" placeholder="6th Sem" value="<?php echo $sem6 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem7" name="sem7" placeholder="7th Sem" value="<?php echo $sem7 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="sem8" name="sem8" placeholder="8th Sem" value="<?php echo $sem8 ?>" style="width:100%;" /></td>
														<td><input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="8th Sem" value="<?php echo $cgpa ?>" style="width:100%;" /></td>


													</tr>

												</table>


											</td>
										</tr>

										<tr>

											<td>
												RESIDENTIAL ADDRESS<br />
												<b>Permanent Address:</b>
												<div class="form-group">
													<label class="control-label col-md-3">Address Line:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="resadd" value="<?php echo $rsadd ?>" placeholder="Enter Permanent Address" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">District:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="resdist" value="<?php echo $rsdst ?>" placeholder="Enter District" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">State:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="resstate" value="<?php echo $rsstt ?>" placeholder="Enter State" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Pin Code:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="respin" value="<?php echo $rspin ?>" placeholder="Enter Pin Code" />
													</div>
												</div>

												<b>Local Address:</b>
												<div class="form-group">
													<label class="control-label col-md-3">Address Line:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="localadd" value="<?php echo $lcladd ?>" placeholder="Enter Local Address" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">District:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="localdist" value="<?php echo $lcldst ?>" placeholder="Enter District" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">State:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="localstate" value="<?php echo $lclstt ?>" placeholder="Enter State" />
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3">Pin Code:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="phone" name="localpin" value="<?php echo $lclpin ?>" placeholder="Enter Pin Code" />
													</div>
												</div>


												<div class="form-group">
													<label class="control-label col-md-3">Local Home Type:</label>
													<div class="col-md-9">
														<select name="hometype" class="form form">
															<option selected value="none"><?php echo $hmtyp; ?></option>
															<option value="Home">Home</option>
															<option value="Hostel">Hostel</option>
															<option value="P.G./Flat">P.G./Flat</option>
														</select>
													</div>
												</div>

											</td>
										</tr>


										<tr>

											<td>

												<table border="1" style="margin-left:405px;">

													<thead>EXTRA-CURRICULAR ACTIVITIES</thead>
													<tr>
														<th>S.NO.</th>
														<th>ACTIVITIES</th>
													</tr>
													<tr>
														<th>1</th>
														<td><input type="text" class="form-control" name="extracurr1" placeholder="1st Activity" value="<?php echo $extracurr1 ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>2</th>
														<td><input type="text" class="form-control" name="extracurr2" placeholder="2nd Activity" value="<?php echo $extracurr2 ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>3</th>
														<td><input type="text" class="form-control" name="extracurr3" placeholder="3rd Activity" value="<?php echo $extracurr3 ?>" style="width:100%;" /></td>
													</tr>



												</table>


											</td>
										</tr>

										<tr>

											<td>

												<table border="1" class="text-center" style="margin-left:403px;">

													<thead>ATTENDANCE DETAILS</thead>
													<tr>
														<th>SUBJECTS</th>
														<th>PERCENTAGE %</th>
													</tr>
													<tr>
														<th>subject1</th>
														<td><input type="text" class="form-control" id="SUBJECT1" name="SUB1" value="<?php echo $subject1; ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject2</th>
														<td><input type="text" class="form-control" id="SUBJECT2" name="SUB2" value="<?php echo $subject2; ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject3</th>
														<td><input type="text" class="form-control" id="SUBJECT3" name="SUB3" value="<?php echo $subject3; ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject4</th>
														<td><input type="text" class="form-control" id="SUBJECT4" name="SUB4" value="<?php echo $subject4; ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject5</th>
														<td><input type="text" class="form-control" id="SUBJECT5" name="SUB5" value="<?php echo $subject5; ?>" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject6</th>
														<td><input type="text" class="form-control" id="SUBJECT6" name="SUB6" value="<?php echo $subject6; ?>" style="width:100%;" /></td>
													</tr>



												</table>


											</td>
										</tr>
										<tr>
											<td>
												<table border="1" class="text-center" style="margin-left:403px;">
													<div class="form-group">
														<label for="comment">Issues:</label>
														<textarea class="form-control" rows="5" value="<?php echo $issues; ?>" name="issues" id="comment"><?php echo $issues; ?></textarea>
													</div>

												</table>
											</td>
										</tr>

									</tbody>

								</table>
								<center><button type="submit" class="btn btn-success" name="btn" style=" opacity:1">UPDATE</button></center>

							</div>
						</div>
					</div>




				</div>
			</div>

		</form>









	</div>

</body>

<script>

</script>




</html>