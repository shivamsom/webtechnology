<?php

	include 'include/session.php';

	if(isset($_POST['ok']))
	{
		

		date_default_timezone_set('Asia/Kolkata');
		$tdate= date('d-m');		//current date
		$tyear= date('Y');		   //current year

		$fp = fopen("year.txt", "r") or die("failed reading");			
					$year = fgets($fp);
					fclose($fp);

				if(	($tdate == '07-11') && ($year == $tyear) ) // $tdate must be 31-03 bcoz banks financial year
							{
								intrcredit($conn);
								$year++;
							    update_year($year);
							    echo "Interest Credited To All Savings Bank A/C. Press Close button..";
							}
					else {
						echo "Interest Already Got credited";
							}		
					

	}

function update_year($year)
{
	$fp = fopen("year.txt", "w");
		fwrite($fp, $year);
		//echo $year;//for debug...
		fclose($fp);
}

function intrcredit($conn)
{
	date_default_timezone_set('Asia/Kolkata');

	$cperiod = date('Y-m-d');
	$date = $cperiod; // for updating table...
	$cperiod = date_create($cperiod);
	
	$sql = "SELECT * FROM customersb";
	$res = $conn->query($sql);
	/*if($res == TRUE){
		echo "TRUE";
			}
			else{echo "failed";}*/
		if ($res->num_rows > 0) 
		{
			while($row = $res->fetch_assoc())
			{
				$sql2 = "SELECT last_date from intr_log where acno= '$row[acno]' ";
					$res2 = $conn->query($sql2);
				
						$row2 = $res2 -> fetch_assoc();
					$period = date_create($row2["last_date"]);

					$diff= date_diff($cperiod,$period);
				    $n = $diff->format("%a");

				    $bal = calc($n, $row["balance"]);	
				 
				 $sql3= "UPDATE customersb SET balance = '$bal' WHERE acno = '$row[acno]' ";
				 		$conn->query($sql3);   

				 $sql3 = "UPDATE intr_log SET last_date = '$date' WHERE acno = '$row[acno]' ";
				 		$conn -> query($sql3);		
			}
		}
		else
		{
			echo "failed";
		}
}

function calc($n , $p)
{
	$roi= $_POST['intr'];

	$i = $p * $n * ($roi/36500) ;
	$p = $p + $i;
	return round($p , 2);
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/fontawesome.min.css">
	<script src="./jquery/jquery-3.1.1.min.js"></script>
	<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<style>
	body
	{
		background-color: #f2f2f2;
	}
</style>
<body>
		
		<form action="" method="post">
		<div class="col-md-6">

			<label>Interest Rate:</label>
			<input type="text" name="intr" placeholder="Interest Rate" value="4"><label>%</label>
			<br>
			<button type="submit" class="btn btn-primary" name="ok">OK</button>
			<button type="button" class="btn btn-danger" onclick="cls()"> Close</button>
	
		</div>
		</form>

<script type="text/javascript">
		function cls() 
		{
			window.location.href= "about:blank";
		}

</script>

</body>
</html>