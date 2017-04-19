<?php
	include 'include/session.php';
?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Bank Management Systems Pvt Ltd</title>
<link rel="stylesheet" href="./united/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./jquery/jquery-3.1.1.min.js">
</script>
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js">
</script>

<script src="./js/indexjquery.js"></script>
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./fontsgoogle/fonts.google.apis.css">
<style>
	.fa-angle-double-left
	{
		color:white;
	}
</style>
</head>
	<body>
<div class="container">
     <header style=" background-image: url('<?php echo "./css/template6..jpg"; ?>'); ">
		<h1>Bank Name</h1>
	</header>
	<nav class="navbar navbar-default">
		<div class="navbar-header navbar-brand">Welcome <i><b>Official</b> ,</i></div>
	<div class="navbar-header navbar-brand" style="float: right"><?php echo "<b>$name</b>";?></div>
	</nav>
<div class="row">
	<div class="col-lg-3">
	  <div class="navleft">
		
        <div class="panel panel-success">
			<div class="panel-heading customerhead">
				<b>CUSTOMER Wizard</b><i class="fa fa-angle-double-left customerfa rotate"></i>
			</div>
			<div class="panel-body customerbody" id="left_panel_body">
			<a href="addcust1.php"><i class="fa fa-user-plus"></i> &nbsp;Add New Customer</a>
			<a href="customer_search.php"><i class="fa fa-search"></i> &nbsp; Search Record</a>
			<a href="customer_remove.php"><i class="fa fa-user-times"></i> &nbsp;Remove Existing</a>
			<a href="nominee.php"><i class="fa fa-child"></i> &nbsp; Add Nominee</a>
			</div>	
		</div>

		<div class="panel panel-success" >
			<div class="panel-heading inthead">
				<b>Deposit Account</b><i class="fa fa-angle-double-left intfa rotate"></i>
				
			</div>	
			<div class="panel-body intbody" id="left_panel_body">
			<a href="deposit.php" ><i class="fa fa-user-plus"></i>&nbsp;New Deposit A/C</a>
			<a href="deposit_search.php" ><i class="fa fa-search"></i>&nbsp;Search Deposit A/C</a>
			
			</div>
		</div>
		 
		<div class="panel panel-success" id="">
			<div class="panel-heading deposithead">
				<b>LOAN Wizard</b><i class="fa fa-angle-double-left depositfa rotate"></i>
				
			</div>	
			<div class="panel-body depositbody"id="left_panel_body">
			<a href="loan.php"><i class="fa fa-user-plus"></i> &nbsp;New Home Loan</a>
			<a href="loan_search.php"><i class="fa fa-search"></i> &nbsp;Loan Search</a>
			</div>
		</div>
	
	
	   <div class="panel panel-success">
			<div class="panel-heading rephead">
				<b>CASH W/D Wizard</b><i class="fa fa-angle-double-left repfa rotate"></i>
			</div>
			<div class="panel-body repbody"id="left_panel_body">
			<a href="cashdeposit.php"><i class="fa fa-stack-overflow"></i> &nbsp;Deposit Cash</a>
			<a href="withdrawal.php"><i class="fa fa-money"></i> &nbsp;Withdraw Cash</a>
			<a href="passbookprint.php"><i class="fa fa-print"></i> &nbsp;Print Passbook</a>
			</div>	
		</div>

		<div class="panel panel-success" id="intr">
			<div class="panel-heading intrhead">
				<b>Interest Option</b><i class="fa fa-angle-double-left intrfa rotate"></i>
				
			</div>	
			<div class="panel-body intrbody" id="left_panel_body">
			<a href="intrcredit.php" target="below_session"><i class="fa fa-plus"></i> &nbsp;Interest Creditor</a>
			
			</div>
		</div>


		<br>
		<iframe width="235px" height="195px" src="./calendar2.html" scrolling="no" frameborder="0"></iframe>
	</div>
</div>	

<div class="col-lg-7" style="margin-left:-3.5em">
	<div class="article" ><br>
		<div class="cs">
			<p><b>Session Started at</b></p>
			<p id="session"></p>

		</div>	
		<br><br>
		<iframe src="" width="644px" height="245px" frameborder="0" name="below_session"></iframe>
	</div>
	
	<script>
		 document.getElementById("session").innerHTML= Date();
			$(document).ready(function(){
			   $(".cs").css(
			   {"text-align" : "center" , "font-size" : "22px",
			    "border" : "3px solid black" , "border-style" : "dotted" ,"border-radius" : "12px" 
			   });					
			});
		
	</script>
</div>		
	
		<div class="col-lg-3" style="margin-left:-3.5em">	
			<div class="navright"> 
				<div class="panel panel-success">
					<div class="panel-heading"><b>Configuration Panel&nbsp;&nbsp;&nbsp;</b></div>
					<div class="panel-body" id="right_panel_body">
					    
					   <a href="changepassword.php"><button class="btn btn-block btn-default"><span class="fa fa-key"></span> Change Password</button></a>
						<a href="logout2.php"><button class="btn btn-block btn-default"><span class="glyphicon glyphicon-log-out"></span> Log Out</button></a>
			    	<br><br>
			    	<iframe width="215px" height="200px" src="./calculator.html" scrolling="no" frameborder="0"style="margin-left:-8px;"></iframe>
					</div>
			
				</div>	
			
			</div>

		</div>	
	</div>	
</div>

</body>
</html>