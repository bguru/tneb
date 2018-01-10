<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h1>EHT FEEDERS /EQUIPMENT DETAILS ENTRY</h1>

<form method="post" action="">
<!-- <button type="submit" name="submit" >Submit</button>-->
 <br><br>
<label for="Region">Region</label>
<select name="Region">
<option value="CSE Chennai"> CS</option>
<option value="CSE Trichy"> Trichy</option>
</select>
<br>
<br>
<label for="Substation">Substation</label>
<select name="Substation">
<option value="SRIPERUMBUDUR"> SRIPERUMBUDUR</option>
<option value="THARAMANI"> THARAMANI</option>
</select>
<br>
<br>
<h3>Transmission Line Details</h3>
<label for="Feeders">Name of the Feeders </label>
<select name="Feeders">
<option value="1"> SRIPERUMBUDUR</option>
<option value="2"> THARAMANI</option>
<option value="3"> THARAMANI</option>
</select>
<br>
<br>
<label for="Length">Length of the Line </label>
<select name="Length">
<option value="1"> SRIPERUMBUDUR</option>
<option value="2"> THARAMANI</option>
<option value="3"> THARAMANI</option>
</select>
<br>
<br>
<label for="Type">Type of conductor </label>
<select name="Type">
<option value="1"> SRIPERUMBUDUR</option>
<option value="2"> THARAMANI</option>
<option value="3"> THARAMANI</option>
</select>
<br>
<br>
<label for="CCC">Current carrying capacity </label>
<select name="CCC">
<option value="1"> SRIPERUMBUDUR</option>
<option value="2"> THARAMANI</option>
<option value="3"> THARAMANI</option>
</select>
<br>
<br>
Maximum Demand Reached
<br>
<label for="MW">MW </label>
<input type="text" name="MW">
<br>
<label for="MVAR">MVAR </label>
<input type="text" name="MVAR">
<br>
<label for="AMPS">AMPS </label>
<input type="text" name="AMPS">
<br>
<label for="Date">Date and time </label>
<input type="datetime-local" name="Date">
<br>
<label for="OC">Operation Condition </label>
<select name="OC">
<option value="1"> Grid</option>
<option value="2"> Radial</option>
</select>
<br>

<label for="Source">Source </label>
<select name="Source">
<option value="1"> Source</option>
<option value="2"> Normal</option>
</select>
<br>

<label for="doc">Date of commisioning </label>
<input type="Date" name="doc">

<br>

<h3>Equipment Details</h3>
<label for="eq1">Equipment 1</label>
<select name="eq1">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="Auto transformer">Equipment name</label><select name="Auto transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>

<label for="Voltage">Voltage Level in kV</label>
<select name="Voltage">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select>
 
<br>
<label for="Capacity">Capacity</label>
<select name="Capacity">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
<label for="Make">Make</label>
<select name="Make">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno">Maker’s S.No</label>
<select name="Maker’s S.No">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br> 
<label for="not">Number of TAPS</label>
<select name="Number of TAPS">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br> 
<label for="notp">TAP POSITION</label>
<select name="TAP POSITION">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br> 
<label for="YOM">YEAR OF MFG</label>
<select name="YEAR OF MFG">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br> 

<label for="doc">Date of commisioning </label>
<input type="Date" name="doc">
 <br>
<label for="MR">Maximum Reached</label>
<select name="Maximum Reached">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br> 
<label for="PS">Present Status</label>
<select name="Present Status">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po1">Purchase Order</label>
<input type="text" name="po1">
<br>

<br> 
<br>

<hr>
<label for="eq2">Equipment 2</label>
<select name="eq2">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="400kv breaker">Equipment name</label>
<select name="400kv breaker">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make2">Make</label>
<select name="Make2">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno2">Maker’s S.No</label>
<select name="Maker’s S.No2">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<label for="type2">Type</label>
<select name="type2">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>

<label for="BCapacity">Breaking Capacity</label>
<select name="BCapacity">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
<label for="YOM2">YEAR OF MFG</label>
<select name="YEAR OF MFG2">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc2">Date of commisioning </label>
<input type="Date" name="doc2">
 <br>
<label for="po2">Purchase Order</label>
<input type="text" name="po2">
<br><br>
<hr>

