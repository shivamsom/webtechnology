<?php
	include 'include/session.php';
	echo "<body><script>
			function cls()
			{
				window.location.href= 'about:blank';
			}
	</script>";

echo "<form action='clearactivitylog.php' method='post'>
<button type='button' class='btn-danger' onclick='cls()'>Close</button>
<button type='submit' name='clear' class='btn-warning'>Clear Logs</button>
</form>"; 

	$sql = "SELECT * FROM report";
	$res = $conn->query($sql);
		echo "<table class='table table-bordered'>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Date&Time</th>
					<th>Status</th>
				</tr>	
		";
	while ($row = $res->fetch_assoc()) 
	{
		echo "<tr><td>";
		echo $row["eid"]."</td><td>";
		echo $row["fullname"]."</td><td>";
		echo $row["date&time"]."</td><td>";
		echo $row["status"]."</td></tr>";

	}
echo "</table></body>";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./united/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="./jquery/jquery-3.1.1.min.js"></script>

<link rel="stylesheet" href="./fontsgoogle/fonts.google.apis.css">
	<title></title>
<style>
body
{
	background-color: #f2f2f2;
}
</style>
</head>

</html>