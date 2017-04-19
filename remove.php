<?php
include 'include/session.php';
echo "<body background='./css/template.jpg'></body>";
   function availability($type,$a,$conn)
   {       
              $sql = "SELECT * FROM customersb WHERE type= '$type' AND acno = '$a' ";
            if( ($conn->query($sql))->num_rows > 0 ) 
            {
                  return 1;
            }
            else
            {
               
               return 0;
            } 
   }

   if (isset($_POST['delete'])) 
   {                     
   		 if( $_POST['type'] === "SB" )
   		{
             
            	   if( !availability('SB',$_POST['acno'],$conn) )
                     {  echo "<a href='./customer_remove.php'>Back </a>";
                        exit("<h1>No Such Record Present In Database</h1>");
                     }
               $sqlsb = "DELETE FROM customersb WHERE type ='SB' AND acno = '$_POST[acno]' ";
   				$sql3 = "DELETE FROM nominee WHERE type ='SB' AND acno = '$_POST[acno]' ";
               $conn->query($sql3) or die("Nominee delete manually");
               $result=$conn->query($sqlsb);

   				 	if($result === TRUE)
   				 	{  echo "<br><br><br>" ;
   				 		echo "<center><h2>Account Number  <u style='color:blue'>" .$_POST['acno']."</u>  Deleted Successfully</h2></center><br>";
   				 		echo "<center><h3><b>Notice:</b>Deleted Customer Account Cannot be Retrieved</h3></center>";
 echo "<a href='customer_search.php'>Back</a>";
   				 	}
   				 	else
   				 	{
   				 		die("failed to delete");
   				 	}
               

   		}
      	    else
      	{ 
      		  $sqlca = "DELETE FROM customerca WHERE type ='CA' AND acno = '$_POST[acno]' ";
              $sql3 = "DELETE FROM nominee WHERE type ='CA' AND acno = '$_POST[acno]' ";
               $conn->query($sql3) or die("Nominee delete manually");
   				$result=$conn->query($sqlca);
   				 	if($result === TRUE)
                  {  echo "<br><br><br>" ;
                     echo "<center><h2>Account Number  <u style='color:blue'>" .$_POST['acno']."</u>  Deleted Successfully</h2></center><br>";
                     echo "<center><h3><b>Notice:</b>Deleted Customer Account Cannot be Retrieved</h3></center>";
                     echo "<a href='customer_search.php'>Back</a>";
                  }
                  else
                  {
                     die("failed to delete");
                  }
               
						 
         }       
               
   }
   else
   {
      header("location:customer_remove.php");
   }
//--------------------------------------------------------------------------------------------------------------------------------
?>