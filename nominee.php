<?php
	
	include 'include/session.php';	
	
		if (isset($_POST['submit'])) 
		{
			switch($_POST['type'])
			{
				case 'SB': 		$sql = "SELECT * FROM customersb where acno= '$_POST[acno]'";
									$res= $conn->query($sql);
									ins_details($res,$conn);
								break;

				case 'CA':		$sql = "SELECT * FROM customerca where acno= '$_POST[acno]'";
									$res= $conn->query($sql);
										ins_details($res,$conn);
								break;

				case 'FD':		$sql = "SELECT * FROM fd where acno= '$_POST[acno]'";
									$res= $conn->query($sql);
										ins_details($res,$conn);
								break;

				case 'RD':		$sql = "SELECT * FROM rd where acno= '$_POST[acno]'";
									$res= $conn->query($sql);
										ins_details($res,$conn);
								break;				
			}		
		}

		function ins_details($res,$conn)
		{
			if($res -> num_rows > 0)
			{	
		$sql2 = "INSERT INTO nominee values('$_POST[acno]', '$_POST[type]' ,'$_POST[fullname]' , '$_POST[age]' , '$_POST[relationship]')";
					if($conn->query($sql2) == TRUE)
					{
						echo "<center><h1>Entered Successfully</h1></center>";
					}


			}
		}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="./united/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/clearform.js"></script>
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<title>NOMINEE</title>
<style type="text/css">
	label
	{	font-size: 16px;
		font-family: Times New Roman;
	}
</style>
</head>
<body background="./css/template.jpg">
<header>
<?php
	if (isset($_SESSION['login_user'])) 
	{		
	echo "<a href='index1.php'><button type='button' class='btn btn-info'><span class='glyphicon glyphicon-home'></span> Home</button></a>";
	}
	if(isset($_SESSION['login_user2']))
	{
		echo "<a href='index2.php'><button type='button' class='btn btn-info'><span class='glyphicon glyphicon-home'></span> Home</button></a>";	
	}
?>
</header>

<center><h2 class="text-info">Form DA-1 Nominee Form</h2></center>

<div class="container">
	<form class="form-inline" action="" method="post">
			<label>Enter Existing A/C No.</label><input type="text" name="acno" size="20" class="form-control" required><br><br>
			<label>Enter Account Type.&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="type" class="form-control">
				<option value="SB">Savings Bank</option>
				<option value="CA">Current Bank</option>
				<option value="FD">Fixed Deposit</option>
				<option value="RD">Recurring Deposit</option>
			</select><br><br>
			<label>Name of the Nominee&nbsp;&nbsp;</label><input type="text" name="fullname" size="40" class="form-control" placeholder="LAST NAME         FIRST NAME       MIDDLE NAME" required><br><br>
			<label>Age.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="age" size="20" class="form-control" required><br><br>
			<label>Relationship.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="relationship" class="form-control"> 
				<option value="Son">Son</option>
				<option value="Daug">Daughter</option>
				<option value="Oth">Other</option>
			
			</select>
<center><button type="submit" class="btn btn-danger" name="submit">Submit</button></center>
	</form>

</div>
</body>
</html>