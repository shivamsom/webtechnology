<?php
include 'include/session.php';

if(isset($_POST['confirmrd']))
{
$install_amt = $_POST['install_amt'];
$rd_period = $_POST['rd_period'];
$rd_roi = $_POST['rd_roi'];
$maturity_amt= $_POST['maturity_amt'];
	
		$fp = fopen("deposit.txt", "w");
		fwrite($fp, $install_amt."\n".$rd_period."\n".$rd_roi."\n".$maturity_amt);
		echo "Recorded";
		fclose($fp);
}
?>




<html>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./cerulean/bootstrap.min.css">
<link rel="stylesheet" href="./css/depositstyles.css">

<head><title>RECURRING DEPOSIT</title>
</head>
<body background="./css/template2.jpg">
<script src="./js/depositscript.js"></script>

<div class="container-fluid">
<form class="form-inline" action="" method="post">
<h5 class="h">Time Period for R.D Min= 6 months and Max=120 months</h5>
<div class="row">            <!--1ST ROW-->
	<div class="col-md-6 well">
<text class="text-primary txt-style">Monthly Installment Amount (<text class="text-info txt-style" style="font-weight:normal">&#8377</text>) :</text>
&nbsp;<input type="number" min="100" class="form-control" name="install_amt" placeholder="Min.Amount(Rs.100)" id="install_amt" required>
	</div>
	<div class="col-md-6 well">
<text class="text-primary txt-style">For</text>&nbsp;
<input type="year" placeholder="month(s)" size="6" class="form-control" min="6" max="120" id="rd_period" name="rd_period" required>      <!--Recurring Deposit Period IS MIN=6 MONTHS & MAX=10 YEARS -->
<text class="text-danger txt-style">@</text>
<input type="number" min="0" class="form-control" placeholder="INTEREST RATE" id="rd_roi" name="rd_roi" required><text class="text-danger txt-style">% p.a</text>
	</div>
</div>		<!--row 1st end-->
<div class="row">		<!--2nd ROW-->
	<div class="col-md-6 well">
	<text class="text-primary txt-style">Compounding Frequency:</text>
	 <select class="form-control" id="comp_freq" name="comp_freq">
	    <option value="12">Monthly</option>
		<option value="4">Quaterly</option>
		<option value="2">Half-Yearly</option>
		<option value="1">Annually</option>
	</select>
	</div>
	
	<div class="col-md-6 well">
	<h3 class="text-primary txt-style" style="display:inline"><u style="color:red">Maturity Value</u> = </h3>
   <input type="text" class="form-control" name="maturity_amt" id="maturity_amt" placeholder="Click on the field" onclick="rec()" onkeyup="rec()"><text class="text-info txt-style" style="font-weight:normal"> &#8377&nbsp;</text>
   <button type="submit" class="btn btn-info" name="confirmrd">Confirm</button>
	</div>
</div>
<!--DEBUGGING--<p id="demo">DEBUGGING</p>
<p id="demo1">DEBUGGING1</p>
---->
</form>
</div>

</body>
</html>