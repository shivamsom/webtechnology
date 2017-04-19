<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost", "root", "" , "bank");
// Selecting Database

session_start();// Starting Session
//Storing  Session

if(isset($_SESSION['login_user']))
	{$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
	$sql= "SELECT * from login where username='$user_check'";
	$ses_sql= $conn -> query($sql);
	$row = $ses_sql->fetch_assoc();
	$login_session =$row['username'];
	$name = $row['fullname'];
	
	}
	
	elseif (isset($_SESSION['login_user2'])) 
	{
		$user_check=$_SESSION['login_user2'];
// SQL Query To Fetch Complete Information Of User
	$sql= "SELECT * from login2 where username='$user_check'";
	$ses_sql= $conn -> query($sql);
	$row = $ses_sql->fetch_assoc();
	$login_session =$row['username'];
	$name = $row['fullname'];
		
	}

	else
	{
		header("location:BANKLOGIN.php");
	}

?>

 