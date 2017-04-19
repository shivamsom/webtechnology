<?php
   include 'include/session.php';
  
  if(isset($_POST['submit']))
    {
            if($_POST['type'] == 'SB')
                {
                    $sql = "SELECT * FROM customersb WHERE acno  = '$_POST[acno]' AND L_name= '$_POST[lastname]' AND F_name = '$_POST[firstname]' AND M_name = '$_POST[middlename]' ";
                     $res = $conn->query($sql);
                     if($res -> num_rows == 1)
                        {
                          $row = $res->fetch_assoc();
                          if($row["balance"] <= 0 || ($row["balance"]-$_POST['amount']) < 0)
                          {
                            echo "<script>alert('The A/C No.$row[acno] Having INSUFFICIENT Balance.')</script>";
                          }
                          else
                          {
                            $sql ="UPDATE customersb SET balance = $row[balance] - $_POST[amount] WHERE acno=$_POST[acno]";
                                  $b= $row['balance'] - $_POST['amount']; //for the logs... 
                              if($conn->query($sql) == TRUE)
                                {
                                  echo "<h3>Transaction Success</h3>";
                                   $sql = "INSERT INTO logs values('$_POST[acno]' , '$_POST[date]' , default , '$_POST[amount]' , '$b')";
                                   $conn->query($sql);
                                }

                          }
                        }
                        else 
                        {  
                          echo "<div class='row'><div class='col-md-4'></div><div class='col-md-4'><b><center>No Such Account Number in the Database</center></b></div>";
                        }
                       
                }
                elseif($_POST['type'] == 'CA')
                {
                     $sqlca = "SELECT * FROM customerca WHERE acno  = '$_POST[acno]' AND L_name= '$_POST[lastname]' AND F_name = '$_POST[firstname]' AND M_name = '$_POST[middlename]' ";
                     $res = $conn->query($sqlca);
                     if($res -> num_rows == 1)
                        {
                          $row = $res->fetch_assoc();
                          if($row["balance"] <= 0 || ($row["balance"]-$_POST['amount']) < 0)
                          {
                            echo "<script>alert('The A/C No.$row[acno] Having INSUFFICIENT Balance.')</script>";
                          }
                          else
                          {
                            $sqlca ="UPDATE customerca SET balance = $row[balance] - $_POST[amount] WHERE acno=$_POST[acno]";
                                $b = $row['balance'] - $_POST['amount'];
                              if($conn->query($sqlca) == TRUE)
                                {echo "<h3>Transaction Success</h3>";
                                  $sql = "INSERT INTO logs2 values('$_POST[acno]' , '$_POST[date]' , default , '$_POST[amount]' , '$b')";
                                   $conn->query($sql);
                                 }

                          }
                        }
                        else 
                        {  
                          echo "<div class='row'><div class='col-md-4'></div>
                          <div class='col-md-4'><b><center>No Such Account Number in the Database</center></b></div>";
                        } 
                }
                //else{for RD IN FUTURE..}
                echo "<div class='col-md-4' style='float:right'><a href='withdrawal.php' style='float:right'><button type='button' class='btn btn-danger'>New Entry</button></a>
<a href='passbookprint.php' style='float:right'><button type='button' class='btn btn-primary'>Passbook Print</button></a>
                </div></div>";
    }

?>




<!doctype html>

<html lang="en">
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<head>
	<title>WITHDRAWAL </title>
</head>
<style>
input
{text-transform:uppercase;	}
</style>
<body background="./css/template.jpg">
<div class="container-fluid">
<div class="row">
  <?php

      if(isset($_SESSION['login_user']))
  {
    echo "<a href='index1.php'><button class='btn btn-danger'><span class='fa fa-home'>&nbsp;Home</span></button></a>";
  }
  elseif (isset($_SESSION['login_user2'])) 
  {
    echo "<a href='index2.php'><button class='btn btn-danger'><span class='fa fa-home'>&nbsp;Home</span></button></a>";;
  }

  ?>
</div>
  <form action= "" method="post">
  <div class="row form-inline">
     <div class="col-md-10"></div>
      <div class="col-md-2"></div>
  </div>
<div class="row">
      <div class="col-md-2 "><!--intentionally left blank--></div>
      <div class="col-md-2 "><!--FOR LOGO use class="img-respnsive and thumbnail"--></div>
      <div class="col-md-8 "><h1><font color="red"><i><u>Bank Name</u></i></font></h1></div>

</div>
<div class="row">
   <div class="col-md-3">
    <select name='type' class='form-control'><option value='SB'>SAVINGS BANK</option><option value='CA'>CURRENT ACCOUNT</option></select>
   </div>
   <div class="col-md-7"></div>
   <div class="col-md-2"></div>
</div>
<div class="row form-inline">
   <div class="col-md-6"></div>
   
   <div class="col-md-6">
      <div class="form-group">
        <p class="text-primary"><font size=3><label for="account">Account No.:</label></font>
        <input type="text" class="form-control" id="account" placeholder="Enter Account no." size="30" name="acno"></p>
      </div>
   </div>

<div class="row">
   <div class="col-md-6">
     
     &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="40" id="branch" placeholder="Enter Bank Branch" class="form-control">
   </div>
   <div class="col-md-6">
    <b><p style="display:inline;font-weight:bold;font-size:16px" class="text-primary">Date:</p></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" class="form-control" id="date" name="date" required>	
    
    
 
   </div>
</div>
<div class="row">
  
</div>
<div class="row form-inline">
   
   <div class="col-md-6"><p style="display:inline;font-size:16px;font-weight:bold" class="text-primary"></div>
   <div class="col-md-6">
    <p style="display:inline;font-size:16px;font-weight:bold" class="text-primary">&#8377 = <input type="number" min="100"  size="50" placeholder="Amount in Figures" class="form-control" name="amount" required>
    </div>
</div>
  

<hr>
<div class="row form-inline">
   <div class="col-md-6">
    <div class="panel panel-default">
     <div class="panel-body"><p class="text-danger">PAY IN CASH</p></div>
    </div>
   </div>
  
   <div class="col-md-6"><p class="text-primary" style="font-weight:bold;font-size:16px;display:inline">SIGNATURE: 
    </p><input type="file" id="sign" accept="image/*" style="display:inline" class="form-control" name="image">
   </div>
</div>
<div class="row form-inline">
   
   <div class="col-md-6"></div>
   <div class="col-md-6"><p class="text-info" style="display:inline;font-weight:bold;font-size:16px"><b>Name of the  Account Holder:</b></p>
   <input type="text" size="10" placeholder="Last Name" class="form-control" name="lastname" required>
   <input type="text" size="10" placeholder="First Name" class="form-control" name="firstname" required>
   <input type="text" size="10" placeholder="Middle Name" class="form-control" name="middlename" required>
   </div>

</div>
<span class="row container">
<button class="btn btn-success btn-block" type="submit" name="submit">Confirm & Submit</button>
</span>

</div>
</form>
<hr>
 
</body>
</html>