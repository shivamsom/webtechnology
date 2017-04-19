<?php
session_start();
$conn = mysqli_connect("localhost","root","","bank");

	$sql = "SELECT * FROM login WHERE username= '$_SESSION[login_user]' " ; 
	$res = $conn->query($sql);
	if($res -> num_rows > 0 )
	{
		$row = $res -> fetch_assoc();	
		$sql2 = "INSERT INTO report values ('$row[uid]' , '$row[fullname]' , default , 'OUT')";
		$conn->query($sql2);

		unset($_SESSION['login_user']);
		header("location: BANKLOGIN.php");
	}
	else
	{
		echo "unable to logout";
	}

?>
 