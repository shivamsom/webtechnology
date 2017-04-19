<?php
session_start();
$conn = mysqli_connect("localhost","root","","bank");

	$sql = "SELECT * FROM login2 WHERE username= '$_SESSION[login_user2]' " ; 
	$res = $conn->query($sql);
	
	if($res -> num_rows > 0)
	{   
		$row = $res -> fetch_assoc();	
		$sql2 = "INSERT INTO report values ('$row[uid]' , '$row[fullname]' , default , 'OUT')";
		$conn->query($sql2);
		
		unset($_SESSION['login_user2']);
		header("location: BANKLOGIN.php");
	}
	else
	{
		echo "unable to logout";
	}

?>
 