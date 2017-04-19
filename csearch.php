<?php

include 'include/session.php';
include 'detailsprint.php'; //contains important function calls
?>
<html>
<head>
   <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
<style type="text/css">
   th
   {
      background-color: #4c7ac4;
      color:white;
   }

   a:hover
   {
      color:red;
   }
   h3
   {  font-style: Times New Roman;
      font-weight: bolder;
      font-size: 29px;
      color:red;display:inline;
   }
   #s1
   {
    font-size: 20px;

   }
   #s2
   {
    font-size: 18px;
    color: #2f35d8;
   }
</style>
</head>
<body background="./css/template.jpg"><h3 class="">Search Result <span class="glyphicon glyphicon-search"></span></h3></body>


</html>

    
<!-- _______________________________________________________________________________________________________________ -->
<?php

if (isset($_POST['search'])) 
{

               if(!empty($_POST['acno']))
                   {        
                              echo "<html>" ;              
                            if( $_POST['type'] === "SB" )
                               {
                                  $sqlsb = "SELECT * FROM customersb where acno = '$_POST[acno]' " ;
                                  $result=$conn->query($sqlsb);
         
                                   if($result->num_rows > 0)
                                      {//echo "<form action='#' method='get'> ";
                                         
                                         sbdetails($result,$conn); //in form format
                                        
                                      }
                               }                          
                           else
                               { 
                                  $sqlca = "SELECT * FROM customerca where acno = '$_POST[acno]' " ;
                                  $result=$conn->query($sqlca);
                                    if($result->num_rows > 0)
                                       {
                                         cadetails($result,$conn);
               
                                       } 
                               }    
                          
                                 echo "<footer align='center'><button type='button' onclick='window.print()' class='btn btn-primary' ><span class='glyphicon glyphicon-print'></span> Print </button>
                                 <a href='./customer_update.php?acno=$_POST[acno]&type=$_POST[type]'><button type='submit' class='btn btn-info' name='update' ><span class='glyphicon glyphicon-refresh'></span>&nbsp;Update</button></a>
                                 </footer></html>";   
                                    if($result->num_rows == 0) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }
                    }
      
                

               else if(!empty($_POST['lname'])) // Search Using Names
                  {

                                 $sqlsb = "SELECT * FROM customersb WHERE L_name= '$_POST[lname]' HAVING ( F_name = '$_POST[fname]' AND M_name = '$_POST[mname]') " ;
                                 $sqlca = "SELECT * FROM customerca WHERE L_name= '$_POST[lname]' HAVING ( F_name = '$_POST[fname]' AND M_name = '$_POST[mname]') " ;
                                  $resultsb=$conn->query($sqlsb);
                                  $resultca=$conn->query($sqlca);
                                    echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>A/c No.</th>
                                                         <th>Name</th>
                                                         <th colspan='1'>Address</th>
                                                         <th>Mob.</th>
                                                         <th>TYPE</th>
                                                         <th>Balance(in &#8377;)</th>
                                                         </tr>";
                                    if($resultsb->num_rows > 0)
                                       {    

                                          searchtable($resultsb,$conn);
                  
                                       }

                                        if($resultca->num_rows > 0)
                                       {    
                                            searchtable($resultca,$conn);
                                       }
                                       echo "</table>" ;
                                        echo "</html>";   
                                    if($resultsb->num_rows == 0 && $resultca->num_rows == 0  ) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }
                  

                  }
                  else
                  {
                        $sqlsb = "SELECT * FROM customersb where Mobile= '$_POST[mobileno]' ";
                        $sqlca = "SELECT * FROM customerca where Mobile= '$_POST[mobileno]' ";
                        $resultsb=$conn->query($sqlsb);
                        $resultca=$conn->query($sqlca);
                           echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>A/c No.</th>
                                                         <th>Name</th>
                                                         <th colspan='1'>Address</th>
                                                         <th>Mob.</th>
                                                         <th>TYPE</th>
                                                         <th>Balance(in &#8377;)</th>
                                                         </tr>";
                           if($resultsb->num_rows > 0)
                                       {     
                                        searchtable($resultsb,$conn);
                                       }

                                       if($resultca->num_rows > 0)
                                       {   
                                        searchtable($resultca,$conn);
                  
                                       }
                                        echo "</table>" ;
                                        echo "</html>";   
                                    if($resultsb->num_rows == 0 && $resultca->num_rows == 0  ) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }

                  }

}
else
{

  header("refresh:0.0001;url=customer_search.php");
}
      
?>
