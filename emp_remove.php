<?php
	include 'include/session.php';

	if( isset($_POST['delete']) )
	{
		$emp_id = $_POST['emp_id'];
			
			if(!check($emp_id,$conn))
			{	echo "<a href='./emp_remove.php'>Back</a>";
				exit("<h1>RECORD DOESN'T EXIST.</h1>");
			}

		$sql= "DELETE FROM employee WHERE empid = '$emp_id' ";
		$sql2 = "DELETE FROM login2 WHERE uid = '$emp_id' ";
		$res  = $conn->query($sql2) or die("Manually delete emp login");
		$res = $conn->query($sql) or die ("Could not Delete");
		
		header( "refresh:3 ; url=emp_remove.php" );
		
		echo '<h3>Successfully Removed Employee Data from the Database! You\'ll be refreshing in about 3 seconds...</h3>';	
	}

	function check($e,$conn)
	{
		$sql = "SELECT * FROM employee WHERE empid = '$e' ";
		if(($conn->query($sql))->num_rows > 0)
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}
?>	

<!DOCTYPE HTML>
<html>
<head>
<title>Remove Employee!</title>

<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./jquery/jquery-3.1.1.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="./js/clearform.js"></script>
</head>
<body background="./css/template.jpg">
<a href="./index1.php"><button class='btn btn-danger' style="float: right;" ><span class="glyphicon glyphicon-home"></span> HOME</button></a>
<form action="emp_remove.php" method="POST">

	<div class='col-md-4'></div>
<div class="col-md-4 form-group">
<br><br>
<h2 style="color:red ;font-weight: bolder">Remove Employee Record</h2>
<br>
<b style="font-size:25px"> Enter Employee ID: </b><input type="text" name="emp_id" id="emp_id" size="20" class="form-control "placeholder="Enter ID of Employee to be removed"><br>
<button class="btn btn-block btn-danger" name="delete" id="delete" ><span class='glyphicon glyphicon-trash'></span> &nbsp;Remove </button>
</div>
</form>

