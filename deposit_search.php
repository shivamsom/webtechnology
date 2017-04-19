<?php
include 'include/session.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/customer.css">
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/clearform.js"></script>
	<title>
		Search Existing Customer Record
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
.panel-heading:hover
{
	background-color: #0c58d3;cursor:pointer;
}
</style>
<a href="./customer_remove.php" style="margin-right:8px"><span class="fa fa-remove"></span>&nbsp;Remove Account</a>
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
<body background="./css/template2.jpg" class=".body">
<center><h1 class="text-info"><b>Deposit Account Search</b></h1></center>	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			
			<form action="dsearch.php" method="post">
				<center><h3>Enter Account Number:</h3>
				<input type="number" name="acno" class="form-control">
				
				
				<br>OR <b>(Use only if A/c No. is not known)</b>
		<div class="panel panel-primary thumbnail" id="emp"> 
					<div class="panel-heading emphead">Advance Search Box</div>
					
					<div class="panel-body empbody"><h3>Search By Name:</h3>
					
				<input type="text" name="fullname" placeholder="(SURNAME) (FIRSTNAME) (MIDDLENAME)" class="form-control cust_name" onkeyup="mobiledisable()">
			
					OR

					<h3>Search By Mobile No.</h3><input type="text" name="mobileno" class="form-control" placeholder="Mobile Number" onkeyup="namesdisable()"> 
					</div>

		</div>
<button type="submit" name="search" class="btn btn-primary"><span class="glyphicon glyphicon-search">&nbsp;</span>Search</button>
				</center>
			</form>		
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>	
<script>
var names = document.getElementsByClassName("cust_name");
		var mob = document.getElementsByName("mobileno");	
	function mobiledisable()
  {
		
	 if(names[0].value == "" && names[1].value == "" && names[2].value == "")	//declare 'id=lname and id=mobileno' in input fields if u do not want to use array
			{
				mob[0].disabled = false; 
			}
			else
			{
				mob[0].disabled = true;
			}
  
  }	
  function namesdisable()
  {
  		if(mob[0].value == "")
  		{
  			for(i=0 ; i<3 ; i++)
  			{
  				names[i].disabled = false;
  			}
  		}
  		else
  		{
  			for(i=0 ; i<3 ; i++)
  			{
  				names[i].disabled = true;
  			}
  		}
  }
  $(document).ready(function(){
  		$(".panel-heading").click(function(){
  			$(".panel-body").slideToggle(500);
  		});
  });
</script>
</body>
</html>
