<?php
include 'include/session.php';
if(isset($_POST['confirmsd']))
{$princ_amt = $_POST['princ_amt'];
	$days =$_POST['days'];
	$roi = $_POST['roi'];
	$maturity_amt = $_POST['maturity_amt'];

	$fp =fopen("deposit.txt", "w");
	fwrite($fp, $princ_amt."\n".$days."\n".$roi."\n".$maturity_amt);
	echo "Recorded";
		fclose($fp);
}


?>



<html>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./cerulean/bootstrap.min.css">
<link rel="stylesheet" href="./css/depositstyles.css">
<head>
<title>SHORT-TERM DEPOSIT</title>
</head>
<body background="./css/template2.jpg">
<script src="./js/depositscript.js"></script>
<div class="container-fluid">
<h5 class="h">Time Period for S.D min=7 days and max=365 days</h5>
<form class="form-inline" action="" method="post">
<div class="row">
	<div class="col-md-5 well">
<text class="text-info txt-style">Principal Amount(Rs):</text>	
<input type="number" id="princ_amt" class="form-control" name="princ_amt" placeholder="Min.Amount(Rs.100)" min="100" required>
	</div>
	<div class="col-md-3 well">
<text class="text-info txt-style">For Number of Days:&nbsp;</text><input type="year" id="days" name="days" class="form-control" placeholder="Day(s)" min="7" max="365" size="3" required>
	</div>
	<div class="col-md-4 well">
<text class="text-info txt-style">Interest Rate:</text>	
<input type="number" id="interest" class="form-control" placeholder="Rate of Interest" min="0" name="roi" required><text class="text-danger txt-style">(in. %)</text>
	</div>
</div>
<div class="row"><!--2nd row-->
	<div class="col-md-5 well">
<text class="text-info txt-style"><u style="color:red">Maturity Value</u> =&nbsp;</text>	
<input type="text" id="maturity_amt" class="form-control" name="maturity_amt" placeholder="Click on the field" onkeyup="short()" onclick="short()" required> <text class="text-info txt-style" style="font-weight:normal">&nbsp;&#8377</text>	
	</div>
	<div class="col-md-7 well">
	<text class="text-info txt-style"><u class="text-danger">Total Interest Earned</u> =</text>
	<input type="text" id="interest_earn" name="interest_earn" class="form-control" placeholder="Press Calculate"><text class="text-info txt-style" style="font-weight:normal"> &#8377</text>&nbsp;&nbsp;&nbsp;
	<button class="btn btn-warning" type="submit" name="confirmsd">Confirm</button>
	</div>
	
	</div><!--2nd row end-->
	<!--debugging----------<p id="d">debugg</p><p id="d2"></p>-------------->	
</form>
</div>

</body>
</html>	
	

