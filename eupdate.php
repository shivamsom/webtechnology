<?php

include 'include/session.php';
include 'uploadimage.php';
echo "<body background='./css/template.jpg'></body>";
		$a = $_GET['e'];
		if(empty($a)){header("location:emp_search.php");}

	if(isset($_POST['confirm']))
	{
		if($_FILES['image']['type'] == 'image/jpeg')
	  	{	
	  			$image= uploadimage($_FILES['image']);
					
			$sql = "UPDATE employee SET image_name= '$image[0]' , image_path= '$image[1]' WHERE empid = $a ";
			$conn->query($sql);
	  	}

		if($_FILES['signature']['type'] == 'image/jpeg')
		{
			$signature= uploadimage($_FILES['signature']);
			$sql = "UPDATE employee SET sign_name= '$signature[0]' , sign_path= '$signature[1]' WHERE empid = $a ";
			$conn->query($sql);
		}
			
			
	$sql= "UPDATE employee SET lastname= '$_POST[lastname]' ,firstname= '$_POST[firstname]' , middlename= '$_POST[middlename]' , jobtitle= '$_POST[jobtitle]' , day= '$_POST[day]' , month= '$_POST[month]' , year= '$_POST[year]' , startday= '$_POST[startday]' , startmonth= '$_POST[startmonth]' , startyear= '$_POST[startyear]' , addr1= '$_POST[addr1]' , addr2= '$_POST[addr2]' ,addr3= '$_POST[addr3]' , pin ='$_POST[pin]' , dist= '$_POST[dist]' , state= '$_POST[state]' , email= '$_POST[email]' , pan= '$_POST[pan]' , drive = '$_POST[drive]' , mob = '$_POST[mob]' WHERE empid = $a ";

					if($conn->query($sql) === TRUE)
					{
						echo "<center><h1>Update Successful</h1></center>";

					}
					
					
	}
	echo "<ul  style='font-size:30px'><li><a href='./index1.php'>Home</a></li>
							<li><a href='./emp_search.php'>Employee Search</a></li>
							<li><a href='./emp_remove.php'>Delete Employee</a></li>
								</ul>";

?>
<style>
li,a
{  color:blue;
	text-decoration:none;
}
a:hover
{
	text-shadow: 2px 2px 5px gray ;
	transition: 0.3s ease;
	color:red;
}
</style>