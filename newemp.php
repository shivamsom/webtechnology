<?php
include 'include/session.php';

if(isset($_SESSION['login_user2']))
  {
      echo "<body background='./css/template.jpg'></body>";
      echo "<h1 style='color:red;text-align:center'>Warning!!!!</h1><center><h1>Restricted Access To The User</h1></center>";
      echo "<center><h3>You Will be redirected in about 3 s...</h3></center>";
      header("refresh:3;url=index2.php");
      exit();
  }

?>
<!doctype html>
<html>
<header><a href="index1.php">Home</a></header>
<head><b>NEW EMPLOYEE REGISTRATION</b><font color="red"><i>(To be filled by Manager only)<i></font>


<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/clearform.js"></script>
<script src="./js/preview.js"></script>

</head>
<style>
pre
{display:inline}
   #s1{color:blue; 
 
        }
p
{ float:left;
  color:blue;
font-size:117%; 
}
#s2
{ color:blue;
 display:inline;
}
input
{
font-weight:bold;
text-transform:uppercase;
}

</style>

<body background="./css/template.jpg">

       <form action="emp_insert.php" method="post" enctype="multipart/form-data">

 <img  alt="upload_image click on choose file " id="passport" style="width:128px;height: 128px;float:right;margin-top:-45px;margin-right:150px">
    
    <h3 id="s1">Assign new Employee ID:<input type="text" size="2" name="empid"></h3>
    
    <h3 id="s1">Name:<i style="color:red">(in block letters only)</i></h3>
    
    <b>Last Name :</b><input type="text" size="20" name="lastname" required>
    
    <b>First Name :</b><input type="text" size="20" name="firstname" required>
    
    <b>Middle Name :</b><input type="text" size="20" name="middlename" required> 

<input type="file" accept="image/*" name="image" style="float:right;margin-right: -240px;" onchange="loadFile(event)" required>

<br><br>

<h3 id="s1" style="display:inline" > Date of Birth:</h3>

<br><br>

<b>Day:</b>

<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<b>Month:</b><select name="month">
                           <option value="JANUARY">Jan(01)</option>
	       <option value="FEBRUARY">Feb      (02)</option>
	       <option value="MARCH">Mar      (03)</option>
                          <option value="APRIL">Apr     (04)</option>
                           <option value="MAY">May      (05)</option>
	    <option value="JUNE">Jun      (06)</option>
                      <option value="JULY">Jul      (07)</option>
                        <option value="AUGUST">Aug      (08)</option>
                     <option value="SEPTEMBER">Sept       (09)</option>
                      <option value="OCTOBER">Oct      (10)</option>
                   <option value="NOVEMBER">Nov      (11)</option>
                   <option value="DECEMBER">Dec      (12)</option>
     </select>

<b>Year :</b></text><input type="number" size="4" name="year" maxlength="4" min="1930" max="2003" required>

<br><br>

<h3 id="s2" style="display:inline">Gender:</h3>                                                

      <input type="radio" name="gender" value="M"><b>Male</b>
      <input type="radio" name="gender" value="F"><b>Female</b>             <h3 id="s1" style="display:inline"><pre >              Blood Group:</pre></h3>
      <select name="bloodgroup">
                <option value="A+">A+</option>          
                <option value="A-">A-</option>      
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
     </select>

<br>

<br>

<h3 id="s2">Address Line 1:</h3>

<input type="text" size="100" name="addr1" maxlength="50"required>

<br>

<i><pre class="tab" style="font-family:Times New Roman;color:red;">					(Flat No.,Residential Name, Landmark,etc)</pre></i>

<br>

<h3 id="s2">Address Line 2:</h3>

<input type="text" size="100" name="addr2" maxlength="50"required>

<br>

<i><pre class="tab" style="font-family:Times New Roman;color:red;">					(Local Area Name,Street Name,etc)</pre></i>

<br>

<h3 id="s2">Address Line 3:</h3>

