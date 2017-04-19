<?php
include 'include/session.php'; 
include 'detailsprint.php';
?>
<?php
		$empid= $_GET['empid'];
			if (empty($empid)) {
				header("location:emp_search.php");
			}

		$sql = "SELECT * FROM employee WHERE empid= '$empid' ";
		$res = $conn->query($sql);

		if($res->num_rows > 0)
		{echo "<header>
<a href='./emp_search.php'><span class='glyphicon glyphicon-circle-arrow-left text-success'></span></a>
</header>";
			empdetails($res,$conn);
		}
		else
		{
			echo "<center><h1>Result Do Not Exist in Database.</h1></center>";
			echo "<center><a href='./emp_search.php' style='background-color:transparent; '>Back</a></center>";
		}
?>
<html>
		<head>
<style type="text/css">
	a{
		font-size: 20px;
		display: inline;
		

	}
	a:hover
	{
			border-radius:12px;
			background-color:red;
	}
</style>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css	">
<link rel="stylesheet" href="./css/displaysb.css">
		</head>
		<body background="./css/template.jpg">
		
		

		</body>
</html>