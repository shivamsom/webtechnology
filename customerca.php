<!doctype html>
<html>
<head></head>
<style>
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
pre
{display:inline;}

{font-weight:bold;
}
th
{ background-color:green; color:white;}
td
{padding:4px; }
.button
{
  background-color:blue;
  color:white;
  border-color:blue;
  border-style:solid;
  border-radius:5px;
}
</style>
<body background="./css/template.jpg">
<script src="./jquery/jquery-3.1.1.min.js"></script>
<script src="./js/operativeaccount.js"></script>
<script src="./js/clearform.js"></script>

<script type="text/javascript" src="./js/preview.js"></script> <!--photo preview -->
       <form action="current.php" method="post" enctype="multipart/form-data">
 <img  alt="upload_image click on choose file " id="passport" style="width:120px;height: 140px;float:right">

<h3 id="s1">Name of Account holder:<i style="color:red">(in block letters only)</i></h3>
 <select name="title"><option value="Mr">Mr.</option>
                <option value="Mrs">Mrs.</option></select> 
<b>Last Name :</b><input type="text" size="20" name="lname" required >
<b>First Name :</b><input type="text" size="20" name="fname" required>
<b>Middle Name :</b><input type="text" size="20" name="mname" required> 
<br>
<h3 id="s1">M/s.<input type="text" name="ms" size="100"></h3>
<h3 style="display: inline;margin-right: 40px;color:blue">VAT TIN.:<input type="text" name="vat"></h3>
<h3 style="display:inline;color:blue">CST TIN.:<input type="text" name="cst"></h3>
<br><br>
<h3 id="s1" style="display:inline" > Date of Birth:</h3> <h3 style="display:inline"><pre style="display:inline" id="s1">                                 Type of Account:</pre></h3>
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
                           <option value="JANUARY">Jan      (01)</option>
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
<b>Year :</b><input type="number" size="4" name="year" maxlength="4" min="1930" max="2003" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>A/c :&nbsp;&nbsp;<select name="type">
<option value="CA">Current Account</option>
</select><input type="file" accept="image/*" name="image" style="float:right;"onchange="loadFile(event)" >
<br><br>
<h3 id="s2">Address Line 1:</h3>
<input type="text" size="100" name="addr1" maxlength="50" required>
<br>
<i><pre  style="font-family:Times New Roman;color:red;display:inline">                                      (Flat No.,Residential Name, Landmark,etc)</pre></i>
<br>
<h3 id="s2">Address Line 2:</h3>
<input type="text" size="100" name="addr2" maxlength="25" required>
<br>
<i><pre  style="font-family:Times New Roman;color:red;display:inline">                                      (Local Area Name,Street Name,etc)</pre></i>
<br>
<h3 id="s2">Address Line 3:</h3>
<input type="text" size="25" name="addr3" maxlength="25" required>
<br>
<i><pre  style="font-family:Times New Roman;color:red;display:inline">                                      (City)</pre></i>
<br>
<h3 id="s2" >Pin Code:</h3>
<input type="number" size="6" maxlength="6" name="pin" required>
<h3 id="s2" >District:</h3>
<input type="text" size="15" name="dist" required>
<h3 id="s2" >State:</h3>
<!-----------dropdown list of states (temporary )---------------------------------------------->
<select name="state">

       <option value="AP"> 
        Andra Pradesh</option>
        <option value="ARP">
        Arunachal Pradesh</option>
        <option value="ASS">
        Assam</option>
        <option value="BHR">
        Bihar</option>
        <option value="CHHT">
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
</select><hr style="border-top: dashed 2px;color:black" >
<h3 id="s1" style="display:inline"><u>Contact Details:</u></h3><br><br>
<h3 id="s2">Mobile:</h3><input type="number" size="10" name="mobilenumber" min="0" required>
<pre > </pre><h3 id="s2">Email:</h3><input  type="text" size="27" name="email" style="text-transform:none">
<h3 id="s2" > Landline:</h3><input type="text" size="3" maxlength="5" name="std">&nbsp;<h2 id="s2" style="color:black">-</h2>&nbsp;<input type="text" size="8" maxlength="8" name="telephone"><br><br><h3 id="s2">PAN /GIR no. : </h3><input type="text" size="10" maxlength="10" name="pan">
<hr style="border-top: dashed 2px;color:black" >

<p id="demo" ></p>
<font color="blue"><caption>Incase Of Joint A/c Holders:</caption></font>
<input type="checkbox" name="cbox" onclick="joint()" id="cbox" value="available">
<table border="2">
       <tr> 
  <th >Applicant's</th>
  <th >Last Name</th>
  <th >First Name</th>
  <th >Middle Name</th>
  <th>Sex</th>
  <th >Date of birth<br>
      <font color="red"><i>(dd/mm/yyyy)<i></font></th>
  <th>PAN/GIR No.<br><i><font color="red">(as per rules<br>of RBI)</font></i></th>
  
       </tr>
