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
<body background="./css/template2.jpg"><h3 class="">Search Result <span class="glyphicon glyphicon-search"></span></h3>
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
                            
                               
                                  $sqlsb = "SELECT * FROM fd where acno = '$_POST[acno]' " ;
                                  $result=$conn->query($sqlsb);
         
                                   if($result->num_rows > 0)
                                      {//echo "<form action='#' method='get'> ";
                                         
                                         depdetails($result,$conn);
                                        
                                      }
                                                        
                          
                        
                          
                                 echo "<footer style='align:center;margin-top:320px'><button type='button' onclick='window.print()' class='btn btn-primary' ><span class='glyphicon glyphicon-print'></span> Print </button>
                                 
                                 </footer></html>";   
		         }

					else if(!empty($_POST['fullname'])) // Search Using Names
                  {

                                 $sqlsb = "SELECT * FROM fd WHERE fullname = '$_POST[fullname]'" ;
                                 
                                  $resultsb=$conn->query($sqlsb);
                                  
                                    echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>FD A/c No.</th>
                                                         <th>Name</th>
                                                         <th>Opened On</th>
                                                         <th>Period</th>
                                                         <th>ROI(%)</th>
                                                         <th>Maturity Amt(in &#8377;)</th>
                                                         </tr>";
                                    if($resultsb->num_rows > 0)
                                       {    

                                          searchdeptable($resultsb,$conn);
                  
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
                        $sqlsb = "SELECT * FROM fd where mobile= '$_POST[mobileno]' ";
                        
                        $resultsb=$conn->query($sqlsb);
             
                           echo "<table class='table table-bordered table-hover'>";
                                                   echo "<tr>
                                                         <th>FD A/c No.</th>
                                                         <th>Name</th>
                                                         <th>Opened On</th>
                                                         <th>Period</th>
                                                         <th>ROI(%)</th>
                                                         <th>Maturity Amt(in &#8377;)</th>
                                                         </tr>";
                           if($resultsb->num_rows > 0)
                                       {     
                                        searchdeptable($resultsb,$conn);
                                       }

                                  
                                        echo "</table>" ;
                                        echo "</html>";   
                                    if($resultsb->num_rows == 0) 
                                       {
                                          die("<h2><center>Search Didn't Match Any Record in the Database.</center></h2>");
                                       }

                  }
 }                                     