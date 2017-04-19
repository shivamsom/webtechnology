<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bank";
$bgpic="./css/template.jpg";
	//create new connection
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if($conn->connect_error)
		{

			die("Cannot Connect" . $conn->connect_error);
		}
       else
       	{}
?>
<html>
<head>
	<style type="text/css">
		
	</style>
</head>
<body background="<?php echo "$bgpic";?>"></body>
</html>