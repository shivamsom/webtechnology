<?php
include 'include/session.php';
include 'detailsprint.php'; //contains important function calls
?>

<head>
   <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/displaysb.css">
 </head>  

<style type="text/css">
   
</style>
<?php
 
 $a = $_GET['acno'];

               if(!empty($a))
                   {        
                              echo "<html>" ;              
                            
                              
                                  $sqlca = "SELECT * FROM customerca where acno = '$a' " ;
                                  $result=$conn->query($sqlca);
         
                                   if($result->num_rows > 0)
                                      {echo "<form action='customer_update.php?acno=$a&type=CA' method='post'> ";
                                         
                                        cadetails($result,$conn);
                                        
                                      }
                                      
                                      
                 }

                  echo "<footer align='center'><button type='button' onclick='window.print()' class='btn btn-primary' ><span class='glyphicon glyphicon-print'></span> Print </button>
                                 <button type='submit' name='update' class='btn btn-info'><span class='glyphicon glyphicon-refresh'></span>&nbsp;Update</button> </form>
                                 </footer></html>";   
 ?>