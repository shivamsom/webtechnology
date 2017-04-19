<?php
include 'include/session.php';

$a = $_GET['t'];

switch($a)
{

	case 'sb' :	$sql = "SELECT count(*)'TOT' from customersb";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc(); 
			    echo "<h4>Total No.of Savings Accounts present til today=<b style='color:blue'>".$row['TOT']." Account(s)</b></h4>";
			    $sql = "SELECT sum(ROUND(balance,3))'BAL' from customersb";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc();
    		    echo "<h4>Total Balance in all Savings Accounts(Rs.)=<b style='color:blue'>".$row['BAL']." </b></h4>";
			    break;
	case 'ca' :	$sql = "SELECT count(*)'TOT' from customerca";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc(); 
			    echo "<h4>Total No.of Current Accounts Opened til today=<b style='color:blue'>".$row['TOT']." Account(s)</b></h4>";
			    $sql = "SELECT sum(ROUND(balance,3))'BAL' from customerca";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc();
    		    echo "<h4>Total Balance in all Current Accounts(Rs.)=<b style='color:blue'>".$row['BAL']." </b></h4>";
			    break;
	case 'emp' :	$sql = "SELECT count(*)'TOT' from employee";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc(); 
			    echo "<h4>Total No.of Employees Working = <b style='color:blue'>".$row['TOT']."</b></h4>";
			    echo "<a href='esearch.php' target='_SELF'>Display All Employees</a>";	    
			    	    break;
	case 'l' :	$sql = "SELECT count(*)'TOT' from loan";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc(); 
			    echo "<h4>Total No.of Loan Accounts = <b style='color:blue'>".$row['TOT']."</b></h4>";
			    $sql = "SELECT sum(ROUND(lamt,3))'BAL' from loan";
			    $res = $conn->query($sql);
    		    $row = $res->fetch_assoc();
    		    echo "<h4>Total Amount Taken As Loan(Rs.)=<b style='color:blue'>".$row['BAL']." </b></h4>";	    break;		    	    

 }
 
 ?>