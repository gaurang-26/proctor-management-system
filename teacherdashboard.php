<?php
session_start();
ob_start();
$con= new mysqli('localhost:3307','root','Gaurmitt@1234','dsce_cse');
	if(mysqli_connect_error())
	{
		die("server not connected");
	}

if(isset($_SESSION['tusername']))
{
$username=$_SESSION['tusername'];
$sel1="select * from teacher where username='$username'";

$res1=mysqli_query($con,$sel1);


}
else
{
	header("location:index.php");
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
	$password = $_POST['password'];
	$issues = $_POST['issues'];
	$subject1 = $_POST['SUB1'];
	$subject2 = $_POST['SUB2'];
	$subject3 = $_POST['SUB3'];
	$subject4 = $_POST['SUB4'];
	$subject5 = $_POST['SUB5'];
	$subject6 = $_POST['SUB6'];
	$pid = $_POST['proctorid'];
	$ins = "insert into student(title,firstname,middlename,lastname,usn,enrollid,section,shift,admissiontype,currentsem,currentyear,admissiondate,academicyear,rollno,dob,gender,phone,email,religion,category,mothername,motherphone,fathername,fatherphone,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,resadd,resdist,resstate,respin,localadd,localdist,localstate,localpin,hometype,extracurr1,extracurr2,extracurr3,password,issues,subject1,subject2,subject3,subject4,subject5,subject6,proctorid)values('$ttl','$fnm','$mnm','$lnm','$usn','$enrl','$sec','$sft','$admtyp','$cursem','$curyr','$admdt','$acdyr','$rno','$db','$gen','$ph','$eml','$rel','$cat','$motnm','$motph','$fatnm','$fatph','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$rsadd','$rsdst','$rsstt','$rspin','$lcladd','$lcldst','$lclstt','$lclpin','$hmtyp','$extracurr1','$extracurr2','$extracurr3','$password','$issues','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$pid')";
	if (mysqli_query($con, $ins)) {
		header("location:teacherdashboard.php");
	} else {
		echo mysqli_error();
	}
}
if (isset($_POST['logout'])) {
	unset($_SESSION['tusername']);
	header("location:index.php");
}
ob_end_flush();
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
.navbar {
	background-color: #24305e !important;
	border-radius:0px !important;
}
/* .navbar{
	background-attachment: fixed;
    color:#fff;
    background-color: #333;
	position:fixed;

} */


/* .navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
} */


/* .topnav-right {
  float: right;
} */

.table { width: 100%; }


/*
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
    background-color: #333;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {

    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 17px;
	background-color: #333;
    color: #FFF;
    display: block;
}

.sidenav a:hover {
      background-color: #ddd;
  color: black;
} */

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

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>


<body style="background-color:#a8d0e6;">

<?php

