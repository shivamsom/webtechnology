<?php
	include 'include/session.php'; 	
	if(isset($_POST['change']) && isset($_SESSION['login_user']))
 {
 	$username= $_POST['username'];
 	$opassword=$_POST['old_password'];
 	$npassword=$_POST['new_password'];


 		if($opassword == $npassword)
 		{
 				echo "<h2>Password Cannot Be Changed</h2>";
 		}
 		else 
 		{
 			$sql =  "SELECT password FROM  login where username = '$username' AND password= '$opassword'";
 			$res=$conn->query($sql);
 				if($res->num_rows == 0)
 				{
 					echo "<h2>Username OR Password Didn't match";
 				}
 				$res= $res->fetch_assoc();
 				if($opassword == $res["password"])
 				{

 						$sql= " UPDATE login set password = '$npassword' where username= '$username' AND password= '$opassword' ";
 			$conn->query($sql);
 		
 		echo "	<script>
 						alert('Password Changed Successfully');
 						window.location.href = 'index1.php';
 				</script>	";

 	

 				}
 				else
 				{
 					echo "<h2>Password Match Error</h2>";
 				}

 			

 		}	
 }
 elseif(isset($_POST['change']) && isset($_SESSION['login_user2']))
 {
 	$username= $_POST['username'];
 	$opassword=$_POST['old_password'];
 	$npassword=$_POST['new_password'];


 		if($opassword == $npassword)
 		{
 				echo "<h2>Password Cannot Be Changed</h2>";
 		}
 		else 
 		{
 			$sql =  "SELECT password FROM  login2 where username = '$username' AND password= '$opassword'";
 			$res=$conn->query($sql);
 				if($res->num_rows == 0)
 				{
 					echo "<h2>Username or Password Didn't match";
 				}
 				$res= $res->fetch_assoc();
 				if($opassword == $res["password"])
 				{

 						$sql= " UPDATE login2 set password = '$npassword' where username= '$username' AND password= '$opassword' ";
 			$conn->query($sql);
 		
 		echo "	<script>
 						alert('Password Changed Successfully');
 						window.location.href = 'index2.php';
 				</script>	";	

 				
 				}
 				else
 				{
 					echo "<h2>Password Match Error</h2>";
 				}

 			

 		}	
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="./united/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js">
</script>
<script src="./jquery/jquery-3.1.1.min.js"></script>
<style type="text/css">
.panel
{
	margin-top:100px 
}
.panel-heading
{
	font-size: 22px;
	font-weight: bold;
	font-family: Chonburi;
}

label
{
	font-size: 18px;
	font-weight: bold;
}
body
{
	background-color: #63686d;
}
h2
{
	color: white;
	font-family: chonburi;

}
</style>
</head>
<body>

<div class="container">
	<form action="" method="post">
		<div class="row"></div>
		<div class="row ">
			<div class="col-lg-3"></div>
				<div class="col-lg-6">
					 <div class="panel panel-primary">
  							  	<div class="panel-heading">Change Your Password</div>
    							<div class="panel-body">
    								<label>Enter Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username" class="form-control" required><br>
    								<label>Enter Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="old_password" class="form-control" required><br>
    								<label>Enter New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="new_password" class="form-control" required><br>

    							</div>

    							<div class="panel-footer"><button type="submit" name="change" class="btn btn-primary">Change Password</button></div>
   					</div>
				</div>
			
			<div class="col-lg-3"></div>
		</div>
		</form>
</div>
</body>
</html>