<!--1st applicant-->
<tr style="background-color:#ff4d4d">
  <td><input type="checkbox" name="a1box"  id="a1" class="app" onclick="enable1st()" disabled> 1'st Applicant</td>
  <td><input type="text" size="15" name="app1lname" class="app1" disabled></td>
  <td><input type="text" size="15" name="app1fname" class="app1" disabled></td>
  <td><input type="text" size="15" name="app1mname" class="app1" disabled></td>
  <td><select class="app1" name="app1gen" disabled>
    <option value="M">M</option>
    <option value="F">F</option>
          </select>
  </td>
  <td><select class="app1" name="app1day" disabled>
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
<select class="app1" name="app1month" disabled>
                           <option value="JANUARY">Jan      (01)</option>
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
<input type="number" size="4" name="app1year" maxlength="4" min="1930" max="2003" class="app1"disabled>
<td><input type="text" size="10" name="app1pan" maxlength="10" class="app1" disabled></td>
</tr>
    
     <!---2nd applicant- -->
  
  <tr style="background-color:#6666ff">  
  <td><input type="checkbox" name="a2box" class="app" id="a2" disabled  onclick="enable2nd()"> 2'nd Applicant</td>
  <td><input type="text" size="15" name="app2lname" class="app2"disabled></td>
  <td><input type="text" size="15" name="app2fname" class="app2"disabled></td>
  <td><input type="text" size="15" name="app2mname" class="app2"disabled></td>
  <td><select class="app2" name="app2gen" disabled>
    <option value="M">M</option>
    <option value="F">F</option>
          </select>
  </td>
  <td><select class="app2" name="app2day" disabled>
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
<select class="app2" name="app2month" disabled>
                           <option value="JANUARY">Jan      (01)</option>
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
<input type="number" size="4" name="app2year" maxlength="4" min="1930" max="2003" class="app2"disabled>
  <td><input type="text" size="10" name="app2pan" maxlength="10" class="app2" disabled></td>
</tr>
     <!--3rd applicant-->
  <tr style="background-color:#ff1a8c">  
  <td><input type="checkbox" name="a3box" class="app" id="a3" disabled  onclick="enable3rd()">3'rd Applicant</td>
  <td><input type="text" size="15" name="app3lname" class="app3" disabled></td>
  <td><input type="text" size="15" name="app3fname" class="app3" disabled></td>
  <td><input type="text" size="15" name="app3mname" class="app3" disabled></td>
  <td><select class="app3" name="app3gen" disabled>
    <option value="M">M</option>
    <option value="F">F</option>
          </select>
  </td>
  <td><select class="app3" name="app3day" disabled>
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
<select class="app3" name="app3month" disabled>
                           <option value="JANUARY">Jan      (01)</option>
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
<input type="number" size="4" name="app3year" maxlength="4" min="1930" max="2003" class="app3" disabled>
  <td><input type="text" size="10" name="app3pan" maxlength="10" class="app3" disabled></td>
</tr>
</table>
<!--contact details of joint a/c holders-->

<p id="demo1" ></p>
<font color="blue"><caption>Contact Details of Joint A/c Holders.<i><font color="red">(If any of the Joint A/C holders possess an <u>Existing A/c</u> in the bank then enter <u>existing id</u> else enter NIL)</i></font></caption></font>
<table border="2">
<tr>
  <th>Applicant's</th>
  <th>Mobile No.</th>
  <th>Email</th>
  <th>Existing Customer A/C<br><font color="red"><i>(if available.)</i></font></th>
</tr>
<tr style="background-color:#ff4d4d">
  <td>1'st Applicant</td>
  <td><input type="text" size="10" name="app1mobno" maxlength="10" class="app1"disabled></td>
  <td><input type="text" size="27" name="app1email" style="text-transform:none" class="app1"disabled></td>
  <td><input type="text" size="17" name="app1exid" maxlength="10" class="app1"disabled></td>
</tr>
<tr style="background-color:#6666ff">
  <td>2'nd Applicant</td>
  <td><input type="text" size="10" name="app2mobno" maxlength="10" class="app2"disabled></td>
  <td><input type="text" size="27" name="app2email" style="text-transform:none" class="app2"disabled></td>
  <td><input type="text" size="17" name="app2exid" maxlength="10" class="app2"disabled></td></tr>
</tr>
<tr style="background-color:#ff1a8c">
  <td>3'rd Applicant</td>
  <td><input type="text" size="10" name="app3mobno" maxlength="10" class="app3"disabled></td>
  <td><input type="text" size="27" name="app3email" style="text-transform:none" class="app3"disabled></td>
  <td><input type="text" size="17" name="app3exid" maxlength="10" class="app3"disabled></td>
</tr>
</table>
<caption><i><font color="red">(please tick appropriate box.)</i></font></caption><br>
<input type="checkbox" id="bill" name="bill" value="available" checked>Electricity/Telephone bill&nbsp;&nbsp;<input type="checkbox" id="id" name="idcard" value="available">ID card of Govt. Employee
<input type="checkbox" id="ito" name="ito" value="available">IT Assessment Order.<br><input type="checkbox" id="defenceid" name="defenceid" value="available">Defence ID card.<pre>     </pre><input type="checkbox" id="drivlicense" name="license" value="available">Driving License.&nbsp;<pre>     </pre><input type="checkbox" id="passport" name="pass" value="available">Passport.
<br><input type="checkbox" id="vot_id" name="vot_id" value="available">Voter's ID Card.<pre>      </pre><input type="checkbox" id="pan_id" name="pan_id" value="available">PAN Card<br><input type="checkbox" id="oth" name="oth" onclick="othdoc()">Other Document/s acceptable to Bank (<font color="blue">specify</font>) <input type="text" id="other" name="other" size="10" disabled>
  <br>
<h3 id=s1>Upload Specimen Signature:<i style="color:red">(1st A/c Holder)</i></h3>


<input type="file" id="pic" name="pic" accept="image/*" required>
<h3 id=s1>Upload Specimen Signature:<i style="color:red">(For Joint Holders)</i></h3>
1st Applicant:<input type="file" id="pic1" name="sign1" accept="image/*" disabled>
2nd Applicant:<input type="file" id="pic2" name="sign2" accept="image/*" disabled>
3rd Applicant:<input type="file" id="pic3" name="sign3" accept="image/*" disabled>
<center>  <button class="btn" type="submit" >Submit</button>             </center>
  
  
</form>
</body>
</html>
