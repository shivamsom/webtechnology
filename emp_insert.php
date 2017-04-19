<?php

include 'include/session.php';
include 'uploadimage.php';

    if( isset($_POST['submit'])  )
    {
      
            $GLOBALS['id'] = $_POST['empid']; 
            $passport = uploadimage($_FILES['image']);
            $signature= uploadimage($_FILES['signature']);

    $sql = "INSERT INTO employee values('$_POST[empid]','$passport[0]','$passport[1]','$_POST[lastname]','$_POST[firstname]','$_POST[middlename]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[gender]','$_POST[bloodgroup]','$_POST[addr1]','$_POST[addr2]','$_POST[addr3]','$_POST[pin]','$_POST[dist]','$_POST[state]','$_POST[mob]','$_POST[email]','$_POST[pan]','$_POST[drive]','$_POST[startday]','$_POST[startmonth]','$_POST[startyear]','$_POST[jobtitle]','$signature[0]','$signature[1]')" ; 


    $r = $conn->query($sql);
          if(($r === TRUE)  )
      {    
        echo "<div class='row-container'>";
         echo "<a href='./index1.php'>Home</a>";
        echo "<h3 class='text-primary'>Successfully Inserted Employee Information </h3>";
        
            echo "<form action='' method='post'>";
                echo "EMPID : &nbsp;<input type='text' name='uid' value= '$id'><br>";
                
                echo "Username:<input type='text' name='username'><br>";
                echo "Password:&nbsp;<input type='password' name='password'>";
                echo "Confirm Password:<input type='password' name='cpass'><br>";
                echo "Fullname : <input type='text' name='fullname'><br>";
               

                echo "<button type='submit' name='confirm' class='btn btn-primary'>Confirm</button>";
              echo "</form>";
      }       
   else
    {echo "failed to add";}
}
else
{
    header("newemp.php");
}
?>
<?php
  if (isset($_POST['confirm']) && ($_POST['password'] == $_POST['cpass']) ) 
  {   
        $sql = "SELECT * FROM login2 WHERE username = '$_POST[username]' AND password = '$_POST[password]' ";
            
        $sql2= " INSERT into login2 values ('$_POST[uid]' , '$_POST[username]' , '$_POST[password]' , '$_POST[fullname]') ";
   
        if($conn->query($sql2) == TRUE)
        {
          echo "Successfully Created...Refreshing in 3s";
          header("refresh:3;URL=index1.php");
        }
        else
        {
          echo "<br>failed Refreshing in 3s.. ";
           header("refresh:3;URL=index1.php");
        }

      
        

  }
  
?>
<html>
<head>
<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<style>
h3
{
  font-weight:bold;
  text-align: center;
}
</style>
</head>
<body background="./css/template.jpg"></body>
</html>