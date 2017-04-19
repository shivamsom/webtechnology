<?php

include 'include/session.php';
?>


<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./cerulean/bootstrap.min.css">
<link rel="stylesheet" href="./css/depositstyles.css">

<head>
	<title>Deposit A/C Opening</title>
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/clearform.js"></script>
</head>
<body background="./css/template2.jpg">
<a href="index2.php"><button type="button" style="float:right" class="btn btn-danger"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</button></a>	
		<div class="container-fluid">
<form class="form-inline" role="form" action="open_deposit.php" method="post" enctype="multipart/form-data">
		
<div class="">
	<center>
	<div class=""><b><h3 style="color:blue"><u>Application For Deposit Account.</u></h3></b></div></center>
		<div class="row">
			<div class="col-md-4">
		<text class="text-primary txt-style">Existing A/C No.</text>
		<input type="number" class="form-control" min="1" name="acno" required placeholder="         Enter A/C No.">
 			</div>
			<div class="col-md-4">
			&nbsp;
<text class="text-primary txt-style">Type of Existing A/C:</text>
<select class="form-control" name="type"><option value="SB">Savings</option>
			<option value="CA">Current</option>
			</select>
			</div>
			<div class="col-md-4">
<button type="button" class="btn btn-success" onclick="mydate()">Date</button>
<input type="text" id="fddate" class="form-control" name="date" size="29" placeholder="Click green button for date">
			</div>
		</div>	
<!---------------------JAVASCRIPT FOR DATE-------------------------------------------->

<script src="./js/depositscript.js">

</script>
<!------------------------------------------------------------------------------------>
	

	<br>
	
	              <br>
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
   
  

</div>
</div>

<br>
   <text class="text-primary txt-style">Name of the Depositor:</text>
   <input type="text" size="100" class="form-control input-style" id="sname" name="fullname" placeholder="Last Name                                                  First Name                                                Middle Name" required>
   
    <br><br>

	<input type="checkbox" id="cbox" value="yes" class="cbox" name="jt_ac" onclick="joint()">
	<span class="label-danger txt-style" style="color:white">&nbsp;Incase of Joint Holders&nbsp;</span><label id="msg1" style="color:black"> &nbsp;</label> <label id="msg2" style="font-weight:bold;color:#0000ff"></label>
     <br>
	 <div class="row">
	 <div class="col-md-12">
	 <table class="table table-bordered table-hover">

				<tr>
		
			<th class="col-md-3">Last Name</th>
			<th class="col-md-3">First Name</th>
			<th class="col-md-3">Middle Name</th>
			<th class="col-md-2">Existing A/c no.</th>
			<th class="col-md-1">Type of A/c</th>
		</tr>
		<tr class="success">
			<td><input type="text" size="35" class="form-control app1" name="app1lname" disabled></td>
			<td><input type="text" size="35" class="form-control app1" name="app1fname" disabled></td>
			<td><input type="text"  size="35" class="form-control app1" name="app1mname" disabled></td>
			<td><input type="number" size="20" class="form-control app1" name="app1acno" disabled></td>
			<td><select class="form-control app1" name="app1type" disabled>
			<option value="SB">Savings</option>
			<option value="CA">Current</option>
			</select></td>
			
		</tr>	
		<tr class="info" ondblclick="enable2()" onmousedown="disable2(event)">
			<td><input type="text" size="35" class="form-control app2" name="app2lname" disabled></td>
			<td><input type="text" size="35" class="form-control app2" name="app2fname" disabled></td>
			<td><input type="text"  size="35" class="form-control app2" name="app2mname" disabled></td>
			<td><input type="number" size="20" class="form-control app2" name="app2acno" disabled></td>
			<td><select class="form-control app2" name="app2type" disabled>
			<option value="SB">Savings</option>
			<option value="CA">Current</option>
			</select></td>
		</tr>
		<tr class="danger" ondblclick="enable3()" onmousedown="disable3(event)">
			<td><input type="text" size="35" class="form-control app3" name="app3lname" disabled></td>
			<td><input type="text" size="35" class="form-control app3" name="app3fname" disabled></td>
			<td><input type="text"  size="35" class="form-control app3" name="app3mname" disabled></td>
			<td><input type="number" size="20" class="form-control app3" name="app3acno" disabled></td>
			<td><select class="form-control app3" name="app3type" disabled>
			<option value="SB">Savings</option>
			<option value="CA">Current</option>
			</select></td>
		
		</tr>
		</table>
		</div>
		</div>
	<!-------------------------------PERSONAL INFO---------------------------->	
			<div class="row ">
