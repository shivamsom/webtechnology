<?php

include 'include/session.php';
include 'uploadimage.php';
echo "<body background='./css/template.jpg'></body>";
		$a = $_GET['acno'];
		$type = $_GET['type'];
		if(empty($a)){header("location:customer_search.php");}
	if(isset($_POST['confirm']))
	{  

          if($type == 'SB')
	  {    

		if($_FILES['image']['type'] == 'image/jpeg')
	  	{	
	  			$image= uploadimage($_FILES['image']);
					
			$sql = "UPDATE customersb SET image_name= '$image[0]' , image_path= '$image[1]' WHERE acno = $a ";
			$conn->query($sql);
	  	}

		if($_FILES['signature']['type'] == 'image/jpeg')
		{
			$signature= uploadimage($_FILES['signature']);
			$sql = "UPDATE customersb SET pic= '$signature[0]' , pic_path= '$signature[1]' WHERE acno = $a ";
			$conn->query($sql);
		}
			
			
	    $sql= "UPDATE customersb SET L_name= '$_POST[lastname]' ,F_name= '$_POST[firstname]' , M_name= '$_POST[middlename]' , day= '$_POST[day]' , month= '$_POST[month]' , year= '$_POST[year]' ,  Addr1= '$_POST[addr1]' , Addr2= '$_POST[addr2]' ,Addr3= '$_POST[addr3]' , pin ='$_POST[pin]' , Dist= '$_POST[dist]' , state= '$_POST[state]' , Email= '$_POST[email]' , std = '$_POST[std]' , telephone = '$_POST[telephone]' , Pan= '$_POST[pan]' , Mobile = '$_POST[mob]' WHERE acno = $a ";

					if($conn->query($sql) === TRUE)
					{
						echo "<center><h1>Update Successful</h1></center>";

					}
					echo "<ul  style='font-size:30px'><li>";
							if(isset($_SESSION['login_user']))
					{ echo "<a href='./index1.php'>Home</a>"; }
				             else
				    { echo "<a href='./index2.php'>Home</a>";}         	

					echo"</li>
							<li><a href='./customer_search.php'>Customer Search</a></li>
							<li><a href='./customer_remove.php'>Delete Exist. Customer</a></li>
								</ul>";
					
	  } //type= sb

	  else
	  {
	  	if($_FILES['image']['type'] == 'image/jpeg')
	  	{	
	  			$image= uploadimage($_FILES['image']);
					
			$sql = "UPDATE customerca SET image_name= '$image[0]' , image_path= '$image[1]' WHERE acno = $a ";
			$conn->query($sql);
	  	}

		if($_FILES['signature']['type'] == 'image/jpeg')
		{
			$signature= uploadimage($_FILES['signature']);
			$sql = "UPDATE customerca SET pic= '$signature[0]' , pic_path= '$signature[1]' WHERE acno = $a ";
			$conn->query($sql);
		}
			
			
	    $sql= "UPDATE customerca SET L_name= '$_POST[lastname]' ,F_name= '$_POST[firstname]' , M_name= '$_POST[middlename]' , ms= '$_POST[ms]' , day= '$_POST[day]' , month= '$_POST[month]' , year= '$_POST[year]' ,  Addr1= '$_POST[addr1]' , Addr2= '$_POST[addr2]' ,Addr3= '$_POST[addr3]' , pin ='$_POST[pin]' , Dist= '$_POST[dist]' , state= '$_POST[state]' , Email= '$_POST[email]' , std = '$_POST[std]' , telephone = '$_POST[telephone]' , Pan= '$_POST[pan]' , Mobile = '$_POST[mob]' WHERE acno = $a ";

					if($conn->query($sql) === TRUE)
					{
						echo "<center><h1>Update Successful</h1></center>";

					}
					echo "<ul  style='font-size:30px'><li>";
							if(isset($_SESSION['login_user']))
					{ echo "<a href='./index1.php'>Home</a>"; }
				             else
				    { echo "<a href='./index2.php'>Home</a>";}         	
					
					echo "</li><li><a href='./customer_search.php'>Customer Search</a></li>
							<li><a href='./customer_remove.php'>Delete Exist. Customer</a></li>
								</ul>";


	  } //type = ca

   } //..isset(confirm)
?>
<style>
li,a
{  color:blue;
	text-decoration:none;

}
a:hover
{
	transition: 0.3s ease;
	color:red;
text-shadow: 1px 1px 2px red;
}
</style>