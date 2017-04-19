<?php
include 'include/session.php';

 ?>
<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/customer.css">
	<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
</head>

<title>Customer Form</title>
<body background ="./css/template.jpg">
<div>
<a href="./customer_remove.php" target="_blank"><span class="fa fa-remove"></span>&nbsp;Remove Account</a><a href="./customer_search.php" target="_blank"><span class="fa fa-search"></span>&nbsp;Search</a>
<?php

	if(isset($_SESSION['login_user']))
	{
		echo "<a href='./index1.php' target='_blank'><span class='fa fa-home'></span>&nbsp;Home</a>";
	}
	elseif (isset($_SESSION['login_user2'])) 
	{
		echo "<a href='./index2.php' target='_blank'><span class='fa fa-home'></span>&nbsp;Home</a>";
	}
	
?>
</div>
<br><br>
<center><h3 style="font-size:150%;display: inline;"><b>Form No.101 Account Opening Form</b></h3><br>
<p style="display: inline;"><b><u>(For Resident Individuals/Sole Propreitorships Only)</u></b></p></center>

</body>
</html>

