<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	if (empty($_POST['man_username']) || empty($_POST['man_password'])) {
	$error = "Username or Password is invalid";
	echo "<script>alert('Empty Username or Password');</script>";
	}
	else
	{
// Define $username and $password
		$username=$_POST['man_username'];
		$password=$_POST['man_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$conn = mysqli_connect("localhost","root","","bank");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * from login where password='$password' AND username='$username'" ;
$res = $conn->query($sql);
$rows = $res -> num_rows;
if ($rows == 1) 
{
	$_SESSION['login_user']=$username; // Initializing Session
	report_entry($conn,$res);
	header("location: index1.php"); // Redirecting To Other Page
} 
else 
{
	echo "<script>alert('Wrong Username or Password');</script>";
}
	$conn->close(); // Closing Connection
	}
}


if (isset($_POST['submit2'])) 
{
	if (empty($_POST['staff_username']) || empty($_POST['staff_password'])) {
	$error = "Username or Password is invalid";
	echo "<script>alert('Empty Username or Password');</script>";
	}
	else
	{
// Define $username and $password
		$username=$_POST['staff_username'];
		$password=$_POST['staff_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$conn = mysqli_connect("localhost","root","","bank");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT * from login2 where password='$password' AND username='$username'" ;
$res = $conn->query($sql);
$rows = $res -> num_rows;
if ($rows == 1) 
{
	$_SESSION['login_user2']=$username; // Initializing Session
	report_entry($conn,$res);
	header("index2.php"); // Redirecting To Other Page
} 
else 
{
echo "<script>alert('Wrong Username or Password');</script>";
}
	$conn->close(); // Closing Connection
	}
}

function report_entry($conn,$res)
{
	$row = $res ->fetch_assoc();
	$sql = "INSERT INTO report values('$row[uid]' , '$row[fullname]' , default , 'IN')";
		$conn->query($sql);
}

?>