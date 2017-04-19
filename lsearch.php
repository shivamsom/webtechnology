<?php

include 'include/session.php';
include 'detailsprint.php';


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
   .btn-danger
   {
   	float:right;
   }
</style>
</head>
<body background="./css/template4.jpg"><h3 class="">Search Result <span class="glyphicon glyphicon-search"></span></h3>
<?php

	if(isset($_SESSION['login_user']))
	{
		echo "<a href='./index1.php'><button type='button' class='btn btn-danger'><span class='fa fa-home'></span>&nbsp;Home</button></a>";
	}
	elseif (isset($_SESSION['login_user2'])) 
	{
		echo "<a href='./index2.php'><button type='button' class='btn btn-danger'><span class='fa fa-home'></span>&nbsp;Home</button></a>";
	}
	
?>

</body>
</html>
<?php

if (isset($_POST['search'])) 
{

               if(!empty($_POST['acno']))
                   {        
                              echo "<html>" ;              
                            
                               
                                  $sqlsb = "SELECT * FROM loan where acno = '$_POST[acno]' " ;
                                  $result=$conn->query($sqlsb);
         
                                   if($result->num_rows > 0)
                                      {//echo "<form action='#' method='get'> ";
                                         
                                         loandetails($result,$conn);
                                        
                                      }
                                                        
                          
                        
                          
                                 echo "<footer style='align:center;margin-top:350px'><button type='button' onclick='window.print()' class='btn btn-primary' ><span class='glyphicon glyphicon-print'></span> Print </button>
                                 
                                 </footer></html>";   
		         }

					else if(!empty($_POST['fullname'])) // Search Using Names
                  {

                                 $sqlsb = "SELECT * FROM loan WHERE fullname = '$_POST[fullname]'" ;
                                 
                                  $resultsb=$conn->query($sqlsb);
                                  
                                    echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>Loan A/c No.</th>
                                                         <th>Name</th>
                                                         <th colspan='1'>Address</th>
                                                         <th>Mob.</th>
                                                         <th>EMI</th>
                                                         <th>Loan Amt(in &#8377;)</th>
                                                         </tr>";
                                    if($resultsb->num_rows > 0)
                                       {    

                                          searchloantable($resultsb,$conn);
                  
                                       }

                                       
                                       echo "</table>" ;
                                        echo "</html>";   
                                    if($resultsb->num_rows == 0) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }
                  

                  }
                  else
                  {
                        $sqlsb = "SELECT * FROM loan where mob= '$_POST[mobileno]' ";
                        
                        $resultsb=$conn->query($sqlsb);
             
                           echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>Loan A/c No.</th>
                                                         <th>Name</th>
                                                         <th colspan='1'>Address</th>
                                                         <th>Mob.</th>
                                                         <th>EMI</th>
                                                         <th>Loan Amt(in &#8377;)</th>
                                                         </tr>";
                           if($resultsb->num_rows > 0)
                                       {     
                                        searchloantable($resultsb,$conn);
                                       }

                                  
                                        echo "</table>" ;
                                        echo "</html>";   
                                    if($resultsb->num_rows == 0) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }

                  }
 }                                     