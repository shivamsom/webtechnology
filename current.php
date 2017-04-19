
<?php
include 'include/session.php';
include 'jt_sign_upload.php';
include 'uploadimage.php';



$sql;
$acno=mt_rand(10000,999999);
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");    

        $signature= uploadimage($_FILES['pic']);
        $passport = uploadimage($_FILES['image']);

    $sql ="INSERT INTO customerca values('$acno','$passport[0]','$passport[1]','$date','$_POST[title]','$_POST[lname]','$_POST[fname]','$_POST[mname]','$_POST[ms]','$_POST[vat]','$_POST[cst]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[type]','$_POST[addr1]','$_POST[addr2]','$_POST[addr3]','$_POST[pin]','$_POST[dist]','$_POST[state]','$_POST[mobilenumber]','$_POST[email]','$_POST[std]','$_POST[telephone]','$_POST[pan]',default,default,default,default,default,default,default,default,default,default,'$signature[0]',default,'$signature[1]')";
     if ($conn->query($sql) === TRUE) 
     {
        echo "<p style='float:right'>".date("d-m-Y")."</p>";    
    echo "<br><h2 style='color:blue'><span class='glyphicon glyphicon-ok'></span>Account Created Successfully</h2>";
    echo "<h2> Account Number Generated is:<u class='text-danger'>" .$acno."</u><br> <h3 >Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3> <b>".$_POST['title']." ".$_POST['fname']." ".$_POST['lname']."</b><br><br>";
    echo "<h3>Address:&nbsp;&nbsp;&nbsp;&nbsp;</h3><b>".$_POST['addr1']." ".$_POST['addr2']. " ".$_POST['addr3']."</b><br><br><h3>Pin Code:&nbsp;&nbsp;&nbsp;</h3><b>".$_POST['pin']."</b><br><br><h3>District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><b>".$_POST['dist']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><h3>State:</h3><b>".$_POST['state']."</b><br><br>";
    echo "<h2>Contact Details--------------------------------------------------------------------------------</h2>";
       echo "<h3>Mobile Number: </h3><b>".$_POST['mobilenumber']."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>Email : </h3><b>".$_POST['email'];
       echo "</b><br><br><h3>PAN No.: </h3><b>".$_POST['pan']."</b>";
     }
    else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
          if(isset($_POST['cbox']))
         {
            $sql="UPDATE customerca SET JT_AC='$_POST[cbox]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['bill']))
         {
            $sql="UPDATE customerca SET bill='$_POST[bill]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['idcard']))
         {
            $sql="UPDATE customerca SET idcard='$_POST[idcard]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['ito']))
         {
            $sql="UPDATE customerca SET ito='$_POST[ito]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['defenceid']))
         {
            $sql="UPDATE customerca SET defenceid='$_POST[defenceid]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['license']))
         {
            $sql="UPDATE customerca SET license='$_POST[license]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['pass']))
         {
            $sql="UPDATE customerca SET pass='$_POST[pass]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
          if(isset($_POST['vot_id']))
         {
            $sql="UPDATE customerca SET vot_id='$_POST[vot_id]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
           if(isset($_POST['pan_id']))
         {
            $sql="UPDATE customerca SET pan_id='$_POST[pan_id]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
          if(isset($_POST['oth']))
         {
            $sql="UPDATE customerca SET other='$_POST[other]' where acno= $acno ";
            $conn->query($sql)   ;          
         }
/*---------------------------------DON'T CHANGE ANYTHING ABOVE THIS LINE-----------------------------*/
        if(isset($_POST['a1box']))
        {   $s = signupload($conn,$_FILES['sign1']);

            $sqls = "INSERT INTO joint1 values('$acno','$s[0]','$s[1]', '$_POST[app1lname]' , '$_POST[app1fname]', '$_POST[app1mname]' , '$_POST[app1gen]' , '$_POST[app1day]' , '$_POST[app1month]' , '$_POST[app1year]' , '$_POST[app1pan]' ,'$_POST[app1mobno]' , '$_POST[app1email]' , '$_POST[app1exid]')";
            $conn->query($sqls);  
              
        }   


         if(isset($_POST['a2box']))
        { $s = signupload($conn,$_FILES['sign2']);

            $sqls = "INSERT INTO joint1 values('$acno' ,'$s[0]','$s[1]', '$_POST[app2lname]' , '$_POST[app2fname]', '$_POST[app2mname]' , '$_POST[app2gen]' , '$_POST[app2day]' , '$_POST[app2month]' , '$_POST[app2year]' , '$_POST[app2pan]' ,'$_POST[app2mobno]' , '$_POST[app2email]' , '$_POST[app2exid]')";
            $conn->query($sqls)   ; 
        }   
            

         if(isset($_POST['a3box']))
         {
            $s = signupload($conn,$_FILES['sign3']);

             $sqls = "INSERT INTO joint1 values('$acno' ,'$s[0]','$s[1]', '$_POST[app3lname]' , '$_POST[app3fname]', '$_POST[app3mname]' , '$_POST[app3gen]' , '$_POST[app3day]' , '$_POST[app3month]' , '$_POST[app3year]' , '$_POST[app3pan]' ,'$_POST[app3mobno]' , '$_POST[app3email]' , '$_POST[app3exid]')";
            $conn->query($sqls)   ; 


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
<body background="./css/template.jpg">
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