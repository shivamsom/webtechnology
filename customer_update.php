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
$a = $_GET['acno'];
$type = $_GET['type'];
			if(empty($a))
				{header("Location:customer_search.php");}
			if($type == 'SB')
		{  $sql = "SELECT * FROM customersb WHERE acno='$a'";
		     $res = $conn->query($sql);

				if($res->num_rows > 0)
				{
					$row = $res->fetch_assoc();
				}
			
        }
        else
        {
        	 $sql = "SELECT * FROM customerca WHERE acno='$a'";
		     $res = $conn->query($sql);

				if($res->num_rows > 0)
				{
					$row = $res->fetch_assoc();
				}

        }

        cust_update($row,$a,$type); 


function cust_update($row,$a,$type)
{		echo  "<form class='form-inline' action='cupdate.php?acno=$a&type=$type' method='post' enctype='multipart/form-data'><div class='container '>";
	echo "<h3><u>Customer Details</u></h3>";

	echo "<img alt='cust_image' width='120px' src='$row[image_path]' height='145px' id='passport'>";
	echo "<b>Upload Image</b><input type='file' accept='image/*'  name='image' onchange='loadFile(event)' >";

	echo "<img alt='cust_sign'  src= '$row[pic_path]' id='sig' width='185px' height='86px'>";
	echo "<b>Upload Sign</b><input type='file'  accept='image/*' name='signature' onchange='upload_sign(event)'>";


	echo "<b>LAST NAME : &nbsp;&nbsp;&nbsp;&nbsp;</b><input type='text' name='lastname' value='$row[L_name]' class='form-control' ><br>";

	echo "<b>FIRST NAME : &nbsp;&nbsp;&nbsp;</b><input type='text' name='firstname' value='$row[F_name]' class='form-control'><br>";

	echo "<b>MIDDLE NAME : </b><input type='text' name='middlename' value='$row[M_name]' class='form-control'><br>";
					if($type == 'CA')
	{echo "<b>M/S. : </b><input type='text' name='ms' value='$row[ms]' class='form-control'><br>";}
    
	

	echo "<b>Date of Birth : &nbsp;&nbsp;&nbsp;</b><input type='text' name='day' value='$row[day]' class='form-control' size='1'>-<input type='text' value='$row[month]' name='month' class='form-control' size='8'>-<input type='number' value='$row[year]' name='year' class='form-control' size='3' min='1930' max='2000'><br>";


	echo "<h3><u>Contact Details</u>:</h3>";

	echo "<b>ADDRESS LINE 1 : </b><input type='text' size='30' name='addr1' value='$row[Addr1]' class='form-control' ><br>";

	echo "<b>ADDRESS LINE 2 : </b><input type='text' size='30' name='addr2' value='$row[Addr2]' class='form-control' ><br>";

	echo "<b>ADDRESS LINE 3 : </b><input type='text' size='30' name='addr3' value='$row[Addr3]' class='form-control' ><br>";

	echo "<b>PIN CODE : </b><input type='text' size='10' name='pin' value='$row[pin]' class='form-control' >";

	echo "<b>&nbsp;DISTRICT : </b><input type='text' size='10' name='dist' value='$row[Dist]' class='form-control' ><br>";

echo "<b>STATE : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type='text' size='' name='state' value='$row[state]' class='form-control' ><br>";

echo "<b>MOBILE : </b>&nbsp;&nbsp;&nbsp;<input type='number' size='3' name='mob' class='form-control'   value='$row[Mobile]'><br>";
echo "<b>Phone No.:</b>&nbsp;<input type='text' size='1' name='std' value='$row[std]' class='form-control'><b>-</b><input type='text' size='8' name='telephone' value='$row[telephone]' class='form-control'><br>";

echo "<b>EMAIL : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='email' value='$row[Email]' class='form-control' ><br>";

echo "<b>PAN NO. : </b>&nbsp;&nbsp;&nbsp;<input type='text' size='' name= 'pan' value='$row[Pan]' class='form-control' ><br>";

	
			echo "<center><button type='submit' name='confirm' class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span> Confirm</button></center>";

echo "</form>";

}
?>

