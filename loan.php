<?php
include 'include/session.php';
?>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="./jquery/jquery-3.1.1.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="./js/clearform.js"></script>
 <link rel="stylesheet" href="./css/loan.css">
 
 <script src="./js/loanjquery.js"></script>
 <script src="./js/loanscript.js"></script>
 </head>

<body background="./css/template4.jpg">
<div class="container-fluid">
<center>	<h4 class="text-danger txt"><u>Application For Home Loan</u></h4> </center>
	<a href="index2.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</button></a>
	<h4>1.Personal Information of Loan Applicant</h4>

	<form action="loan_insert.php" method="post" class="form-inline">
	
<div class="f1">	
	<div class="row">		
		<div class="col-lg-12">
			<label>Name Of the Applicant:</label><select class="form-control" name="title"><option value="Mr">Mr.</option>
			<option value="Mrs">Mrs</option></select>
			<input type="text"size="50" class="form-control" placeholder="(LAST NAME      FIRST NAME   MIDDLE NAME)" name="fullname" required>
		</div>
	</div>
	
	<div class="row"><div class="col-md-12">
			<label class="sub"><u>Current Residential Address:</u></label><br>
					</div>
	</div>
	
<div class="row">	
	<div class="col-lg-6">
		<label>Address Line 1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" size="50" name="addr1" maxlength="50" required class="form-control" placeholder="Flat No./House No./Society Name, Landmark">
		<label>Address Line 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" size="50" name="addr2" maxlength="50" required class="form-control" placeholder="Local Area Name,Street Name,etc)">
		<label>Address Line 3:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" size="20" name="addr3" maxlength="50" required class="form-control" placeholder="(City)">
	</div>

	<div class="col-lg-6">
			<label>District :&nbsp;&nbsp;</label>
			<input type="text" size="20" class="form-control" name="district" placeholder="District" required><br>
			<label>Pin Code:</label>
			<input type="text" class="form-control" size="15" name="pin" maxlength="6"required><br>
		<label>State: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<select class="form-control" name="state">
       <option value="AP"> 
        Andhra Pradesh</option>
        <option value="ARP">
        Arunachal Pradesh</option>
        <option value="ASS">
        Assam</option>
        <option value="BHR">
        Bihar</option>
        <option value="CHHT">
        Chhattisgarh</option>
         <option value="GOA">
        Goa</option>
       <option value="GUJ">
        Gujarat</option>
       < option value="HAR">
        Haryana</option>
       < option value="HP">
        Himachal Pradesh</option>
       < option value="JK">
        Jammu and Kashmir</option>
        <option value="JH">
        Jharkhand</option>
       < option value="KAR">
        Karnataka</option>
      < option value="KR">
        Kerala</option>
         <option value="MP">
        Madya Pradesh</option>
       <option value="MAH">
        Maharashtra</option>
       < option value="MAN">
        Manipur</option>
        <option value="MEGH">
        Meghalaya</option>
        <option value="MIZ">
        Mizoram</option>
        <option value="NAG">
        Nagaland</option>
        <option value="OR">
        Orissa</option>
         <option value="PUNJ">
        Punjab</option>
       <option value="RAJ">
        Rajasthan</option>
        <option value="SIK">
        Sikkim</option>
        <option value="TN">
        Tamil Nadu</option>
        <option value="TRI">
        Tripura</option>
       < option value="UTTR">
        Uttaranchal</option>
        <option value="UP">
        Uttar Pradesh</option>
        <option value="WB">
        West Bengal
</option>
</select>
	</div>
</div>	

<div class="row">
<br>
	<div class="col-md-4">
	<label>Email ID:</label>
	<input type="text" size="20" class="form-control" name="email" style="text-transform:none">
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-7">
	<label>Mobile No.</label>
	
	<input type="number" min="1111111111"  max="9999999999" placeholder="10digits" class="form-control" name="mob" required> 
	</div>
	
</div>

<br>
<div class="row">
		<div class="col-md-4">
			<label>Date of Birth:</label>
			<input type="date" class="form-control" name="dob" required>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<label>Occupation:</label>
			<select class="form-control" name="occupation" required>
				<option value="salry">Salaried</option>
				<option value="Retal">Retail</option>
				<option value="defns">Defense Personnel</option>
				<option value="prof.">Professor</option>
				<option value="govt">Govt.Employee</option>
			</select>
		</div>
</div>

	</div>
	
<!------------------------------------------------------------------------------------------>
	<h4>2.Location of Property</h4>
	<div class="f1">
		<div class="row">
			<div class="col-md-6">
			<label>Please fill the complete address of property:</label>
		<textarea rows="4" cols="30" name="textarea" required></textarea>
				</div>
			<div class="col-md-3">
		<label>Society/Project Name:</label><input type="text" class="form-control" name="society" size="10"required>
		<label>Buit-up Area:</label><input type="number" min="400" max="3500" name="builtup" class="form-control"required>	<br>
		<label>Govt.Approved</label><select class="form-control" name="gov">
		<option value="y">Yes</option><option value="n">No</option></select>
			</div>
			
			<div class="col-md-3">
				<input type="radio" name="proj" id="s1" value="NEW">New Property
				<input type="radio" name="proj" id="s2" value="old">Old Property
						<div class="bldr">
				<label>Builder Name:</label><input type="text" placeholder="Builder Name" name="buildername" class="form-control" >
			<label class="glyphicon glyphicon-earphone">Contact No.</label><input type="number" placeholder="Builder Cont.no"min="1111111111" class="form-control" max="9999999999" name="buildercontact" >
					    </div>
						<div class="ownr">
				<label>Owner Name:</label><input type="text" placeholder="Owner Name" class="form-control" name="ownername">
				<label class="glyphicon glyphicon-earphone">Contact No.</label><input type="number" min="1111111111" max="9999999999" placeholder="Owner Cont.no" class="form-control" name="ownercontact" >
						</div>
			</div>
		</div>
	</div>
	<h4>3.Income Details</h4>
	<div class="f1">
		<div class="row">
			<div class="col-md-5">
			<label>Net Monthly Income.(&#8377;)</label><input type="text" class="form-control" id="income" name="income" required>
			<button class="btn btn-primary" onclick="check()" type="button">Check</button>
			</div><div class="col-md-7"><p id="disp"></p></div>
		</div>
	</div>
<h4>4.Loan Eligibilty Amount & EMI Calculation</h4>

	<div class="f1">
	<div class="row">
		<div class="col-md-6">
			<label>Loan Tenure(Max.30 yrs):</label>
			<input type="number" id="yr" size="25" class="form-control elig" name="yr" min="1" max="30" required>
		</div>
		
		<div class="col-md-6">
			<label>Interest Rate(in %):</label>
			<input type="text" size="10"  id="roe" class="form-control elig" name="roi" required>&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="calc()">Calculate</button>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<label>Loan Amount(&#8377;):</label>
			<input type="number" class="form-control elig" id="lamt" size="10" name="lamt" required>
			<p id="max"></p>
		</div>
		
		<div class="col-md-6">
			<label>EMI Payable on this Amount(&#8377;):</label>
			<input type="text" class="form-control elig" id="emi" name="emi"  placeholder="Monthly EMI (in Rs.)">
		</div>
		<br><br>

	</div>
</div>

<div class="col-lg-12"><button class="btn btn-block btn-primary mysubmit" name="submit" type="submit" >Submit</button></div>
</form></div></body></html>
	