while($rr1=mysqli_fetch_array($res1))
{
?>
<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
<!-- <div class="navbar  navbar-fixed-top"> -->
 <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
						<a>Hello <?php echo $rr1['title']." ".$rr1['name']?></a>
					 </li>

</ul>
</div>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
				<form class="form-inline"  method="POST"  action='teacherstudent.php' style="margin: 0 200px 0 0;">
    <input class="form-control mr-sm-2" type="search" name="usn" placeholder="USN:" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn1">Search</button>
  </form>
				<li class="nav-item">

	          <form method="post">

          <button type="submit" name="logout" id="logout">Logout</button>
	</form>
</li>
</ul>
</div>



</nav>





<div class="main" style="padding:150px;">











<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" >





<div class="container-fluid" >
	<div class="row" >




				<div class="panel panel-default" style="opacity:0.9">
					<div class="panel-heading" style="background-color:#374785;color:white;">
					<center><h1 >STUDENT'S REGISTRATION</h1></center>
					</div>
						<div class="panel-body container-fluid">
						          <div class=" col-sm-12">
                  <table class="table table-user-information">
                    <tbody>


                      <tr>

                        <td>
						STUDENT NAME
								<div class="form-group" >
									<label class="control-label col-md-3" >Title:</label>
									<div class="col-md-9">
									  <select name="title" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Ms." >Ms.</option>
									<option value="Mr.">Mr.</option>
									</select>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >First Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Middle Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Last Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
									</div>
								  </div>
                 <div class="form-group">
													<label class="control-label col-md-3">password:</label>
													<div class="col-md-9">
														<input type="password" class="form-control" name="password" placeholder="enter password ">
													</div>
												</div>

                        </td>
                      </tr>



<tr>

                        <td>


								<div class="form-group">
													<label class="control-label col-md-3">Proctor's ID:</label>
													<div class="col-md-9">
														<input type="text" class="form-control" name="proctorid" value="<?php echo $rr1['idno']?>" readonly="readonly">
													</div>
												</div>



                        </td>
                      </tr>

<?php } ?>


					  <tr>

                        <td>
						ADMISSION DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >USN:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="usn" placeholder="Enter Student's USN"/>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Enroll ID:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="enrollid" placeholder="Enter Student's Enroll ID"/>
									</div>
								  </div>

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Left Course:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="leftcourse" />Yes <input type="radio" value="No" name="leftcourse" />No<br/><br/>
									</div>
								  </div> -->

								  <div class="form-group" >
									<label class="control-label col-md-3" >Section:</label>
									<div class="col-md-9">
									  <select name="section" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1A">1A</option>
			<option value="1B">1B</option>
			<option value="1C">1C</option>
			<option value="1D">1D</option>
			<option value="1E">1E</option>
			<option value="1F">1F</option>
			<option value="1G">1G</option>
			<option value="1H">1H</option>
			<option value="1I">1I</option>
			<option value="1J">1J</option>
			<option value="1K">1K</option>
			<option value="1L">1L</option>
			<option value="2A">2A</option>
			<option value="2B">2B</option>
			<option value="2C">2C</option>
			<option value="2D">2D</option>
			<option value="2E">2E</option>
			<option value="2F">2F</option>
			<option value="2G">2G</option>
			<option value="2H">2H</option>
			<option value="2I">2I</option>
			<option value="2J">2J</option>
			<option value="2K">2K</option>
			<option value="2L">2L</option>
			<option value="3A">3A</option>
			<option value="3B">3B</option>
			<option value="3C">3C</option>
			<option value="3D">3D</option>
			<option value="4A">4A</option>
			<option value="4B">4B</option>
			<option value="4C">4C</option>
			<option value="4D">4D</option>
			<option value="5A">5A</option>
			<option value="5B">5B</option>
			<option value="5C">5C</option>
			<option value="5D">5D</option>
			<option value="6A">6A</option>
			<option value="6B">6B</option>
			<option value="6C">6C</option>
			<option value="6D">6D</option>
			<option value="7A">7A</option>
			<option value="7B">7B</option>
			<option value="7C">7C</option>
			<option value="7D">7D</option>
			<option value="8A">8A</option>
			<option value="8B">8B</option>
			<option value="8C">8C</option>
			<option value="8D">8D</option>
			</select>
									</div>
								  </div>

								 <div class="form-group" >
									<label class="control-label col-md-3" >Shift:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="shift" />Yes <input type="radio" value="No" name="shift" />No
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Type:</label>
									<div class="col-md-9">
									  <select name="admissiontype" class="form">
									  <option selected value="none" >Select</option>
									<option  value="CET" >CET</option>
									<option value="COMED-K">COMED-K</option>
									<option value="Management">Management</option>
									</select>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Semester:</label>
									<div class="col-md-9">
									  <select name="currentsem" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1st Semester">1st Semester</option>
			<option value="2nd Semester">2nd Semester</option>
			<option value="3rd Semester">3rd Semester</option>
			<option value="4th Semester">4th Semester</option>
			<option value="5th Semester">5th Semester</option>
			<option value="6th Semester">6th Semester</option>
			<option value="7th Semester">7th Semester</option>
			<option value="8th Semester">8th Semester</option>

			</select>									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Current Year:</label>
									<div class="col-md-9">
									  <select name="currentyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="1st Year">1st Year</option>
			<option value="2nd Year">2nd Year</option>
			<option value="3rd Year">3rd Year</option>
			<option value="4th Year">4th Year</option>
			</select>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Admission Date:</label>
									<div class="col-md-9">
									  <input type="date" class="form form"  name="admissiondate" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Academic Year:</label>
									<div class="col-md-9">
									  <select name="academicyear" class="form form">
			  <option selected value="none" >Select</option>
			<option value="2016-2020">2016-2020</option>
			<option value="2017-2021">2017-2021</option>
			<option value="2018-2022">2018-2022</option>
			<option value="2019-2023">2019-2023</option>
			</select>									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Class Roll No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="rollno" placeholder="Roll No." style="width:10%;"/>
									</div>
								  </div>


                        </td>
                      </tr>


					  <tr>

                        <td>
						PERSONAL DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Date of Birth:</label>
									<div class="col-md-9">
									  <input type="date" class="form form" id="dob" name="dob" placeholder="Enter Date of Birth"/>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Gender:</label>
									<div class="col-md-9">
									  <input type="radio" value="Male" name="gender" />Male <input type="radio" value="Female" name="gender" />Female
									</div>
								  </div>

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Photo:</label>
									<div class="col-md-9">
									  <input type="file" id="photo" name="photo" style="float:center;"  />
									</div>
								  </div> -->

								  <div class="form-group" >
									<label class="control-label col-md-3" >Phone Number:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control"  name="phone" placeholder="Enter Phone No." />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Email-Id:</label>
									<div class="col-md-9">
									  <input type="email" class="form-control"  name="email" placeholder="Enter Email ID" />
									</div>
								  </div>

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Aadhar Card No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="aadhar" placeholder="Enter your Aadhar Card No." />
									</div>
								  </div> -->

								  <div class="form-group" >
									<label class="control-label col-md-3" >Religion :</label>
									<div class="col-md-9">
									  <select name="religion" class="form form">
						<option selected value="none" >Select</option>
						<option value="Hinduism">Hinduism</option>
						<option value="Islam">Islam</option>
						<option value="Christianity">Christianity</option>
						<option value="Sikhism">Sikhism</option>
						<option value="Buddhism">Buddhism</option>
						<option value="Jainism">Jainism</option>
						<option value="Zoroastrianism">Zoroastrianism</option>
						<option value="Others">Others</option>

						</select>
									</div>
								  </div>

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Reserve Category:</label>
									<div class="col-md-9">
									<input type="radio" value="Yes" name="reservecategory" />Yes <input type="radio" value="No" name="reservecategory" />No
									</div>
								  </div> -->

								  <div class="form-group" >
									<label class="control-label col-md-3" >Category:</label>
									<div class="col-md-9">
									  <select name="category" class="form form">
						<option selected value="none" >Select</option>
						<option value="General">General</option>
						<option value="OBC(Creamy layer)">OBC(Creamy layer)</option>
						<option value="OBC(Non-Creamy Layer)">OBC(Non-Creamy Layer)</option>
						<option value="Scheduled Caste(SC)">Scheduled Caste(SC)</option>
						<option value="Scheduled Tribe(ST)">Scheduled Tribe(ST)</option>

						</select>
									</div>
								  </div>

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Caste:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" name="caste" placeholder="Enter your Caste" style="width:60%;"/>
									</div>
								  </div> -->

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Handicap:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="handicap" />Yes<input type="radio" value="No" name="handicap"/>No
									</div>
								  </div> -->

								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Economic Background:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="ecobg" placeholder="Enter your Economic Background" style="width:60%;"/>
									</div>
								  </div> -->

                        </td>
                      </tr>


			<tr>

                        <td>
						PARENTS DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Mother's name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="name" name="mothername" placeholder="Enter your Mother's Name"/>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Mother's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="motherphone" placeholder="Enter Mother's Phone No." />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Name:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="name" name="fathername" placeholder="Enter your Father's Name"/>
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Father's Phone No.:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="fatherphone" placeholder="Enter father's Phone No." />
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
									<td><input type="text" class="form-control" id="sem1" name="sem1" placeholder="1st Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem2" name="sem2" placeholder="2nd Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem3" name="sem3" placeholder="3rd Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem4" name="sem4" placeholder="4th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem5" name="sem5" placeholder="5th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem6" name="sem6" placeholder="6th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem7" name="sem7" placeholder="7th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="sem8" name="sem8" placeholder="8th Sem" style="width:100%;"/></td>
									<td><input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="8th Sem" style="width:100%;"/></td>


								</tr>

								</table>


                        </td>
                      </tr>

				<tr>

                        <td>
						RESIDENTIAL ADDRESS<br/>
						<b>Permanent Address:</b>
								<div class="form-group" >
									<label class="control-label col-md-3" >Address Line:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resadd" placeholder="Enter Permanent Address" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resdist" placeholder="Enter District" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="resstate" placeholder="Enter State" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="respin" placeholder="Enter Pin Code" />
									</div>
									</div>

						<b>Local Address:</b>
								<div class="form-group" >
									<label class="control-label col-md-3" >Address Line:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localadd" placeholder="Enter Local Address" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >District:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localdist" placeholder="Enter District" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >State:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localstate" placeholder="Enter State" />
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Pin Code:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="phone" name="localpin" placeholder="Enter Pin Code" />
									</div>
									</div>
											<div class="form-group">
													<label class="control-label col-md-3">Local Home Type:</label>
													<div class="col-md-9">
														<select name="hometype" class="form form">
															<option selected value="none">Select</option>
															<option value="Home">Home</option>
															<option value="Hostel">Hostel</option>
															<option value="P.G./Flat">P.G./Flat</option>
														</select>
													</div>
												</div>


								  <!-- <div class="form-group" >
									<label class="control-label col-md-3" >Local Home Type:</label>
									<div class="col-md-9">
									  <select name="hometype" class="form form">
									  <option selected value="none" >Select</option>
									<option  value="Home" >Home</option>
									<option value="Hostel">Hostel</option>
									<option value="P.G./Flat">P.G./Flat</option>
									</select>
									</div>
								  </div> -->

                        </td>
                      </tr>

			<!-- <tr>

                        <td>
						FEES DETAILS
								<div class="form-group" >
									<label class="control-label col-md-3" >Tution Fee Waiver:</label>
									<div class="col-md-9">
									  <input type="radio" value="Yes" name="tfw" />Yes <input type="radio" value="No" name="tfw" />No
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-3" >Fees paid:</label>
									<div class="col-md-9">
									  <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter fees amount paid" style="width:60%;"/>
									</div>
								  </div>



                        </td>
                      </tr> -->

					 <tr>

                        <td>

								<table border="1" class="text-center" style="margin-left:405px;">

								 <thead>EXTRA-CURRICULAR ACTIVITIES</thead>
								<tr>
									<th>S.NO.</th>
									<th>ACTIVITIES</th>
								</tr>
								<tr>
									<th>1</th>
									<td><input type="text" class="form-control" id="sem1" name="extracurr1" placeholder="1st Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>2</th>
									<td><input type="text" class="form-control" id="sem2" name="extracurr2" placeholder="2nd Activity" style="width:100%;"/></td>
								</tr>
								<tr>
									<th>3</th>
									<td><input type="text" class="form-control" id="sem3" name="extracurr3" placeholder="3rd Activity" style="width:100%;"/></td>
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
														<td><input type="text" class="form-control" id="SUBJECT1" name="SUB1" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject2</th>
														<td><input type="text" class="form-control" id="SUBJECT2" name="SUB2" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject3</th>
														<td><input type="text" class="form-control" id="SUBJECT3" name="SUB3" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject4</th>
														<td><input type="text" class="form-control" id="SUBJECT4" name="SUB4" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject5</th>
														<td><input type="text" class="form-control" id="SUBJECT5" name="SUB5" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>
													<tr>
														<th>subject6</th>
														<td><input type="text" class="form-control" id="SUBJECT6" name="SUB6" placeholder="subjectinitials-%" style="width:100%;" /></td>
													</tr>



												</table>


											</td>
										</tr>
										<tr>
											<td>
												<table border="1" class="text-center" style="margin-left:403px;">
													<div class="form-group">
														<label for="comment">Issues:</label>
														<textarea class="form-control" rows="5" placeholder="your issues" name="issues" id="comment"></textarea>
													</div>

												</table>
											</td>
										</tr>


									</tbody>

								</table>
								<center><button type="submit" class="btn btn-success" name="btn" style=" opacity:1">REGISTER</button></center>


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
