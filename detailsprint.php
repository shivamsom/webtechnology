
<?php

$row;
          function sbdetails($result,$conn)
    {
            while($row = $result->fetch_assoc())
                      {   echo "<body background='./css/template.jpg'></body>";            
                          echo "<div class='row container'><div class='col-md-6'>";

                                           echo "<b id='s1'>Name:</b><text id='s2'>".$row["title"]." " . strtoupper($row["F_name"]) ." " .strtoupper($row["M_name"])." " .strtoupper($row["L_name"])."</text><br>"  ;
                                          echo "<b id='s1'>Date Of Birth :</b><text id='s2'>".$row["day"]." - ".$row["month"]." - ".$row["year"]."</text><br><br>";
                                        
                                           echo "<b id ='s1'>Address Line 1:</b><text id='s2'>".$row["Addr1"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 2:</b><text id='s2'>".$row["Addr2"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 3:</b><text id='s2'>".$row["Addr3"]."</text><br>";
                                           echo "<b id ='s1'>Pincode:</b><text id='s2'>".$row["pin"]."</text>";
                                            echo "&nbsp;&nbsp;&nbsp;<b id ='s1'>District:</b><text id='s2'>".$row["Dist"]."</text><br>";
                                            echo "<b id ='s1'>State:</b><text id='s2'>".$row["state"]."</text>";
                                            echo "<br><h2 class='text-danger'><u>Contact Details:</u></h2>";
                                            echo "<b id ='s1'>Mobile No:</b><text id='s2'>".$row["Mobile"]."</text><br>";
                                            echo "<b id ='s1'>Email:</b><text id='s2'>".$row["Email"]."</text><br>";
                                            echo "<b id ='s1'>Landline Number:</b><text id='s2'>".$row["std"]."-".$row["telephone"]."</text><br>";
                                            echo "<b id ='s1'>PAN No.:</b><text id='s2'>".$row["Pan"]."</text><BR>";
                                            echo "<b id ='s1'>Joint A/c:</b><text id='s2'>".$row["JT_AC"]."</text>";
                                            echo "<h2 class='text-danger'><u>Documents Available:</u></h2>";
                                            echo "<b id ='s1'>Electricity/Telephone Bill:</b><text id='s2'>".$row["bill"]."</text>"; 
                                            echo "<b id ='s1'>&nbsp;Govt.ID:</b><text id='s2'>".$row["idcard"]."</text><br>";
                                            echo "<b id ='s1'>ITO:</b><text id='s2'>".$row["ito"]."</text>"; 
                                            echo "<b id ='s1'>&nbsp;Defence Id:</b><text id='s2'>".$row["defenceid"]."</text><br>";
                                            echo "<b id ='s1'>Driving License:</b><text id='s2'>".$row["license"]."</text>&nbsp;"; 
                                            echo "<b id ='s1'>Passport :</b><text id='s2'>".$row["pass"]."</text><br>"; 
                                            echo "<b id ='s1'>Voter Card:</b><text id='s2'>".$row["vot_id"]."</text>&nbsp;"; 
                                            echo "<b id ='s1'>Any Other Doc:</b><text id='s2'>".$row["other"]."</text>"; 
                                            
                                            echo "</div>";
                                  //--------------------col-md-6------------------------------------------------        
                                           $data = $row["image_path"];
                                           echo "<div class='col-md-6'>";
                                          echo "<img alt='Image of a/c holder' src='$data' width='122px' height='145px'>";
                                       
                                        echo "<h2 class='text-danger'><u>Account Info:</u></h2>";
                                        echo "<b id='s1'>Account Number: </b>
                                        <text id='s2'><b><u>" .$row["acno"]. "</u></b></text><br>";
                                          echo "<b id='s1'>Account Type: </b>
                                        <text id='s2'>Savings Bank Account</text><br>
                                        <b id='s1'>Account Opened On :</b>
                                        <text id='s2'> ".$row["open_date"]."</text><br>";
                                          echo "<b id='s1'>Account Balance(in &#8377;) :</b>
                                          <text id='s2'> ".$row["balance"]."</text><br>";
                                          echo "<img alt='Sign of a/c holder' src='$row[pic_path]' width='190px' height='110px'>";

                                        echo "<br><h2 class='text-danger'><u><br>Joint Holder Details:</u></h2>";
                                              
                                    if (!empty($row['JT_AC'])) 
                                   {
                                          $sqljt = "SELECT * FROM joint where acno=$row[acno]";
                                          $resultjt = $conn->query($sqljt);
                                                 if($resultjt->num_rows > 0)
                                                    
                                                    {  echo "<table class='table table-bordered table-hover' ><tr>
                                                                    <th>Name</th>
                                                                    <th>Mobile</th>
                                                                    <th>PAN No.</th>
                                                                    <th>Existing A/C No.</th>
                                                                    </tr>";
                                                    while($row= $resultjt->fetch_assoc())
                                                      {
                                                    echo "<tr><td>".$row["F_Name"]." ".$row["M_Name"]." ".$row["L_Name"]."</td>
                                                              <td>".$row["mobileno"]."</td>
                                                              <td>".$row["pan"]."</td>
                                                              <td>".$row["exacno"]."</td>
                                                          </tr>"; 

                                                      }
                                                    echo "</table>";
                                                    }
                                   
                                   }                  
                                        
                                        echo "</div></div>";
                       }

    }

     function cadetails($result,$conn)
    {echo "<body background='./css/template.jpg'></body>";   
            while($row = $result->fetch_assoc())
                      {               echo "<div class='row container'><div class='col-md-6'>";

                                           echo "<b id='s1'>Name:</b><text id='s2'>".$row["title"]." " . strtoupper($row["F_name"]) ." " .strtoupper($row["M_name"])." " .strtoupper($row["L_name"])."</text><br>"  ;
                                          echo "<b id='s1'>Date Of Birth :</b><text id='s2'>".$row["day"]." - ".$row["month"]." - ".$row["year"]."</text><br><br>";
                                           echo "<b id ='s1'>M/S.:</b><text id='s2'>".$row["ms"]."</text><br>";
                                           echo "<b id ='s1'>VAT Tin:</b><text id='s2'>".$row["vat"]."</text><br>";
                                            echo "<b id ='s1'>CST Tin:</b><text id='s2'>".$row["cst"]."</text><br>";     
                                           echo "<b id ='s1'>Address Line 1:</b><text id='s2'>".$row["Addr1"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 2:</b><text id='s2'>".$row["Addr2"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 3:</b><text id='s2'>".$row["Addr3"]."</text><br>";
                                           echo "<b id ='s1'>Pincode:</b><text id='s2'>".$row["pin"]."</text>";
                                            echo "&nbsp;&nbsp;&nbsp;<b id ='s1'>District:</b><text id='s2'>".$row["Dist"]."</text><br>";
                                            echo "<b id ='s1'>State:</b><text id='s2'>".$row["state"]."</text>";
                                            echo "<br><h2 class='text-danger'><u>Contact Details:</u></h2>";
                                            echo "<b id ='s1'>Mobile No:</b><text id='s2'>".$row["Mobile"]."</text><br>";
                                            echo "<b id ='s1'>Email:</b><text id='s2'>".$row["Email"]."</text><br>";
                                            echo "<b id ='s1'>Landline Number:</b><text id='s2'>".$row["std"]."-".$row["telephone"]."</text><br>";
                                            echo "<b id ='s1'>PAN No.:</b><text id='s2'>".$row["Pan"]."</text><BR>";
                                            echo "<b id ='s1'>Joint A/c:</b><text id='s2'>".$row["JT_AC"]."</text>";
                                            echo "<h2 class='text-danger'><u>Documents Available:</u></h2>";
                                            echo "<b id ='s1'>Electricity/Telephone Bill:</b><text id='s2'>".$row["bill"]."</text>"; 
                                            echo "<b id ='s1'>&nbsp;Govt.ID:</b><text id='s2'>".$row["idcard"]."</text><br>";
                                            echo "<b id ='s1'>ITO:</b><text id='s2'>".$row["ito"]."</text>"; 
                                            echo "<b id ='s1'>&nbsp;Defence Id:</b><text id='s2'>".$row["defenceid"]."</text><br>";
                                            echo "<b id ='s1'>Driving License:</b><text id='s2'>".$row["license"]."</text>&nbsp;"; 
                                            echo "<b id ='s1'>Passport :</b><text id='s2'>".$row["pass"]."</text><br>"; 
                                            echo "<b id ='s1'>Voter Card:</b><text id='s2'>".$row["vot_id"]."</text>&nbsp;"; 
                                            echo "<b id ='s1'>Any Other Doc:</b><text id='s2'>".$row["other"]."</text>"; 
                                            
                                            echo "</div>";
                                  //--------------------col-md-6------------------------------------------------        
                                           $data = $row["image_path"];
                                           echo "<div class='col-md-6'>";
                                          echo "<img alt='Image of a/c holder' src='$data' width='122px' height='145px'>";
                                       
                                        echo "<h2 class='text-danger'><u>Account Info:</u></h2>";
                                        echo "<b id='s1'>Account Number: </b>
                                        <text id='s2'><b><u>" .$row["acno"]. "</u></b></text><br>";
                                          echo "<b id='s1'>Account Type: </b>
                                        <text id='s2'>Current Bank Account</text><br>
                                        <b id='s1'>Account Opened On :</b>
                                        <text id='s2'> ".$row["open_date"]."</text><br>";
                                          echo "<b id='s1'>Account Balance(in &#8377;) :</b>
                                          <text id='s2'> ".$row["balance"]."</text><br>";
                                        echo "<img alt='Sign of a/c holder' src='$row[pic_path]' width='180px' height='110px'>";
                                        echo "<br><h2 class='text-danger'><u><br>Joint Holder Details:</u></h2>";
                                         

                                    if (!empty($row['JT_AC'])) 
                                   {
                                          $sqljt = "SELECT * FROM joint1 where acno=$row[acno]";
                                          $resultjt = $conn->query($sqljt);
                                                 if($resultjt->num_rows > 0)
                                                    
                                                    {  echo "<table class='table table-bordered table-hover' ><tr>
                                                                    <th>Name</th>
                                                                    <th>Mobile</th>
                                                                    <th>PAN No.</th>
                                                                    <th>Existing A/C No.</th>
                                                                    </tr>";
                                                    while($row= $resultjt->fetch_assoc())
                                                      {
                                                    echo "<tr><td>".$row["F_Name"]." ".$row["M_Name"]." ".$row["L_Name"]."</td>
                                                              <td>".$row["mobileno"]."</td>
                                                              <td>".$row["pan"]."</td>
                                                              <td>".$row["exacno"]."</td>
                                                          </tr>"; 

                                                      }
                                                    echo "</table>";
                                                    }
                                                    else
                                                      {echo "false";}
                                   
                                   }                  
                                        
                                        echo "</div></div>";
                       }

    }




      function empdetails($result,$conn)
      {
                                while($row = $result->fetch_assoc())
                      {         $data = $row["image_path"];
                                        echo "<div class='row container-fluid'>
                                          <div class='col-lg-4'></div>

                                       <center>     <div class='col-lg-4'>";
                                      
                                          echo "<img alt='passport_photo' src='$data' width='122px' height='145px'>";
                                           echo "<h2 class='text-danger'><u>Employee Info:</u></h2>";
                                           echo "<b id='s1'>Name: </b><text id='s2'>" . strtoupper($row["firstname"]) ." " .strtoupper($row["middlename"])." " .strtoupper($row["lastname"])."</text><br>"  ;
                                          echo "<b id ='s1'>DESIGNATION : </b><text id='s2'>".$row["jobtitle"]."</text><br>"; 
                                            
                                          echo "<b id='s1'>Date Of Birth : </b><text id='s2'>".$row["day"]." - ".$row["month"]." - ".$row["year"]."</text><br>";
                                        echo "<b id ='s1'>Joining Date : </b><text id='s2'>".$row["startday"]."-".$row["startmonth"]."-".$row["startyear"]."</text><br>"; 
                                        echo "<b id ='s1'>Gender : </b><text id='s2'>".$row["gender"]."</text><br>";
                                            echo "<b id ='s1'>Blood Group : </b><text id='s2'>".$row["bloodgroup"]."</text>";
                                            echo "<h2 class='text-danger'><u>Contact Details:</u></h2>";
                                           echo "<b id ='s1'>Address Line 1: </b><text id='s2'>".$row["addr1"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 2: </b><text id='s2'>".$row["addr2"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 3: </b><text id='s2'>".$row["addr3"]."</text><br>";
                                           echo "<b id ='s1'>Pincode: </b><text id='s2'>".$row["pin"]."</text>";
                                            echo "&nbsp;&nbsp;&nbsp;<b id ='s1'>District: </b><text id='s2'>".$row["dist"]."</text><br>";
                                            echo "<b id ='s1'>State: </b><text id='s2'>".$row["state"]."</text><br>";
                                           
                                            echo "<b id ='s1'>Mobile No: </b><text id='s2'>".$row["mob"]."</text><br>";
                                            echo "<b id ='s1'>Email: </b><text id='s2'>".$row["email"]."</text><br>";
                                            echo "<b id ='s1'>PAN No.: </b><text id='s2'>".$row["pan"]."</text><BR>";
                                            ;
                                            echo "<b id ='s1'>Driving License: </b><text id='s2'>".$row["drive"]."</text><br>&nbsp;"; 
                                            echo "<b id='s1'>Signature:</b><img alt='emp_sign' src='$row[sign_path]' width='185px' height='86px'>";
                                            echo "</div></center>";  
                                  //--------------------col-md-6------------------------------------------------        
                                           echo "<div class='col-lg-4'>";
                                          

                                         
                                          $x=$row['empid']; 
                      }                
                                        echo "</div></div>";
                                                  

              echo "<footer style='text-align:center'><button onclick='window.print()' class='btn btn-primary'><span class='glyphicon glyphicon-print'></span> Print</button> &nbsp;
             " ;
             echo "<a href='./emp_update.php?empid=$x'><button class='btn btn-info' ><span class='fa fa-refresh'></span> Update</button></a></footer>";
      }


        function searchtable($result,$conn)
           {
               
                       

                                                 while($row = $result->fetch_assoc())
                                           { 
                                                    if($row['type'] == 'SB')
                                                {echo "<tr><td><a href='displaysb.php?acno=$row[acno]'>".$row["acno"]."</a></td>";}
                                                  else
                                                {echo "<tr><td><a href='displayca.php?acno=$row[acno]'>".$row["acno"]."</a></td>";}


                                                echo"<td>".$row["F_name"]." ".$row["M_name"]." ".$row["L_name"]."</td>";
                                                echo "   <td>".$row["Addr1"]." ".$row["Addr2"]." ".$row["Addr3"]."</td>";
                                                echo "   <td>".$row["Mobile"]."</td>";
                                                echo "   <td>".$row["type"]."</td>";
                                                echo "    <td>".$row["balance"]."</td></tr>" ; 
                                           }
                                                

           }
function loandetails($result,$conn)
{
         while($row = $result->fetch_assoc())
                      {               echo "<div class='row container'><div class='col-md-6'>";

                                           echo "<b id='s1'>Name:</b><text id='s2'>".$row["title"]." ".strtoupper($row["fullname"])."</text><br>";
                                          echo "<b id='s1'>Date Of Birth :</b><text id='s2'>".$row["dob"]."</text><br><br>";
                                        
                                           echo "<b id ='s1'>Address Line 1:</b><text id='s2'>".$row["addr1"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 2:</b><text id='s2'>".$row["addr2"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 3:</b><text id='s2'>".$row["addr3"]."</text><br>";
                                           echo "<b id ='s1'>Pincode:</b><text id='s2'>".$row["pin"]."</text>";
                                            echo "&nbsp;&nbsp;&nbsp;<b id ='s1'>District:</b><text id='s2'>".$row["district"]."</text><br>";
                                            echo "<b id ='s1'>State:</b><text id='s2'>".$row["state"]."</text>";
                                            echo "<br><h2 class='text-danger'><u>Contact Details:</u></h2>";
                                            echo "<b id ='s1'>Mobile No:</b><text id='s2'>".$row["mob"]."</text><br>";
                                            echo "<b id ='s1'>Email:</b><text id='s2'>".$row["email"]."</text><br>";
                                           echo "<b id ='s1'>Property Addr:</b><br><textarea id='s2' style='height:100px' disabled>".$row["textarea"]."</textarea><br>";
                                           echo "<b id ='s1'>Property Type:</b><text id='s2'>".$row["proj"]."</text><br>";
                                        echo "<b id ='s1'>Builder Name:</b><text id='s2'>".$row["buildername"]."</text><br>";
                                        echo "<b id ='s1'>Builder Contact:</b><text id='s2'>".$row["buildercontact"]."</text><br>";   
                                       echo "<b id ='s1'>Owner Name:</b><text id='s2'>".$row["ownername"]."</text><br>";
                                       echo "<b id ='s1'>Owner Contact:</b><text id='s2'>".$row["ownercontact"]."</text><br>";   
                                            echo "</div>";
                                  //--------------------col-md-6------------------------------------------------        
                                           
                                           echo "<div class='col-md-6'>";
                                          
                                       
                                        echo "<h2 class='text-danger'><u>Account Info:</u></h2>";
                                        echo "<b id='s1'>Account Number: </b>
                                        <text id='s2'><b><u>" .$row["acno"]. "</u></b></text><br>";
                                          echo "<b id='s1'>Account Type: </b>
                                        <text id='s2'>Home Loan Account</text><br>
                                        <b id='s1'>Account Opened On :</b>
                                        <text id='s2'> ".$row["open_date"]."</text><br>";
                                          echo "<b id='s1'>Loan Amount(in &#8377;) :</b>
                                          <text id='s2'> ".$row["lamt"]."</text><br>";
                                          echo "<b id='s1'>EMI(in &#8377;) :</b>
                                          <text id='s2'> ".$row["emi"]."</text><br>";
              
                      }
}
 function searchloantable($result,$conn)
           {
               
                       

                                                 while($row = $result->fetch_assoc())
                                           { 
                                                    
                                              echo "<tr><td><a href='displayloan.php?acno=$row[acno]'>".$row["acno"]."</a></td>";
                                                 
                                                echo"<td>".$row["fullname"]."</td>";
                                                echo "   <td>".$row["addr1"]." ".$row["addr2"]." ".$row["addr3"]."</td>";
                                                echo "   <td>".$row["mob"]."</td>";
                                                echo "   <td>".$row["emi"]."</td>";
                                                echo "    <td>".$row["lamt"]."</td></tr>" ; 
                                           }
                                                

           }

function depdetails($result,$conn)
{
         while($row = $result->fetch_assoc())
                      {               echo "<div class='row container'><div class='col-md-6'>";

                                           echo "<b id='s1'>Name:</b><text id='s2'>".strtoupper($row["fullname"])."</text><br>";
                                         
                                        
                                           echo "<b id ='s1'>Address Line 1:</b><text id='s2'>".$row["Addr1"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 2:</b><text id='s2'>".$row["Addr2"]."</text><br>";
                                           echo "<b id ='s1'>Address Line 3:</b><text id='s2'>".$row["Addr3"]."</text><br>";
                                           echo "<b id ='s1'>Pincode:</b><text id='s2'>".$row["pin"]."</text>";
                                            echo "&nbsp;&nbsp;&nbsp;<b id ='s1'>District:</b><text id='s2'>".$row["district"]."</text><br>";
                                            echo "<b id ='s1'>State:</b><text id='s2'>".$row["state"]."</text>";
                                            echo "<br><h2 class='text-danger'><u>Contact Details:</u></h2>";
                                            echo "<b id ='s1'>Mobile No:</b><text id='s2'>".$row["mobile"]."</text><br>";
                                             echo "<b id ='s1'>Landline:</b><text id='s2'>".$row["std"]."-".$row["landline"]."</text><br>";
                                            echo "<b id ='s1'>Email:</b><text id='s2'>".$row["email"]."</text><br>";
                                            echo "<b id ='s1'>Nominee:</b><text id='s2'>".$row["nominee"]."</text><br>";
                                            echo "</div>";
                                  //--------------------col-md-6------------------------------------------------        
                                           
                                           echo "<div class='col-md-6'>";
                                          
                                       
                                        echo "<h2 class='text-danger'><u>Account Info:</u></h2>";
                                        echo "<b id='s1'>Account Number: </b>
                                        <text id='s2'><b><u>" .$row["acno"]. "</u></b></text><br>";
                                          echo "<b id='s1'>Account Type: </b>
                                        <text id='s2'>Fixed Deposit</text><br>
                                        <b id='s1'>Account Opened On :</b>
                                        <text id='s2'> ".$row["date"]."</text><br>";
                                          echo "<b id='s1'>Deposit Amount(in &#8377;) :</b>
                                          <text id='s2'> ".$row["amount"]."</text><br>";
                                          echo "<b id='s1'>Period(in Year(s)) :</b>
                                          <text id='s2'> ".$row["year"]."</text><br>";
                                      echo "<b id='s1'>R.O.I(in %) :</b>
                                          <text id='s2'> ".$row["roi"]."</text><br>";                                
                                          echo "<b id='s1'>Maturity(in &#8377;) :</b>
                                          <text id='s2'> ".$row["mat_amt"]."</text><br>";
              
                      }
}
 function searchdeptable($result,$conn)
           {
               
                       

                                                 while($row = $result->fetch_assoc())
                                           { 
                                                    
                                              echo "<tr><td><a href='displaydep.php?acno=$row[acno]'>".$row["acno"]."</a></td>";
                                                 
                                                echo"<td>".$row["fullname"]."</td>";
                                                echo "   <td>".$row["date"]."</td>";
                                                echo "   <td>".$row["year"]."</td>";
                                                echo "   <td>".$row["roi"]."</td>";
                                                echo "   <td>".$row["mat_amt"]."</td></tr>";
                                                 
                                           }
                                                

           }           

?>
<link rel="stylesheet" type="text/css" href="./font-awesome-4.6.3/css/font-awesome.min.css">