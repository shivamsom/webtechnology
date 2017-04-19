<?php

include 'include/login.php'; // Includes Login Script
if(isset($_SESSION['login_user']))
{
   header("location: index1.php");
}

if(isset($_SESSION['login_user2']))
{
   header("location: index2.php");
}

$bgpic= "./css/template1.jpg";
$manpic= "./css/man.png";
$staffpic= "./css/staff.png";

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Core Banking</title>
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <script src="./jquery/jquery-3.1.1.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>

<style type="text/css">
body{

	background-image: url('<?php echo $bgpic; ?>'); 
	 }

 #som
}
{ 
   margin:55px;
  
  
}

#som2
{ 
   margin:55px;
  <!border:3px solid powderblue>;
  
} 
  

#s
{
 color:blue;
 
 background-color:orange;
} 
.img1
{
border-radius:125px;border:1px solid #ebebe0 ;padding:8px 8px ;background-color:#ebebe0
}
.btn-primary:hover
{border:1px solid #d9230f;

background-color:#d9230f;
}
.btn-success:hover
{
background-color:#469408;
}

.modal-header
{
background-color:#66c2ff;
color:white;
padding-top:10px;
padding-bottom:20px;
text-align:center;
}
.modal-body
{
background-color:;
}
.btn-info:hover
{
background-color:#0059b3;
}


.modal-footer
{
margin-top:10px;

}

</style>

<body>

<h1 style="text-align:center;font-family:verdana;font-size:350%;color:blue;background-color:#e51426;padding-bottom: 4px"><b>Banking Portal</h1>

    <div class="container">
	<div class="row">
		<!-- intentionally kept blank--> 
	</div>
<div class="row" style="margin:15px">

	<div class="col-md-4 "><!-- intentionally kept blank--></div>

	
	<div class="col-md-4">
	<a  class="thumbnail" style="background-color:transparent">
   
	<img src="<?php echo $manpic; ?>" style="width:128px; 	height:150px">

	<center><button type="button" class="btn btn-primary btn-md glyphicon glyphicon-user" data-toggle="modal" data-target="#man">&nbsp;MANAGER LOGIN</button></center>
	</a>
	
	</div>
	<div class="col-md-4 "><!-- intentionally kept blank--></div>

</div >

<div class="row" style="margin:15px">


	<div class="col-md-4"><!-- intentionally kept blank--></div>
	<div class="col-md-4 ">
    <a  class="thumbnail" style="background-color:transparent;">
    <img src="<?php echo $staffpic; ?>" style="width:135px; height:150px">
    <center>
	<button type="button" class="btn btn-success" data-target="#staff" data-toggle="modal"><i class="fa fa-users" style="padding:4px"> &nbsp;&nbsp;OFFICIAL'S LOGIN</i></button>
	</center>
	
	</a>
	</div>
	<div class="col-md-4"><!-- intentionally kept blank--></div>
	
	</div>

</div>
	<!------------------------------------manager modal-------------------------------------->
	
	<div class="modal fade " id="man">
	<div class="modal-dialog">
	<div class="modal-content ">
		<div class="modal-header ">
		<button type="button" class="close" data-dismiss="modal" style="padding-top:10px;font-size:28px;padding-right:10px">&times;</button>
          <h3>&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;Manager Login</h3>
		</div>
		<div class="modal-body">
	<center>
	<img src="<?php echo $manpic ?>" width="110px" height="120px" class="img1">
	</center>
	<div class="form-group">  

<form method="POST" action="" name="login">
<label class="glyphicon glyphicon-user"><b style="font-size:16px"> Username:</b></label><br>
<input type="text" id="man_username" name="man_username" size="20" class="form-control" placeholder="Enter Username"><br>
<label class="glyphicon glyphicon-eye-open"><b style="font-size:16px"> Password:</b></label><br><input type="password" id="man_password"  name="man_password" size="20" class="form-control "placeholder="Enter Password"><br>
    </div>	
		</div>
	
	<div class="modal-footer">
		<button class="btn btn-block btn-info" name="submit"><text style="font-size:22px"><i class="fa fa-lock"></i> &nbsp;Login</text></button>
	</div>
	</form>	
	</div>
	</div>
	</div>
	<!---------------------------------------STAFF MODAL-------------------------------->

<div class="modal fade " id="staff">
	<div class="modal-dialog">
	<div class="modal-content ">
		<div class="modal-header " style="background-color:#5fb95f">
		<button type="button" class="close" data-dismiss="modal" style="padding-top:10px;font-size:28px;padding-right:10px">&times;</button>
          <h3>&nbsp;&nbsp;<span class="fa fa-group"></span>&nbsp;Official Login</h3>
		</div>
		<div class="modal-body">
	<center>
	<img src="<?php echo $staffpic?>" width="110px" height="120px" class="img1">
    </center>
	
	<div class="form-group">  
<form method="POST" action="" name="login1">
<label class="glyphicon glyphicon-user"><b style="font-size:16px"> Username:</b></label>             
 <input type="text" id="staff_username" name="staff_username" size="20" class="form-control "placeholder="Enter Username"> <br>
<label class="glyphicon glyphicon-eye-open"><b style="font-size:16px"> Password:</b></label>   
<input type="password" id="staff_password" name="staff_password" size="20" class="form-control "placeholder="Enter Password">
	</div>	
		</div>
	
	<div class="modal-footer">
		<button class="btn btn-block btn-success" name="submit2"><text style="font-size:22px"><i class="fa fa-lock"></i> &nbsp;Login</text></button>
	</div>	
	</form>
	</div>
	</div>
	</div>

</body>

</html>
