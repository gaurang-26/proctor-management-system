<?php
ob_start();


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


$tid=$_REQUEST['tid'];
$sel="select * from teacher where tid=$tid";

$res=mysqli_query($con,$sel);


while($rr=mysqli_fetch_array($res))
{

$idno=$rr['idno'];
$ttl=$rr['title'];
$nm=$rr['name'];
$unm=$rr['username'];


}




if (isset($_POST['btn']))
{
$idno=$_POST['idno'];
$ttl=$_POST['title'];
$nm=$_POST['name'];
$unm=$_POST['username'];




$updt="update teacher set idno='$idno',title='$ttl',name='$nm',username='$unm' where   tid='$tid'";
if(mysqli_query($con,$updt))
{
     header("location:adminteacher.php");

}
else
{
echo mysqli_error();
}
}


if(isset($_POST['logout']))
{
unset($_SESSION['username']);
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
.table { width: 100%; }



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
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>


<body style="padding:10px 100px 10px 350px;">


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

<div class="main" style="padding:150px;">











<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" >





<div class="container-fluid" >
	<div class="row" >




				<div class="panel panel-default" style="opacity:0.9">
					<div class="panel-heading" style="color:
white;
background-color:
#374785;">
					<center><h1 >EDIT TEACHER PROFILE</h1></center>
					</div>






					<div class="panel-body container">
						          <div class="col-sm-12">
                  <table class="table table-user-information">
                    <tbody>


                      <tr>

                        <td>


						<div class="form-group" >
						<div class="row">
									<label class="control-label col-md-4">Id No:</label>
									<div class="col-md-8">
									  <input type="text" class="form-control" name="idno" value="<?php echo $idno?>" placeholder="Enter ID No">
									</div>
								  </div>
								</div>

								<div class="form-group" >
									<label class="control-label col-md-4" >Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<div class="col-md-8">



									<?php if($ttl=="Dr.")
						{?>

                        <select name="title" class="form form">
							<option  value="none" >Select</option>
							<option selected value="Dr." >Dr.</option>
							<option  value="Mr." >Mr.</option>
							<option  value="Mrs." >Mrs.</option>
							<option value="Ms.">Ms.</option>
							</select>
						<?php }elseif($ttl=="Mr."){?>

						 <select name="title" class="form form">
							<option  value="none" >Select</option>
							<option  value="Dr." >Dr.</option>
							<option selected value="Mr." >Mr.</option>
							<option  value="Mrs." >Mrs.</option>
							<option value="Ms.">Ms.</option>
							</select>
						<?php }elseif($ttl=="Mrs."){?>

						 <select name="title" class="form form">
							<option  value="none" >Select</option>
							<option  value="Dr." >Dr.</option>
							<option  value="Mr." >Mr.</option>
							<option selected value="Mrs." >Mrs.</option>
							<option value="Ms.">Ms.</option>
							</select>
						<?php }elseif($ttl=="Ms."){?>

						 <select name="title" class="form form">
							<option  value="none" >Select</option>
							<option  value="Dr." >Dr.</option>
							<option  value="Mr." >Mr.</option>
							<option  value="Mrs." >Mrs.</option>
							<option selected value="Ms.">Ms.</option>
							</select>
						<?php }else{?>
						 <select name="title" class="form form">
							<option selected value="none" >Select</option>
							<option  value="Dr." >Dr.</option>
							<option  value="Mr." >Mr.</option>
							<option  value="Mrs." >Mrs.</option>
							<option value="Ms.">Ms.</option>
							</select>
						<?php	}?>



									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-4" >Name:&nbsp;</label>
									<div class="col-md-8">
									  <input type="text" class="form-control" name="name" value="<?php echo $nm?>" placeholder="Enter First Name">
									</div>
								  </div>

								  <div class="form-group" >
									<label class="control-label col-md-4" >Userid:</label>
									<div class="col-md-8">
									  <input type="text" class="form-control" name="username" value="<?php echo $unm?>" placeholder="Enter Username">
									</div>
								  </div>



                        </td>
                      </tr>







                    </tbody>

                  </table>
						<center><button type="submit" class="btn btn-success" name="btn" style=" opacity:1">UPDATE</button></center>


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





