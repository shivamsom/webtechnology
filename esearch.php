<?php
	
include 'include/session.php';  
?>		
<?php
		
		
	if( isset($_POST['search']) )
   {

   		if (!empty($_POST['emp_id'])) 
   		{
   						
					$sql= "SELECT * FROM employee WHERE empid = '$_POST[emp_id]' ";
					$res = $conn->query($sql) ;
                       disp($res);
        }  

		else
		{
					$sql = "SELECT * FROM employee WHERE lastname = '$_POST[lastname]' HAVING (firstname = '$_POST[firstname]' AND middlename = '$_POST[middlename]' ) " ;
					$res = $conn->query($sql);
						disp($res);

		}
		
	
   }
   else
   {
   	$sqlall= "SELECT * FROM employee";
   	$res = $conn->query($sqlall);
   	echo "<b>Displaying All Records</b>";
   	disp($res);
   }

   //function definition
   function disp($res)
{		if($res->num_rows > 0)
		{
			echo "<br>
			<div class='container-fluid'>
			<div class='row'>
				<div class='col-sm-12'>
			<table border=1  class='table table-bordered'>
		    <tr> 
		    <th>E_ID</th>
		    <th>Name</th>

		    <th> Gender </th>

		    <th> Address </th>
		    <th> Pincode </th>
		    <th> District </th>
		    <th> State </th>
		    <th> Mobile No. </th>
		    <th> Email ID </th>
		    <th> PAN </th>
		   
		    <th> Start Date </th>
		    <th> Job Title </th>
		    </tr>";

		    while($row = mysqli_fetch_array($res))
		    { 
		    echo "<tr>";
		    echo "<td>" . $row['empid']	. "</td>";
			echo "<td><u><a href='./displayemp.php?empid=$row[empid]'></b>" . $row['firstname'] . " ".$row['middlename']." ".$row['lastname']."</a></u></td>";
			

			echo "<td>" . $row['gender'] . "</td>";

			echo "<td>" . $row['addr1'] . "," . $row['addr2'] . "," . $row['addr3'] . "</td>";
			echo "<td>" . $row['pin'] . "</td>";
			echo "<td>" . $row['dist'] . "</td>";
			echo "<td>" . $row['state'] . "</td>";
			echo "<td>" . $row['mob'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['pan'] . "</td>";
			
			echo "<td>" . $row['startday'] . "-" . $row['startmonth'] . "-" . $row['startyear'] . "</td>";
			echo "<td>" . $row['jobtitle'] . "</td>";
			}

			echo "</div></div></div></table>";	
		} 
		else
		{
			 echo "<h3 style='text-align:center;font-weight:bolder'>Result Not Found<br>Redirecting in 3s.... to Search Page</h3>";
			 header("refresh:3 ; url=emp_search.php");

		 }
}

   
?>



<html>
<head>
	<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<style type="text/css">
	table,tr,td
	{   
		border :1px solid black;
	}
	th
	{
		background-color: #4d94ff;
		color:white;
	}
	a:hover
	{font-weight: bold; 
		color: red;
	}
</style>
<body background="./css/template.jpg"></body>
</html>