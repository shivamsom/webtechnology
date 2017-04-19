
<?php

include 'include/session.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Passbook Print</title>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/clearform.js"></script>
<style type="text/css">
	label
	{
		font-size: 20px;
	}
	.btn:hover
	{
		background-color: #2eb82e;
		border:1px solid  #2eb82e;
	}
</style>
</head>
<body background="./css/template.jpg">

<form action="printpass.php" method="post">
	<a href= 'index2.php' style='float:right'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-home'></span>&nbsp;Home</button></a>
	<div class="container">
			
			<div class="row">

				<center><b><h2 class="text-primary">Passbook / Statement Print Menu</h2></b></center>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><h3 >Enter The Account Number</h3></center>
						<input type="text" name="acno" class="form-control" placeholder="Account Number (SB/CA/RD)">
						
						<center><h3 >Enter The Account Type</h3></center>
						<select class="form-control" name="type">
						<option value="SB">Savings Bank</option>
						<option value="CA">Current Bank</option>
						</select>
						<label>From:</label><input type="date" name="from" class="form-control"> <label>To</label><input type="date" name="to" class="form-control"><br>
						<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
					</div>
					<div class="col-md-4"></div>

			</div>

	</div>


</form>


</body>
</html>