<label for="eq3">Equipment 3</label>
<select name="eq3">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="400KV Current Transformer">Equipment name</label>
<select name="400KV Current Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make3">Make</label>
<select name="Make3">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno3">Maker’s S.No</label><br>
<label for="`R' Φ">`R' Φ </label>
<input type="text" name="`R' Φ">
 <br>
<label for="`Y' Φ">`Y' Φ</label>
<input type="text" name="`Y' Φ">
<br>
<label for="`B' Φ">`B' Φ</label>
<input type="text" name="`B' Φ">
<br>
<label for="ra">Ratio Available</label>
<select name="ra">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad">Ratio Adopted</label>
<select name="rad">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc3">Date of commisioning </label>
<input type="Date" name="doc3">
 <br>
 <label for="PS">Present Status</label>
<select name="Present Status">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po3">Purchase Order</label>
<input type="text" name="po3">
<br><br>
<hr>


<label for="eq4">Equipment 4</label>
<select name="eq4">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="400KV Current Transformer CVT">Equipment name(CVT)</label>
<select name="400KV Current Transformer CVT">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make4">Make</label>
<select name="Make4">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno4">Maker’s S.No</label><br>
<label for="`R' Φ4">`R' Φ </label>
<input type="text" name="`R' Φ4">
 <br>
<label for="`Y' Φ4">`Y' Φ</label>
<input type="text" name="`Y' Φ4">
<br>
<label for="`B' Φ4">`B' Φ</label>
<input type="text" name="`B' Φ4">
<br>
<label for="ra4">Ratio Available</label>
<select name="ra4">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad4">Ratio Adopted</label>
<select name="rad4">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc4">Date of commisioning </label>
<input type="Date" name="doc4">
 <br>
 <label for="PS4">Present Status</label>
<select name="Present Status4">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po4">Purchase Order</label>
<input type="text" name="po4">
<br><br>
<hr>



<label for="eq5">Equipment 5</label>
<select name="eq5">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="400KV  Surge Arrestor">Equipment name</label>
<select name="400KV  Surge Arrestors">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make5">Make</label>
<select name="Make5">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno5">Maker’s S.No</label><br>
<label for="`R' Φ5">`R' Φ </label>
<input type="text" name="`R' Φ5">
 <br>
<label for="`Y' Φ5">`Y' Φ</label>
<input type="text" name="`Y' Φ5">
<br>
<label for="`B' Φ5">`B' Φ</label>
<input type="text" name="`B' Φ5">
<br>
<label for="Capacity5">Capacity</label>
<select name="Capacity5">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
<label for="mcov5">MCOV </label>
<input type="text" name="mcov5">
<br>
 <label for="YOM5">YEAR OF MFG</label>
<select name="YEAR OF MFG5">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc5">Date of commisioning </label>
<input type="Date" name="doc5">
 <br> 
 <label for="PS5">Present Status</label>
<select name="Present Status5">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po5">Purchase Order</label>
<input type="text" name="po5">
<br><br>
<hr>

<label for="eq6">Equipment 6</label>
<select name="eq6">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="230KV Breakers">Equipment name</label>
<select name="230KV Breakers">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make6">Make</label>
<select name="Make6">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Make6">Makers S.No</label>
<select name="Make6">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Capacity6">Capacity</label>
<select name="Capacity6">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
<label for="doc6">Date of commisioning </label>
<input type="Date" name="doc6">
 <br> 
 <label for="PS6">Present Status</label>
<select name="Present Status6">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
 <label for="Medium6">Medium</label>
<select name="Medium6">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="om6">Operating Mechanism</label>
<select name="om6">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<label for="po6">Purchase Order</label>
<input type="text" name="po6">
<br><br>
<hr>

<label for="eq7">Equipment 7</label>
<select name="eq7">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="230KV Current Transformer">Equipment name</label>
<select name="230KV Current Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make7">Make</label>
<select name="Make7">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno7">Maker’s S.No</label><br>
<label for="`R' Φ7">`R' Φ </label>
<input type="text" name="`R' Φ7">
 <br>
<label for="`Y' Φ7">`Y' Φ</label>
<input type="text" name="`Y' Φ7">
<br>
<label for="`B' Φ7">`B' Φ</label>
<input type="text" name="`B' Φ7">
<br>
<label for="ra7">Ratio Available</label>
<select name="ra7">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad7">Ratio Adopted</label>
<select name="rad7">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc7">Date of commisioning </label>
<input type="Date" name="doc7">
 <br>
 <label for="PS7">Present Status</label>
