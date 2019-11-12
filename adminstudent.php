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
$sel1="select * from admin where username='$username'";

$res1=mysqli_query($con,$sel1);


}
else
{
	header("location:index.php");
}

if (isset($_POST['btn1']))
{
$usn = $_POST['usn'];

$sel="select * from student where usn='$usn'";

		$res=mysqli_query($con,$sel);

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
<title>Student</title>
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
	/* background-color:#a8d0e6; */
}

.table { width: 100%; }

.navbar {
	background-color: #24305e !important;
	border-radius:0px !important;
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

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 24px; /* Increased text to enable scrolling */
    padding: 0px 10px;
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
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>


<body style="">

<?php

while($rr1=mysqli_fetch_array($res1))
{
?>

<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-between"">
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

  <!-- <a href="teacherdashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a> -->
 <a href="admindashboard.php" style="font-family: Verdana,sans-serif;">SEARCH STUDENT</a>
			<a href="adminteacher.php" style="font-family: Verdana,sans-serif;">TEACHERS</a>
			<a href="admininsertstudent.php" style="font-family: Verdana,sans-serif;">ADD STUDENT</a>
			<a href="insertteacher.php" style="font-family: Verdana,sans-serif;">ADD TEACHER</a>

</div>



<div class="main" style="padding:50px; padding-top: 80px;">






				<div class="container-fluid" style="  height:100px; width:100%">
			<center><h1 style="font-family: 'Aclonica';font-weight:26000; font-size:32px; color:#800000; padding-top:5px;">STUDENT DETAILS</h1></center>
			</div>







				<?php
while($rr=mysqli_fetch_array($res))
				{
				?>



				<div class="panel panel-default" style=" ">
					<div class="panel-heading" style="background-color:#2d98da;">
						<div class="row">


						<div class="col-sm-9">
						<h1 style=" font-family: 'Roboto Slab', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:40px; ;color:#FFFFFF;text-transform:uppercase;"><?php echo $rr['title']." ".$rr['firstname']." ".$rr['middlename']." ".$rr['lastname']; ?></h1>
				</div>
				<div class="col-sm-3">
						<a href="editprofile.php?sid=<?php echo $rr['sid']; ?>"><button type="submit" class="btn btn-warning" style="float:right; font-size:24px; border:solid #FFFFFF;">Edit Profile</button></a><br/><br/><br/>
						</div>
					 	</div>
					</div>
					<div class="panel-body" style="background-color:#fff;">
							<table class="table table-user-information" >
							<tbody style=" font-family: 'Roboto Slab', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:24px; color:#000000;">

								<tr>
									<th>USN:</th>
									<td><?php echo $rr['usn']; ?></td>
								</tr>


									<tr>
									<th>Proctor ID:</th>
									<td><?php echo $rr['proctorid']; ?></td>
								</tr>
								<tr>
									<th>ENROLL ID:</th>
									<td><?php echo $rr['enrollid']; ?></td>
								</tr>
								<tr >
									<th>NAME:</th>
									<td style="padding-right:20%;"><?php echo strtoupper ($rr['title']." ".$rr['firstname']." ".$rr['middlename']." ".$rr['lastname']); ?></td>
								</tr>
								<tr>
									<th>DOB:</th>
									<td><?php echo date('d-m-Y', strtotime( $rr['dob'] ));?></td>
								</tr>
								<tr>
									<th>GENDER:</th>
									 <td style="padding-right:20%;"><?php echo strtoupper ($rr['gender']); ?></td>
								</tr>
<tr>
									<th>STUDENT PHONE NUMBER:</th>
									<td style="padding-right:20%;"><?php echo $rr['phone']; ?></td>
								</tr>
								<tr>
									<th>EMAIL-ID:</th>
									<td style="padding-right:20%;"><?php echo $rr['email']; ?></td>
								</tr>
								<!-- <tr>
									<th>AADHAR NO.:</th>
									<td style="padding-right:20%;"><?php $rr['aadhar']; ?></td>
								</tr> -->
								<tr>
									<th>MOTHER'S NAME:</th>
									<td style="padding-right:20%;"><?php echo strtoupper ($rr['mothername']); ?>&nbsp&nbsp&nbsp(<span class="glyphicon glyphicon-earphone" > <?php echo $rr['motherphone']; ?>)</td>
								</tr>

								<tr>
									<th>FATHER'S NAME:</th>
									<td style="padding-right:20%;"><?php echo strtoupper ($rr['fathername']); ?>&nbsp&nbsp&nbsp(<span class="glyphicon glyphicon-earphone" > <?php echo $rr['fatherphone']; ?>)</td>
								</tr>
								<tr>
									<th>RELIGION:</th>
									<td><?php echo $rr['religion']; ?></a></td>
								</tr>
								<tr>
									<th>CURRENT SEM:</th>
									<td><?php echo $rr['currentsem']." "; ?>(<?php echo $rr['currentyear']; ?>)</a></td>
								</tr>
								<tr>
									<th>CLASS:</th>
									<td><?php echo $rr['section']; ?></a></td>
								</tr>
								<tr>
									<th>CLASS ROLL NO.:</th>
									<td><?php echo $rr['rollno']; ?></a></td>
								</tr>
								<tr>
									<th>GRADE POINTS:</th>
									<td >




<table  class="responsive" border="1" cellpadding="20" cellspacing="0"  align="center" width="100%">


<tr>
	<th>SEMESTERS</th>
	<th>SEM-I</th>
	<th>SEM-II</th>
	<th>SEM-III</th>
	<th>SEM-IV</th>
	<th>SEM-V</th>
	<th>SEM-VI</th>
	<th>SEM-VII</th>
	<th>SEM-VIII</th>
	<th>CGPA</th>
</tr>

<tr>
	<th>SGPA</th>

	<td><?php echo $rr['sem1']; ?></td>
	<td><?php echo $rr['sem2']; ?></td>
	<td><?php echo $rr['sem3']; ?></td>
	<td><?php echo $rr['sem4']; ?></td>
	<td><?php echo $rr['sem5']; ?></td>
	<td><?php echo $rr['sem6']; ?></td>
	<td><?php echo $rr['sem7']; ?></td>
	<td><?php echo $rr['sem8']; ?></td>
	<td><?php echo $rr['cgpa']; ?></td>

</tr>

</table>





									</td>
								</tr>

								<tr>
									<th>PERMANENT ADDRESS:</th>
									<td style="padding-right:20%;"><?php echo strtoupper ($rr['resadd'].", ".$rr['resdist'].", ".$rr['resstate'].", PINCODE:".$rr['respin']); ?></a></td>
								</tr>
								<tr>
									<th>LOCAL ADDRESS:</th>
									<td style="padding-right:20%;"><?php echo strtoupper ($rr['localadd'].", ".$rr['localdist'].", ".$rr['localstate'].", PINCODE:".$rr['localpin']); ?></a></td>
								</tr>

								<tr>
									<th>HomeType:</th>
									<td><?php echo $rr['hometype']; ?></a></td>
								</tr>
								<tr>
									<th>SHIFT:</th>
									<td><?php echo $rr['shift']; ?></a></td>
								</tr>
								<tr>
									<th>ADMISSION TYPE:</th>
									<td><?php echo $rr['admissiontype']; ?></a></td>
								</tr>
								<!-- <tr>
									<th>LEFT COURSE:</th>
									<td><//?php echo $rr['leftcourse']; ?></a></td>
								</tr>
								<tr> -->
									<th>ADMISSION DATE:</th>
									<td><?php echo date('d-m-Y', strtotime( $rr['admissiondate'] ));?></a></td>
								</tr>
								<tr>
									<th>ACADEMIC YEAR:</th>
									<td><?php echo $rr['academicyear']; ?></a></td>
								</tr>

								<tr>
									<th>CATEGORY:</th>
									<td><?php echo $rr['category']; ?></a></td>
								</tr>

								<tr>
									<th>EXTRA CURRICULAR ACTIVITIES:</th>
									<td >




										<table border="1" class="text-center" style="margin-left:40px;">


									<tr>
										<th>S.NO.</th>
										<th>ACTIVITIES</th>
									</tr>
									<tr>
										<td>1.</td>
										<td><?php echo $rr['extracurr1']; ?></td>
									</tr>
									<tr>
										<td>2.</td>
										<td><?php echo $rr['extracurr2']; ?></td>
									</tr>
									<tr>
										<td>3.</td>
										<td><?php echo $rr['extracurr3']; ?></td>
									</tr>




									</table>





									</td>
								</tr>
								<tr>
									<th>ATTENDANCE DETAILS:</th>
									<td >




											<table border="1" class="text-center" style="margin-left:40px;">


									<tr>
										<th>SUBJECTS</th>
										<th>PERCENTAGE %</th>
									</tr>
									<tr>
										<td>Subject1</td>
										<td><?php echo $rr['subject1']; ?></td>
									</tr>
									<tr>
										<td>Subject2</td>
										<td><?php echo $rr['subject2']; ?></td>
									</tr>
									<tr>
										<td>Subject3</td>
										<td><?php echo $rr['subject3']; ?></td>
									</tr>
									<tr>
										<td>Subject4</td>
										<td><?php echo $rr['subject4']; ?></td>
									</tr>
									<tr>
										<td>Subject5</td>
										<td><?php echo $rr['subject5']; ?></td>
									</tr>
                   <tr>
										<td>Subject6</td>
										<td><?php echo $rr['subject6']; ?></td>
									</tr>


									</table>
				</td>
				</tr>
	                 <tr>
											<td>

													<div class="form-group">
														<label for="comment">Issues:</label>
														<textarea class="form-control" rows="5" placeholder="your issues" name="issues" id="comment"><?php echo $rr['issues']?></textarea>
													</div>

											</td>
										</tr>






							</tbody>
						</table>

					</div>
				</div>

				<center><a href="deletestudent.php?sid=<?php echo $rr['sid']; ?>"><button type="submit" class="btn btn-danger" style=" font-size:24px; border:solid #FFFFFF;">Delete Profile</button></a></center>

				<?php } ?>









  </div>

</body>


<script>

</script>




</html>