<?php
	include 'include/session.php';
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");	

	if(isset($_POST['submit']))
	{
		if($_POST['type'] == 'SB')
		{			//	$s = " SELECT * FROM customersb WHERE acno='$_POST[acno]'";
			$sql = "UPDATE customersb SET balance =( SELECT balance WHERE acno='$_POST[acno]') + $_POST[balance] WHERE acno=$_POST[acno] AND L_name='$_POST[L_name]' AND F_name='$_POST[F_name]' AND M_name='$_POST[M_name]' ";
				if($conn->query($sql) == TRUE)

					{	$sql = "SELECT * FROM customersb WHERE acno=$_POST[acno] ";
						$res=$conn->query($sql);

									if($res->num_rows == 0)
									{
									echo "Unsuccessful... Account Number or Type Is Not Matching in the Database";	
									}
									else				
	{ 
		$row = $res -> fetch_assoc(); //from customersb table...
	 $sql_log = "INSERT INTO logs values ('$_POST[acno]' , '$date' , '$_POST[balance]', default , '$row[balance]')";
    		$conn->query($sql_log);
    			


     echo "<h1>Balance Updated.Current Balance= Rs. ".$row["balance"]."<font color='red' style='float:right'> Do Not Refresh <span class='fa fa-refresh'></span></font></h1>";
			unset($_POST['acno']);
		
    }
					}
				




				else
					{echo "Unsuccessful... Account Number or Type Is Not Matching in the Database";}
				echo "<a href= 'cashdeposit.php' style='float:right'><button type='button' class='btn btn-danger'>New Entry</button></a>";
				echo "<a href= 'passbookprint.php' style='float:right'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-print'></span>&nbsp;PassBook Print</button></a>";
				
			
		}


		if($_POST['type'] == 'CA')
		{
			$sql = "UPDATE customerca SET balance =( SELECT balance WHERE acno='$_POST[acno]') + $_POST[balance] WHERE acno=$_POST[acno] AND L_name='$_POST[L_name]' AND F_name='$_POST[F_name]' AND M_name='$_POST[M_name]' ";
				if($conn->query($sql) == TRUE)

					{	$sql = "SELECT * FROM customerca WHERE acno=$_POST[acno] ";
						$res=$conn->query($sql);

							if($res->num_rows == 0)
								{
									echo "Unsuccessful... Account Number or Type Is Not Matching in the Database";
								}
							else				
			{ 
					
	 			$row = $res -> fetch_assoc(); //from customersb table...
	 $sql_log = "INSERT INTO logs2 values ('$_POST[acno]' , '$date' , '$_POST[balance]', default , '$row[balance]')";
    		$conn->query($sql_log);
    			


     echo "<h1>Balance Updated.Current Balance= Rs. ".$row["balance"]."<font color='red' style='float:right'> Do Not Refresh <span class='fa fa-refresh'></span></font></h1>";
			unset($_POST['acno']);
	
    	    }
	                }
				

				else
					{echo "Unsuccessful... Account Number or Type Is Not Matching in the Database";}
				echo "<a href= 'cashdeposit.php' style='float:right'><button type='button' class='btn btn-danger'>New Entry</button></a>";	
			echo "<a href= 'passbookprint.php' style='float:right'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-print'></span>&nbsp;PassBook Print</button></a>";
		}

	}


?>












<!doctype html>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
 <script src="./jquery/jquery-3.1.1.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="./js/clearform.js"></script>
<title>Balance update</title>
</head>
<style>

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;

	}
	b{
	font-weight:bold;
	 font-size:18px;
	}
</style>
</head>

<body background="./css/template.jpg">
<header class="container-fluid">			<div class="row">
  <?php

      if(isset($_SESSION['login_user']))
  {
    echo "<a href='index1.php'><button class='btn btn-danger'><span class='fa fa-home'>&nbsp;Home</span></button></a>";
  }
  elseif (isset($_SESSION['login_user2'])) 
  {
    echo "<a href='index2.php'><button class='btn btn-danger'><span class='fa fa-home'>&nbsp;Home</span></button></a>";;
  }

  ?>
</div></header>
<center><h1>(BANK NAME)</h1></center>
<script src="./js/depositscript.js"></script>
<script src="./js/cashandwith.js"></script>
<form class="form-group" action ="cashdeposit.php" method="post"> 
				<div class="container">	
	
<div class="row form-inline">

	<div class="col-md-4 ">
		<select class="form-control branch">
				<option ></option><option ></option>
		</select>&nbsp;<b>Branch</b>
	</div>
	<div class="col-md-4">
		<select class="form-control"  name="type" id="type" >
		    <option value="SB">Savings</option>
			<option value="CA">Current</option>
			<option value="RD">Recurring Deposit</option>
		</select><b> Account</b>
	</div>
	<div class="col-md-4">

		<button type="button" class="btn btn-success" onclick="mydate()">Date</button>
		<input type="text" disabled id="fddate" class="form-control" size="29"placeholder="Click green button for date">
	</div>
