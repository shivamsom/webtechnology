<?php
include 'include/session.php';

	if(isset($_POST['confirmfix']))
	{	
		$fp = fopen("deposit.txt","w");
		$p = $_POST['princ_amt'];
		$n = $_POST['fyear'];
		$r= $_POST['roi'];

		$mat_amt = $_POST['maturity_amt'];		
		fwrite($fp, $p."\n".$n."\n".$r."\n".$mat_amt);
		echo "Recorded";
		fclose($fp);
	}
	
?>


<html>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./cerulean/bootstrap.min.css">
<link rel="stylesheet" href="./css/depositstyles.css">
<head>
<title>FIXED</title>
</head>
<body background="./css/template2.jpg">
<script src="./js/depositscript.js"></script>
<div class="container-fluid">
<form class="form-inline" action="" method="post">
<h5 class="h">Time period for F.D min=1 Year and max=20 Years</h5>
<div class="row">
<div class="col-md-5 well">
	  &nbsp;<text class="text-primary txt-style">Amount(in Rs.):</text>
	  <input type="number" class="form-control" min="1000"  id="princ_amt" name="princ_amt" placeholder="Min.amount(Rs.1000)" required>
	   </div>

<div class="col-md-7 well" id="period">
 	 <text class="text-primary txt-style">For</text>
	 <input  type="year" id="yr" placeholder="year" name="fyear" size="1" class="form-control" min="1" max="" required>
	 <text class="text-danger txt-style">@</text>

	 <input type="text" id="roi" size="20" class="form-control" min="0" placeholder="Interest Rate" name="roi"  required>
	 
	 <text class="text-danger txt-style" >% p.a</text> </div>
</div><!--end of row-->
<div class="row">
<div class="col-md-5 well" id="freq">
<text class="text-primary txt-style">Compounding Frequency:</text>

	 <select class="form-control" id="comp_freq" name="freq">
	    <option value="12">Monthly</option>
		<option value="4">Quaterly</option>
		<option value="2">Half-Yearly</option>
		<option value="1">Annually</option>
	</select>	
</div>
<div class="col-md-7 well">
	<h3 class="text-primary txt-style" style="display:inline"><u style="color:red">Maturity Value</u> = </h3>
   
 <input type="text" class="form-control" id="maturity_amt" name="maturity_amt" placeholder="Click On the field" onclick="fixed()" onkeyup="fixed()"><text class="text-info txt-style" style="font-weight:normal"> &#8377 &nbsp;</text>
   
   <button type="submit" class="btn btn-danger" name="confirmfix" onclick="">Confirm</button>

</div>
</div>
</form>
</div>

</body>
</html>