<input type="text" size="25" name="addr3" maxlength="25" required>

<br>

<i><pre class="tab" style="font-family:Times New Roman;color:red;">					            (City)</pre></i>

<br>

<h3 id="s2" >Pin Code:</h3><pre class="tab" > 	 </pre>

<input type="number" size="7" maxlength="6" name="pin" required>

<h3 id="s2" >District:</h3>

<input type="text" size="15" name="dist" required>

<h3 id="s2">State:</h3>



<select name="state">

       <option value="AP"> 
        Andra Pradesh</option>
        <option value="ARP">
        Arunachal Pradesh</option>
        <option value="ASS">
        Assam</option>
        <option value="BR">
        Bihar</option>
        <option value="CH">
        Chhattisgarh</option>
         <option value="GOA">
        Goa</option>
       <option value="GUJ">
        Gujarat</option>
       < option value="HAR">
        Haryana</option>
       < option value="HP">
        Himachal Pradesh</option>
       < option value="JK">
        Jammu and Kashmir</option>
        <option value="JH">
        Jharkhand</option>
       < option value="KAR">
        Karnataka</option>

      < option value="KR">
        Kerala</option>
         <option value="MP">
        Madya Pradesh</option>
       <option value="MAH">
        Maharashtra</option>
       < option value="MAN">
        Manipur</option>
        <option value="MEGH">
        Meghalaya</option>
        <option value="MIZ">
        Mizoram</option>
        <option value="NAG">
        Nagaland</option>
        <option value="OR">
        Orissa</option>
         <option value="PUNJ">
        Punjab</option>
       <option value="RAJ">
        Rajasthan</option>
        <option value="SIK">
        Sikkim</option>
        <option value="TN">
        Tamil Nadu</option>
        <option value="TRI">
        Tripura</option>
       < option value="UTTR">
        Uttaranchal</option>
        <option value="UP">
        Uttar Pradesh</option>
        <option value="WB">
        West Bengal

</option>

</select>

<br><br>

   <h3 id="s2">Mobile No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="mob" size="15" maxlength="10" required></h3><h3 id="s2"><pre class="tab">    </pre>E-mail :&nbsp;<input type="text" size="29" name="email" style="text-transform:none"> <h3 id="s2" style="display:inline"><br><br>
PAN  No. :<pre class="tab" style="">     </pre><input type="text" name="pan" size="15" maxlength="10" ></pre></h3> <h3 id="s2" style="display:inline"><pre class="tab" style="">       </pre>Driving License:<input type="text" name="drive" size="15" maxlength="10"></h3>  
<br><br>
<h3 id="s1" style="display:inline" >Start Date:</h3>
<br><br>
<b>Day:</b>
<select name="startday">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<b>Month: </b><select name="startmonth">
                           <option value="JANUARY">Jan(01)</option>
	       <option value="FEBRUARY">Feb      (02)</option>
	       <option value="MARCH">Mar      (03)</option>
                          <option value="APRIL">Apr     (04)</option>
                           <option value="MAY">May      (05)</option>
	    <option value="JUNE">Jun      (06)</option>
                      <option value="JULY">Jul      (07)</option>
                        <option value="AUGUST">Aug      (08)</option>
                     <option value="SEPTEMBER">Sept       (09)</option>
                      <option value="OCTOBER">Oct      (10)</option>
                   <option value="NOVEMBER">Nov      (11)</option>
                   <option value="DECEMBER">Dec      (12)</option>
     </select>
<b>Year :</b><input type="number" size="4" name="startyear" maxlength="4"  required><br><br>
<h3 id="s1" style="display:inline">Job Title:</h3><input type="text" size="20" name="jobtitle" id="i1" required><br>
<img alt="upload_signature" id="sig" style="width:185px ;height:96px">
<input type="file" accept="image/*" name="signature"  onchange = "upload_sign(event) " required>
<center><button type="submit" name="submit">SUBMIT</button></center>
</form>
</body>
</html>