<select name="Present Status7">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po7">Purchase Order</label>
<input type="text" name="po7">
<br><br>
<hr>
<label for="eq8">Equipment 8</label>
<select name="eq8">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="230KV Potential Transformer">Equipment name</label>
<select name="230KV Potential Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make8">Make</label>
<select name="Make8">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno8">Maker’s S.No</label><br>
<label for="`R' Φ8">`R' Φ </label>
<input type="text" name="`R' Φ8">
 <br>
<label for="`Y' Φ8">`Y' Φ</label>
<input type="text" name="`Y' Φ8">
<br>
<label for="`B' Φ8">`B' Φ</label>
<input type="text" name="`B' Φ8">
<br>
<label for="ra8">Ratio Available</label>
<select name="ra8">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad8">Ratio Adopted</label>
<select name="rad8">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc8">Date of commisioning </label>
<input type="Date" name="doc8">
 <br>
 <label for="PS8">Present Status</label>
<select name="Present Status8">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po8">Purchase Order</label>
<input type="text" name="po8">
<br><br>
<hr>
<label for="eq9">Equipment 9</label>
<select name="eq9">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="230KV Capacitor Voltage Transformer">Equipment name</label>
<select name="230KV Capacitor Voltage Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make9">Make</label>
<select name="Make9">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Make9">Makers S.No</label>
<select name="Make9">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="ra9">CVT Ratio Available</label>
<select name="ra9">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad9">CVT Ratio Adopted</label>
<select name="rad9">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<label for="doc9">Date of commisioning </label>
<input type="Date" name="doc9">
 <br> 
 <label for="PS9">Present Status</label>
<select name="Present Status9">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po9">Purchase Order</label>
<input type="text" name="po9">
<br><br>
<hr>
<label for="eq10">Equipment 10</label>
<select name="eq10">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="230KV Surge Arrestor">Equipment name</label>
<select name="230KV Surge Arrestor">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make10">Make</label>
<select name="Make10">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno10">Maker’s S.No</label><br>
<label for="`R' Φ10">`R' Φ </label>
<input type="text" name="`R' Φ10">
 <br>
<label for="`Y' Φ10">`Y' Φ</label>
<input type="text" name="`Y' Φ10">
<br>
<label for="`B' Φ10">`B' Φ</label>
<input type="text" name="`B' Φ10">
<br>
<label for="doc10">Date of commisioning </label>
<input type="Date" name="doc10">
 <br>
 <label for="PS10">Present Status</label>
<select name="Present Status10">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po10">Purchase Order</label>
<input type="text" name="po10">
<br><br>
<hr>
<label for="eq11">Equipment 11</label>
<select name="eq11">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="110KV Breaker">Equipment name</label>
<select name="110KV Breaker">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make11">Make</label>
<select name="Make11">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Make11">Makers S.No</label>
<select name="Make11">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Capacity11">Capacity</label>
<select name="Capacity11">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
<label for="doc11">Date of commisioning </label>
<input type="Date" name="doc11">
 <br> 
 <label for="PS11">Present Status</label>
<select name="Present Status11">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
 <label for="Medium11">Medium</label>
<select name="Medium11">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="om11">Operating Mechanism</label>
<select name="om11">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<label for="po11">Purchase Order</label>
<input type="text" name="po11">
<br><br>
<hr>
<label for="eq12">Equipment 12</label>
<select name="eq12">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="110KV Current Transformer">Equipment name</label>
<select name="110KV Current Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make12">Make</label>
<select name="Make12">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno12">Maker’s S.No</label><br>
<label for="`R' Φ12">`R' Φ </label>
<input type="text" name="`R' Φ12">
 <br>
<label for="`Y' Φ12">`Y' Φ</label>
<input type="text" name="`Y' Φ12">
<br>
<label for="`B' Φ12">`B' Φ</label>
<input type="text" name="`B' Φ12">
<br>
<label for="ra12">CT Ratio Available</label>
<select name="ra12">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad12">CT Ratio Adopted</label>
<select name="rad12">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc12">Date of commisioning </label>
<input type="Date" name="doc12">
 <br>
 <label for="PS12">Present Status</label>
