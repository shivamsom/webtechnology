<?php
include 'include/session.php';
include 'uploadimage.php';
include 'jt_sign_upload.php';

	if(isset($_POST['submit']))
{
	$acno = mt_rand(1,999999);
	date_default_timezone_set('Asia/Kolkata');
	$date= date('Y-m-d');
	$datecr = date_create("$date");
	$open = $datecr;
	 $sign = uploadimage($_FILES['sign']);	
    
	


			
		
		$sql = "INSERT INTO fd values('$acno','$_POST[acno]','$_POST[type]','$date','$_POST[princ_amt]','$_POST[fyear]','$_POST[roi]','$_POST[maturity_amt]','$_POST[fullname]',default,'$_POST[pan]','$_POST[Addr1]','$_POST[Addr2]','$_POST[Addr3]','$_POST[pin]','$_POST[district]','$_POST[state]','$_POST[std]',$_POST[landline],'$_POST[mobile]','$_POST[email]',default,'$sign[0]','$sign[1]')";
		$conn->query($sql);		
				$x =(int) $_POST['fyear'];


				date_add($datecr,date_interval_create_from_date_string("$x years"));
						
							if(isset($_POST['jt_ac']))
							{
									$sql = "UPDATE fd SET jt_ac = '$_POST[jt_ac]' WHERE acno = '$acno' ";
									$conn->query($sql);
									joint($conn,$acno);
							}
							if(isset($_POST['nom']))
							{
									$sql = "UPDATE fd SET nominee = '$_POST[nom]' WHERE acno = '$acno' ";
									$conn->query($sql);
									nom($conn,$acno);
							}
		


		echo "<h3>Acknowledgement Receipt</h3>";
		echo "<b>Deposit Number:</b><b>".$acno."</b><br>";
		echo "<b>Deposit Type:</b>FD<br>";
		echo "<b>Depositor Name:</b>".$_POST['fullname']."<br>";
		echo "<b>Mobile:</b>".$_POST['mobile']."<br><br>";
		
	
		
		echo "<table class='table table-bordered'>
		<tr>
		<th>Open Date</th>
		<th>Maturity Date</th>
		<th>ROI(%)</th>
		<th>Maturity Value(Rs.)</th>
		</tr>";
		echo "<tr><td>".$date."</td><td>".date_format($datecr,"Y-m-d")."</td><td>".$_POST['roi']."</td><td>".$_POST['maturity_amt']."</td></tr>";
		echo "</table><button class='btn btn-primary' onclick='window.print()'><span class='glyphicon glyphicon-print'></span> Print</button>
		<a href='index2.php'><button class='btn btn-danger'><span class='glyphicon glyphicon-home'></span> Home</button></a>";

}

else {
	header("location:deposit.php");
}

function joint($conn,$acno)
{
		if(isset($_POST['app1lname']))
	{		$sign1 = signupload($conn,$_FILES['sign1']);
	$sql = "INSERT INTO jointd values ('$acno','$_POST[app1lname]','$_POST[app1fname]','$_POST[app1mname]','$_POST[app1acno]','$_POST[app1type]','$sign1[0]','$sign1[1]') ";
	$conn->query($sql);
	
	}
	if(isset($_POST['app2lname']))
	{		$sign2 = signupload($conn,$_FILES['sign2']);
	$sql = "INSERT INTO jointd values ('$acno','$_POST[app2lname]','$_POST[app2fname]','$_POST[app2mname]','$_POST[app2acno]','$_POST[app2type]','$sign2[0]','$sign2[1]') ";
	$conn->query($sql);
	
	}
	if(isset($_POST['app3lname']))
	{		$sign3 = signupload($conn,$_FILES['sign3']);
	$sql = "INSERT INTO jointd values ('$acno','$_POST[app3lname]','$_POST[app3fname]','$_POST[app3mname]','$_POST[app3acno]','$_POST[app3type]','$sign3[0]','$sign3[1]') ";
	$conn->query($sql);
	
	}
}

function nom($conn,$acno)
{

	$sql = "INSERT INTO nominee values('$acno','FD','$_POST[n_name]','$_POST[n_age]','$_POST[relationship]')";
	$conn->query($sql);
}

?>
<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">