<?php

include 'include/session.php';
if(isset($_POST['submit']))
{


		if($_POST['type'] == 'SB')
	 {		
		$sql= "SELECT * from logs WHERE acno = $_POST[acno] HAVING (date BETWEEN '$_POST[from]' AND '$_POST[to]')";

			$res=$conn->query($sql);
			printpass($res);

     }
     elseif ($_POST['type'] == 'CA') {
     	$sql= "SELECT * from logs2 WHERE acno = $_POST[acno] HAVING (date BETWEEN '$_POST[from]' AND '$_POST[to]')";

			$res=$conn->query($sql);
			printpass($res);
     }
    
echo "<center><button type='button' class='btn btn-primary' onclick='window.print()'><span class='glyphicon glyphicon-print'></span>&nbsp;&nbsp;Print</button>&nbsp;";
echo "<a href='passbookprint.php'><button type='button' class='btn btn-info'><span class='glyphicon glyphicon-arrow-left'></span>&nbsp;&nbsp;Back</button></a></center>";
}
else
{
	header("location:passbookprint.php");
}


function printpass($res)
{
	echo "<body background='./css/template.jpg'>";
	echo "<div class='container'><br>";
	
	echo "<table class='table table-bordered table-hover'>";
		echo "<tr><th>Date</th>	
					<th>Amt.Deposit</th>
					<th>Amt.Withdrawn</th>
					<th>Balance</th>
				</tr>	";


	while($row = $res->fetch_assoc())
	{
			
		echo "<tr><td>".$row['date']."</td>";
		echo "<td>".$row['deposit']."</td>";
		echo "<td>".$row['withdraw']."</td>";
		echo "<td>".$row['balance']."</td>";
		echo "</tr>";
	}
echo "</table></div></body>";

}
?>
<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<style type="text/css">
	th
	{
		 background-color: #4c7ac4;
      color:white;
	}
td
{

	color: black;
}
</style>