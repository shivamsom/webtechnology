<?php
	include 'include/session.php' ;
?>
	

<!DOCTYPE HTML>
<html>
<head>
<title>Search Employee</title>

<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
 <script src="./jquery/jquery-3.1.1.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="./js/clearform.js"></script>
</head>
<body background="./css/template.jpg">
<a href="./index1.php"><button class='btn btn-danger' style="float: right;" ><span class="glyphicon glyphicon-home"></span> HOME</button></a><a href='./esearch.php'><button class='btn btn-danger' style="float: left;"><span class="glyphicon glyphicon-search"></span> DISPLAY ALL</button></a>

<div class="container">

		<h1 style="color:red;text-align: center;font-weight: bolder"> Search Employee Record</h1>
				
				<form action="esearch.php" method="POST">

					<div class="form-group">
						<div class="row">
						
						    <div class="col-md-4"></div>
							
							<div class="col-md-4">

							<b style="font-size:25px"><label class="glyphicon glyphicon-search"> Enter Employee ID: </b></label><input type="text"  name="emp_id" id="emp_id" size="20" class="form-control " placeholder="(eg. 101 , 102...)" onkeyup="namesdisable()"><br>
							<h3> Or Search Using:</h3>
							<input type="text" name="lastname" placeholder="LAST NAME" class="form-control cust_name" onkeyup="empiddisable()">
							<input type="text" name="firstname" placeholder="FIRST NAME" class="form-control cust_name" onkeyup="empiddisable()">
							<input type="text" name="middlename" placeholder="MIDDLE NAME" class="form-control cust_name" onkeyup="empiddisable()">
								<br>		

						<button class="btn btn-block btn-info" type="submit" name="search" id="search" >Search</button>	
							</div>
							
							<div class="col-md-4"></div>
							
						</div>
						
					</div>

				</form>
</div>



<script type="text/javascript">
	var names = document.getElementsByClassName("cust_name");
		var emp_id = document.getElementsByName("emp_id");	
	function empiddisable()
  {
		
	 if(names[0].value == "" && names[1].value == "" && names[2].value == "")	//declare 'id=lname and id=mobileno' in input fields if u do not want to use array
			{
				emp_id[0].disabled = false; 
			}
			else
			{
				emp_id[0].disabled = true;
			}
  
  }	
  function namesdisable()
  {
  		if(emp_id[0].value == "")
  		{
  			for(i=0 ; i<3 ; i++)
  			{
  				names[i].disabled = false;
  			}
  		}
  		else
  		{
  			for(i=0 ; i<3 ; i++)
  			{
  				names[i].disabled = true;
  			}
  		}
  }
</script>
</body>
</html>