<select name="Present Status12">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po12">Purchase Order</label>
<input type="text" name="po12">
<br><br>
<hr>
<label for="eq13">Equipment 13</label>
<select name="eq13">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="110KV Potential Transformer">Equipment name</label>
<select name="110KV Potential Transformer">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make13">Make</label>
<select name="Make13">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno13">Maker’s S.No</label><br>
<label for="`R' Φ13">`R' Φ </label>
<input type="text" name="`R' Φ13">
 <br>
<label for="`Y' Φ13">`Y' Φ</label>
<input type="text" name="`Y' Φ13">
<br>
<label for="`B' Φ13">`B' Φ</label>
<input type="text" name="`B' Φ13">
<br>
<label for="ra13">CT Ratio Available</label>
<select name="ra13">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad13">CT Ratio Adopted</label>
<select name="rad13">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc13">Date of commisioning </label>
<input type="Date" name="doc13">
 <br>
 <label for="PS13">Present Status</label>
<select name="Present Status12">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po13">Purchase Order</label>
<input type="text" name="po13">
<br><br>
<hr>

<label for="eq14">Equipment 14</label>
<select name="eq14">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="110KV Surge Arrestor">Equipment name</label>
<select name="110KV Surge Arrestor">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make14">Make</label>
<select name="Make14">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>

<label for="Makersno14">Maker’s S.No</label><br>
<label for="`R' Φ14">`R' Φ </label>
<input type="text" name="`R' Φ14">
 <br>
<label for="`Y' Φ14">`Y' Φ</label>
<input type="text" name="`Y' Φ14">
<br>
<label for="`B' Φ14">`B' Φ</label>
<input type="text" name="`B' Φ14">
<br>
<label for="ra14">CT Ratio Available</label>
<select name="ra14">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="rad14">CT Ratio Adopted</label>
<select name="rad14">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc14">Date of commisioning </label>
<input type="Date" name="doc14">
 <br>
 <label for="PS14">Present Status</label>
<select name="Present Status14">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po14">Purchase Order</label>
<input type="text" name="po14">
<br><br>
<hr>
<label for="eq15">Equipment 15</label>
<select name="eq15">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="BATTERIES">Equipment name</label>
<select name="BATTERIES">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make15">Make</label>
<select name="Make15">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Capacity15">Capacity</label>
<select name="Capacity15">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
 <label for="YOM15">YEAR OF MFG</label>
<select name="YEAR OF MFG15">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc15">Date of commisioning </label>
<input type="Date" name="doc15">
 <br> 
 <label for="PS15">Present Status</label>
<select name="Present Status15">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po15">Purchase Order</label>
<input type="text" name="po15">
<br><br>
<hr>

<label for="eq16">Equipment 16</label>
<select name="eq16">
   
   <?php
  
  //<option value=""> ----SELECT---- </option>
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
</select>
<br>
<label for="BATTERY CHARGERS">Equipment name</label>
<select name="bc">
<option value="ICT-I"> ICT-I</option>
  <option value="ICT-II"> ICT-II</option>
  <option value="ICT-III"> ICT-III</option>
  <option value="ICT-IV"> ICT-IV</option>
  <option value="ICT-V"> ICT-V</option>
  </select>
<br>
<label for="Make16">Make</label>
<select name="Make16">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Maker's S.No16">Maker's S.No</label>
<select name="Maker's S.No16">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="Capacity16">Capacity</label>
<select name="Capacity16">
 <option value="Nokia"> Nokia</option>
 <option value="CGL"> Nokia</option>
</select><br>
 <label for="YOM16">YEAR OF MFG</label>
<select name="YEAR OF MFG16">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="doc16">Date of commisioning </label>
<input type="Date" name="doc16">
 <br> 
 <label for="PS16">Present Status</label>
<select name="Present Status16">
  <option value="Nokia"> Nokia</option>
  <option value="CGL"> Nokia</option>
</select>
<br>
<label for="po16">Purchase Order</label>
<input type="text" name="po16">
<br><br>
<hr>
<br>
<input type="submit" name="Submit">
</form>

 <br><br><a href="index.php">Home</a><br>
</body>
</html>

<!--

<option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>


define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if(isset($_POST["submit"]))
{
 
//include 'tt.php';
 
$eq1=$_POST["eq1"];

mysql_query("INSERT INTO ta (color) VALUES ('$eq1')"); 

echo " Added Successfully ";

}
?>

-->