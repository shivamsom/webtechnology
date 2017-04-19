<?php
	include 'include/session.php';
	
	if(isset($_SESSION['login_user2']))
  {
      echo "<body background='./css/template.jpg'></body>";
      echo "<h1 style='color:red;text-align:center'>Warning!!!!</h1><center><h1>Restricted Access To The User</h1></center>";
      echo "<center><h3>You Will be redirected in about 3 s...</h3></center>";
      header("refresh:3;url=index2.php");
      exit();
   }
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Bank Management Systems Pvt Ltd</title>
<link rel="stylesheet" href="./united/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js">
</script>

<script src="./js/indexjquery.js"></script>
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./fontsgoogle/fonts.google.apis.css">
</head>
	<body>
<div class="container">
    <header style=" background-image: url('<?php echo "./css/template5..jpg"; ?>'); ">
		<h1>Bank Name</h1>
	</header>
	<nav class="navbar navbar-default">
		<div class="navbar-header navbar-brand">Welcome <i><b>Manager</b> ,</i></div>
		<div class="navbar-header navbar-brand" style="float: right"><?php echo "<b>$name</b>";?></div>
	</nav>
<div class="row">
	<div class="col-lg-3">
	  <div class="navleft">
<!-------------------EMPLOYEE PANEL-------------------->		
		<div class="panel panel-primary" id="emp">
			<div class="panel-heading emphead">
				<b>EMPLOYEE Wizard</b><i class="fa fa-angle-double-left empfa rotate"></i>
				
			</div>	
			<div class="panel-body empbody"id="left_panel_body">
			<a href="./newemp.php"><i class="fa fa-user-plus"></i> &nbsp;Add New Employee</a>
			<a href="./emp_search.php"><i class="fa fa-search"></i> &nbsp; Search Record</a>
			<a href="./emp_remove.php"><i class="fa fa-trash"></i> &nbsp;
			Remove Existing</a>
			</div><!--PANEL BODY MUST BE HIDDEN USING CSS-->
		</div>
<!------------------------------------------------------>
	    <div class="panel panel-primary">
			<div class="panel-heading customerhead">
				<b>CUSTOMER Wizard</b><i class="fa fa-angle-double-left customerfa rotate"></i>
			</div>
			<div class="panel-body customerbody"id="left_panel_body">
			<a href="./addcust1.php"><i class="fa fa-user-plus"></i> &nbsp;Add New Customer</a>
			<a href="./customer_search.php"><i class="fa fa-search"></i> &nbsp; Search Record</a>
			<a href="./customer_remove.php"><i class="fa fa-user-times"></i> &nbsp;Remove Existing</a>
			<a href="nominee.php"><i class="fa fa-child"></i> &nbsp; Add Nominee</a>

			</div>	
		</div>
	
	
	   <div class="panel panel-primary">
			<div class="panel-heading rephead">
				<b>REPORT & STATS</b><i class="fa fa-angle-double-left repfa rotate"></i>
			</div>
			<div class="panel-body repbody"id="left_panel_body">
			<a href="./activitylog.php" target="frame"><i class="fa fa-server"></i> &nbsp;Activity Log</a>
			<a href="./tot.php?t=sb" target="frame"><i class="fa fa-server"></i> &nbsp;Total SB's</a>
			<a href="./tot.php?t=ca" target="frame"><i class="fa fa-server"></i> &nbsp;Total CA's</a>
			<a href="./tot.php?t=emp" target="frame"><i class="fa fa-server"></i> &nbsp;Total Employees</a>
			<a href="./tot.php?t=l" target="frame"><i class="fa fa-server"></i> &nbsp;Total Loan</a>

			</div>	
		</div>
		<br>
		<iframe width="235px" height="195px" src="./calendar.html" scrolling="no" frameborder="0"></iframe><!--For calendar -->
	</div><!--navigation left-->
</div>	

<div class="col-lg-7" style="margin-left:-3.5em">
	<div class="article" ><br>
		<div class="cs">
			<p><b>Session Started at</b></p>
			<p id="session"></p>

		</div>	
		<br><br>
		<iframe src="" width="644px" height="245px" frameborder="0" name="frame"></iframe>
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
				<div class="panel panel-primary">
					<div class="panel-heading"><b>Configuration Panel&nbsp;&nbsp;&nbsp;</b></div>
					<div class="panel-body" id="right_panel_body">
					    
						<a href="changepassword.php"><button class="btn btn-block btn-default"><span class="fa fa-key"></span> Change Password</button></a>
						<a href="logout.php"><button class="btn btn-block btn-default"><span class="glyphicon glyphicon-log-out"></span> Log Out</button></a><br><br>
			    	<iframe width="215px" height="200px" src="./calculator.html" scrolling="no" frameborder="0"style="margin-left:-8px;"></iframe>
					</div>
			
				</div>	
			
			</div><!--navigation right---->

		</div>	
	</div>	
</div>

</body>
</html>