<h4 class="text-info" style="color:blue">Personal Info of Depositor_______________________________________________________________________________________</h4>
	
	<div class="col-md-6">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAN No.&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" name="pan" placeholder="PAN/ GIR No."> 
	</div>
		    </div><br>	
	<div class="row">
	<div class="col-md-12">
	<b>Address Line 1:</b> <input type="text" class="form-control" size="130" name="Addr1" placeholder="FLAT NO., Residential Name, Landmark, ..etc">
	</div>
     </div><br>
		<div class="row">
	<div class="col-md-12">
	<b>Address Line 2:</b> <input type="text" class="form-control" size="130" name="Addr2" placeholder="Local Area Name,Street Name,etc">
	</div>
		</div><br>

		<div class="row">
	<div class="col-md-12">
	<b>Address Line 3:</b> <input type="text" class="form-control" size="130" name="Addr3" placeholder="Name of the Town or City">
	</div>
		</div><br>
		<div class="row">
			<div class="col-md-4">
			<b>Pincode:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>
			<input type="text" class="form-control" maxlength="6" name="pin" placeholder="Enter Pin Address">
			</div>
			<div class="col-md-4">
				<b>District :</b><input type="text" class="form-control" name="district"  placeholder="District">
			</div>
			<div class="col-md-4">
			<b>State:</b><select class="form-control" name="state">
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
		</div><br>
		
		<div class="row">
			<div class="col-md-5">
			<b>Tel.No(Res):</b><input type="number" max="7000" placeholder="STD.CODE" name="std" class="form-control" ><b> - </b><input type="number" class="form-control" name="landline" placeholder="Landline No." size="3">
			</div>
			<div class="col-md-4">
			
			<b>Mobile No.:</b><input type="text" size="1"  value="+91" class="form-control"> -
			<input type="text" class="form-control" name="mobile" placeholder="10-digits" maxlength="10">
			</div>
			<div class="col-md-3">
			<b>E-mail ID:</b><input type="text" class="form-control" name="email" style="text-transform:none">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<input type="checkbox" id="nbox" name="nom" onclick="nominee()" value="Y">
				<span class="label-danger txt-style" style="color:white">&nbsp;Nomination&nbsp;</span>
			</div>
		</div>
		<div class="row container-fluid">
			<table class="table table-bordered">
			<tr>
				<th class="col-md-4">Name of Nominee</th>				
				<th class="col-md-1">Age</th>
				<th class="col-md-3">Relationship</th>
				
			</tr>
			<tr class="info">
				<td><input type="text" class="form-control nom" name="n_name" size="55" disabled ></td> 
				<td><input type="number" min="3"  name="n_age" class="form-control nom"disabled ></td>
				<td><select class="form-control nom" name="relationship" disabled >
					<option value="son">Son</option>
					<option value="daughter">Daughter</option>
					<option value="oth">Other</option></select>
				</td>
				
				
			</tr>	
			</table>
		</div>
		
		<div class="row">
			<div class="col-md-12">
			<h4 style="color:blue;" >Upload Specimen Signature<i><text style="color:red;font-family:Times New Roman">(Depositor)</text></i>:</h4>
	
		<input type="file" accept="image" name="sign" class="form-control btn-primary">
			</div>
		</div>

		<div class="row">
		<div class="col-md-12">
		<h4 style="color:blue">Upload Specimen Signature<i><text style="color:red;font-family:Times New Roman">(Joint Holders)</text></i>:</h4>
		
		</div>	
		</div>	
		
	<div class="row">
		<div class="col-md-4">
		<label style="font-weight:bold;color:white" class="form-control label-success">1st Holder:</label>
		<input type="file" accept="image/*" name="sign1" class="form-control btn-success" id="j1" disabled>
		</div>
	    	<div class="col-md-4">
		<label style="font-weight:bold;color:white" class="form-control label-info">2nd Holder:</label>
		<input type="file" accept="image/*" name="sign2"  class="form-control btn-info" id="j2" disabled>
		</div>
	    	<div class="col-md-4">
		<label style="font-weight:bold;color:white" class="form-control label-danger">3rd Holder:</label>
		<input type="file" accept="image/*" name="sign3" class="form-control btn-danger" id="j3"
		disabled>
		</div>
	
	
	</div>
		
	
			<br><br>
		<button class="mysubmit btn btn-block" type="submit" name="submit">Confirm & Submit</button>	
		</form>
</div>
		
</body>

</html>		