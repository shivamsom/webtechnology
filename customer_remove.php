<?php
include 'include/session.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
	<title>
		Remove Existing Customer Record
	</title>
</head>

<style>
.panel-body
{  
	display:none;
}
.thumbnail
{
	background-color: transparent;
}
.btn-danger:hover
{ transition: 0.4s ease;
background-color: #d30a11;
font-size:16px;
font-weight: bold;
}
a
{float:right;
text-decoration:none;
font-size:16px;color:white;
display: block;
background-color:red;
padding:6px;border-color:1px solid red;
border-radius:5px;box-shadow: 2px 4px 5px #29a329;
}
a:hover
{transition: 0.5s ease;
background-color: #29a329;
color:white;text-decoration:none;
box-shadow: 2px 4px 5px red;
}
a:active
{text-decoration: none;}
</style>

<body background="./css/template.jpg" class=".body">

<a href="./customer_search.php" style="margin-right:8px"><span class="fa fa-search"></span>&nbsp;Search</a>
<a href="./addcust1.php"><span class="fa fa-user-plus"></span>&nbsp;Add Customer</a>
<?php

	if(isset($_SESSION['login_user']))
	{
echo "<a href='./index1.php'><span class='fa fa-home'></span>&nbsp;Home</a><br>";
	}
	elseif (isset($_SESSION['login_user2'])) 
	{
	echo "<a href='./index2.php'><span class='fa fa-home'></span>&nbsp;Home</a><br>";

	}
?>

<center><h1 class="text-danger"><b>Delete Customer Account</b></h1></center>	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			
			<form action="remove.php" method="post">
				<center><h3 class="text-primary"><b>Enter Account Number:</b></h3>
				<input type="number" name="acno" class="form-control" required> 
				<h3 class="text-primary"><b>Select Account Type:</b></h3>
				<select name="type" class="form-control">
					<option value="SB">Savings Account</option>
					<option value="CA">Current Account</option>
				</select>
				<br>
		

<button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash">&nbsp;</span>Delete</button>
				</center>
			</form>		
		</div>
		
		<div class="col-lg-4"></div>
	</div>
</div>	
</body>
</html>
