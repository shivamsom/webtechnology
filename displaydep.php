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
 echo "<body background='./css/template2.jpg'></body>";
 $a = $_GET['acno'];

               if(!empty($a))
                   {        
                              echo "<html>" ;              
                            

  if(isset($_SESSION['login_user']))
  {
    echo "<a href='./index1.php'><button type='button' class='btn btn-danger'><span class='fa fa-home'></span>&nbsp;Home</button></a>";
  }
  elseif (isset($_SESSION['login_user2'])) 
  {
    echo "<a href='./index2.php'><button type='button' class='btn btn-danger'><span class='fa fa-home'></span>&nbsp;Home</button></a>";
  }
  

                              
                                  $sqlsb = "SELECT * FROM fd where acno = '$a' " ;
                                  $result=$conn->query($sqlsb);
         
                                   if($result->num_rows > 0)
                                      {
                                         
                                        depdetails($result,$conn);
                                        
                                      }
                                      
                                      
                 }

                  echo "<footer style='align:center;margin-top:320px'><button type='button' onclick='window.print()' class='btn btn-primary' ><span class='glyphicon glyphicon-print'></span> Print </button>
                                </form>
                                 </footer></html>";   
 ?>