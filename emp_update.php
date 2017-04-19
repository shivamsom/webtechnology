<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="./jquery/jquery-3.1.1.min.js"></script>
	<script src="./js/preview.js"></script>	
</head>
<body background="./css/template.jpg">

</body>
</html>

<?php
include 'include/session.php';
include 'uploadimage.php';
$a = $_GET['empid'];
			if (empty($a)) {header("location:emp_search.php");
				# code...
			}
		$sql = "SELECT * FROM employee WHERE empid='$a'";
		$res = $conn->query($sql);

				if($res->num_rows > 0)
				{
					$row = $res->fetch_assoc();
				}

			emp_update($row,$a);



function emp_update($row,$a)
{		echo  "<form class='form-inline' action='eupdate.php?e=$a' method='post' enctype='multipart/form-data'><div class='container '>";
	echo "<h3>Employee Info</h3>";

	echo "<img alt='emp_image' width='120px' src='$row[image_path]' height='145px' id='passport'>";
	echo "<b>Upload Image</b><input type='file' accept='image/*'  name='image' onchange='loadFile(event)' >";

	echo "<img alt='emp_sign'  src= '$row[sign_path]' id='sig' width='185px' height='86px'>";
	echo "<b>Upload Sign</b><input type='file'  accept='image/*' name='signature' onchange='upload_sign(event)'>";


	echo "<b>LAST NAME : &nbsp;&nbsp;&nbsp;&nbsp;</b><input type='text' name='lastname' value='$row[lastname]' class='form-control' ><br>";

	echo "<b>FIRST NAME : &nbsp;&nbsp;&nbsp;</b><input type='text' name='firstname' value='$row[firstname]' class='form-control'><br>";

	echo "<b>MIDDLE NAME : </b><input type='text' name='middlename' value='$row[middlename]' class='form-control'><br>";

	echo "<b>DESIGNATION : &nbsp;</b><input type='text' name='jobtitle' value='$row[jobtitle]' class='form-control'><br>";

	echo "<b>Date of Birth : &nbsp;&nbsp;&nbsp;</b><input type='text' name='day' value='$row[day]' class='form-control' size='1'>-<input type='text' value='$row[month]' name='month' class='form-control' size='8'>-<input type='number' value='$row[year]' name='year' class='form-control' size='3' min='1930' max='2000'><br>";

	echo "<b>Joining Date : &nbsp;&nbsp;&nbsp;</b><input type='text' name='startday' value='$row[startday]' class='form-control' size='1'>-<input type='text' name='startmonth' value='$row[startmonth]' class='form-control' size='8'>-<input type='number' value='$row[startyear]' name='startyear' class='form-control' size='3' min='1930' max='2018'><br>";

	echo "<h3>Contact Details:</h3>";

	echo "<b>ADDRESS LINE 1 : </b><input type='text' size='30' name='addr1' value='$row[addr1]' class='form-control' ><br>";

	echo "<b>ADDRESS LINE 2 : </b><input type='text' size='30' name='addr2' value='$row[addr2]' class='form-control' ><br>";

	echo "<b>ADDRESS LINE 3 : </b><input type='text' size='30' name='addr3' value='$row[addr3]' class='form-control' ><br>";

	echo "<b>PIN CODE : </b><input type='text' size='10' name='pin' value='$row[pin]' class='form-control' >";

	echo "<b>&nbsp;DISTRICT : </b><input type='text' size='10' name='dist' value='$row[dist]' class='form-control' ><br>";

echo "<b>STATE : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type='text' size='' name='state' value='$row[state]' class='form-control' ><br>";

echo "<b>MOBILE : </b>&nbsp;&nbsp;&nbsp;<input type='number' size='3' name='mob' class='form-control'   value='$row[mob]'><br>";

echo "<b>EMAIL : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='email' value='$row[email]' class='form-control' ><br>";

echo "<b>PAN NO. : </b>&nbsp;&nbsp;&nbsp;<input type='text' size='' name= 'pan' value='$row[pan]' class='form-control' ><br>";

echo "<b>DRIVING LICENSE : </b><input type='text' name= 'drive' size='' value='$row[drive]' class='form-control' ><br></div><br>";
	
			echo "<center><button type='submit' name='confirm' class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span> Confirm</button></center>";

echo "</form>";

}
?>

