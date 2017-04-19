<?php
session_start();
?>

<?php
include 'connection.php';



$acno=mt_rand(10000,999999);
$date=date("Y-m-d");   
echo ""$date;			
$sql ="INSERT INTO customersb values('$acno','$_POST[title]','$_POST[lname]','$_POST[fname]','$_POST[mname]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[type]','$_POST[addr1]','$_POST[addr2]','$_POST[addr3]','$_POST[pin]','$_POST[dist]','$_POST[state]','$_POST[mobilenumber]','$_POST[email]','$_POST[std]','$_POST[telephone]','$_POST[pan]','$_POST[cbox]','$_POST[bill]','$_POST[idcard]','$_POST[ito]','$_POST[defenceid]','$_POST[license]','$_POST[pass]','$_POST[vot_id]','$_POST[pan_id]','$_POST[oth]','$_POST[pic]')";
  
     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>