</div>
<!--end of row1-->
<div class="row">
	<div class="col-md-4"> <BR> 
		<b>Account Holder Name:</b>
		<input type="text" size="10" class="form-control ac_name" name="L_name" placeholder="LAST NAME" required>
		<input type="text" size="10" class="form-control ac_name" name="F_name" placeholder="FIRST NAME" required>
		<input type="text" size="10" class="form-control ac_name" name="M_name" placeholder="MIDDLE NAME" required>
		<br>
		<b>Amount:&nbsp;(in &nbsp;<label class="fa fa-rupee"></label>)</b> <input type="text" class="form-control amt" id="amt" name= "balance" required>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4" >
			<BR>
		<b>Installment for A/C No. :</b><input type="text" size="3" name="acno" class="form-control" required><br>
		
	</div> 
</div>
<!---------end of row2-------->
<br>
<div class="row">
	<div class="col-md-4 form-inline">
		<b>Mobile Number:</b><br><input type="text" class="form-control" size="2" value="+91"> - <input type="text" maxlength="10" size="10" class="form-control" required>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4"><b>PAN No.</b><input type="text" maxlength="10" class="form-control">
	</div>
</div>
<br>

<div class="row">
		<text ><b style="font-size:20px">&nbsp;&nbsp;&nbsp;Particulars of Deposit: </b></text><br>
	<div class="col-md-6 "style="font-size:18px">

		<label><input type="radio" name="AC_DEPOSIT" data-toggle="modal" data-target="#cashmod"> Cash</label>
		<label><input type="radio" name="AC_DEPOSIT" data-toggle="modal" data-target="#cheqmod"> Cheque</label>

	</div>
	<div class="col-md-6">
	</div>
</div>


	<div class="modal fade" id="cashmod">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header form-inline"><center><b>
				Enter Cash Particulars: </b>
				<button type="button" class="close" data-dismiss="modal" style="font-size:28px;padding-right:10px">&times;</button>
					</center>
				</div>
				<div class="modal-body">
				<table class="table table-hover table-bordered">
				<tr>
					<th width="300px">Cash Notes</th>
					<th width="200px">No.of pieces</th>
					<th width="200px">Amount</th>
				</tr>
				<tr>
					<td><b>&nbsp;1000</b> &times;</td>
					<td><input type="text" class="form-control r1000" size="1" onkeyup="calculate(1000)"></td>
				    <td><input type="text" class="form-control r1000 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td><b>&nbsp;500</b> &times;</td>
					<td><input type="text" class="form-control r500" size="1" onkeyup="calculate(500)"></td>
				    <td><input type="text" class="form-control r500 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td><b>&nbsp;100</b> &times;</td>
					<td><input type="text" class="form-control r100" size="1" onkeyup="calculate(100)"></td>
				    <td><input type="text" class="form-control r100 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td><b>&nbsp;50</b> &times;</td>
					<td><input type="text" class="form-control r50" size="1" onkeyup="calculate(50)"></td>
				    <td><input type="text" class="form-control r50 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td><b>&nbsp;20</b> &times;</td>
					<td><input type="text" class="form-control r20" size="1" onkeyup="calculate(20)"></td>
				    <td><input type="text" class="form-control r20 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td><b>&nbsp;10</b> &times;</td>
					<td><input type="text" class="form-control r10" size="1" onkeyup="calculate(10)"></td>
				    <td><input type="text" class="form-control r10 val" size="1" value="0"></td>
				</tr>
				<tr>
					<td style="visibility:hidden"></td>
					<td><button class="btn btn-block btn-info" id="calcash" type="button" onclick="cash()"><b style="font-size:16px">Total (<label class="fa fa-rupee"></label>) = </b></button></td>
					 <td ><input type="text" class="form-control" id="cash_amt" size="2" name="bal" placeholder="Amount(in Rs.)" value="0"></td>
				</tr> 
				</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="cheqmod">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header form-inline"><center><b>
				Enter Cheque Particulars: </b>
				<button type="button" class="close" data-dismiss="modal" style="font-size:28px;padding-right:10px">&times;</button>
				</div>
				<div class="modal-body">
				<table class="table table-hover table-bordered">
				<tr>
					<th width="110px">Drawn on Bank</th>
					<th width="105px">Branch</th>
					<th width="90px">Cheque No.</th>
					<th width="90px">Cheque Amount.</th>
				</tr>
				<tr>
					<td><input type="text" class="form-control donb" size="1"></td>
				    <td><input type="text" class="form-control branch" size="1"></td>
					<td><input type="text" class="form-control chqno" size="1"></td>
					<td><input type="text" class="form-control" id="chqamt" size="1"></td>
				    
				</tr>
				
				<tr>
					<td style="visibility:hidden"></td>
					<td style="visibility:hidden"></td>
					<td><button class="btn btn-block btn-info" id="calcheq" type="button" onclick="cheq()"><b style="font-size:16px">Total (<label class="fa fa-rupee"></label>) = </b></button></td>
					 <td><input type="text" class="form-control" id="chqtotamt" size="1"  placeholder="Amount(Rs)" ></td>
				</tr> 
				</table>
				
				</div>
			</div>
		</div>
	</div><br>
	
					</div>	<!--container-->
<center><button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Confirm</button></center>
</form>					
</body>
</html>
