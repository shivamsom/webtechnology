<?php
include 'include/session.php';


   if(isset($_POST['submit']))
   {
        

        $acno = mt_rand(100,9999);
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d");

    $sql = "INSERT INTO loan (acno,open_date,title,fullname,addr1,addr2,addr3,district,pin,state,email,mob,dob,occupation,textarea,society,builtup,gov,proj,buildername,buildercontact,ownername,ownercontact,income,yr,roi,lamt,emi) values('$acno','$date','$_POST[title]','$_POST[fullname]','$_POST[addr1]','$_POST[addr2]','$_POST[addr3]','$_POST[district]','$_POST[pin]','$_POST[state]','$_POST[email]','$_POST[mob]','$_POST[dob]','$_POST[occupation]','$_POST[textarea]','$_POST[society]','$_POST[builtup]','$_POST[gov]','$_POST[proj]','$_POST[buildername]','$_POST[buildercontact]','$_POST[ownername]','$_POST[ownercontact]','$_POST[income]','$_POST[yr]','$_POST[roi]','$_POST[lamt]','$_POST[emi]')" ; 

     $res = mysqli_query($conn, $sql);
      if($res === TRUE)
      {
    echo "<div class='row-container'>";
    echo "<a href='./index2.php' style='color:red'>Home</a>";       
    echo "<br><h2 style='color:blue'><span class='glyphicon glyphicon-ok'></span>Loan Account Created Successfully</h2>";
    echo "<h3>Loan Account Number:<u style='color:red'>".$acno."</u></h3><BR>";
    echo "<h3 >Full Name:&nbsp;&nbsp;</h3> <b>".$_POST['title']." ".$_POST['fullname']."</b><br><br>";
    echo "<h3>Address:&nbsp;</h3><b>".$_POST['addr1']." ".$_POST['addr2']." ".$_POST['addr3']."</b><br><br><h3>Net Income:&nbsp;</h3><b>".$_POST['income']."</b><br><br><h3>Loan Amount:&nbsp;&nbsp;</h3><b>".$_POST['lamt']."&nbsp;&nbsp;</b><h3>Rate of Interest:</h3><b>".$_POST['roi']."</b><br><br>";
    echo "<h2>Contact Details:</h2>";
     echo "<h3>Mobile Number: </h3><b>".$_POST['mob']."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>Email : </h3><b>".$_POST['email'];
       
     }
     else
    {echo "failed to add";}
}
      

    
?>

<html>
<head>
<style> 

h3
{
    font-size: 22px;display: inline;
}
b{
color:blue;
    font-size:18px;
}
</style>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body background="./css/template4.jpg">
<script> 
function printpage()
{
window.print();
}
</script>

<br>        
<center><button type="button" class="btn btn-primary" onclick="printpage()"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;Print</button></center>
</body>
</html>



