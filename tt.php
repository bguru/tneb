<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>
<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: small"><span style="line-height: 19px"> </span></span>
<?php
//      include "config.php";  // including configuration file // emp_dd_display.php
?>
 <html>
 <body>
     <form name="frmdropdown" method="post" action="">
     <center>
            <h2 align="center">EHT FEEDERS /EQUIPMENT DETAILS</h2>
         
            <strong> Select Equipment : </strong> 
            <select name="empName"> 
               <option value=""> -----SELECT ANY ONE EQUIPMENT----- </option> 
            <?php
  
                 $dd_res=mysql_query("Select DISTINCT trans from dt");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="View Details"/> 
     <br><br>
  
   <table border="1">
 <tr align="center">
    <th>S. No</th> <th>Equipment Name </th>      <th>Make </th>     <th>Capacity</th>    <th>Maker’s S.No</th>    <th>Date Of Commissioning</th> <th>Present status</th> <th>MEDIUM</th> <th>OPERATING MECHANISM</th>
 </tr> 
 
 <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["empName"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $res=mysql_query("Select * from eq");
         }
         else
         { 
             $res=mysql_query("Select * from eq");
         }
  
         echo "<tr><td colspan='9'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]</td>";
                 echo "<td width='100' align='center'>$r[2]</td>";
                 echo "<td alig='center' width='40'> $r[3]</td>";
                 echo "<td align='center' width='200'>$r[4]</td>";
                 echo "<td width='100' align='center'>$r[5]</td>";
                 echo "<td width='100' align='center'>$r[6]</td>";	
                 echo "<td width='100' align='center'>$r[7]</td>";	
                 echo "<td width='100' align='center'>$r[8]</td>";
                 //echo "<td width='100' align='center'>$r[9]</td>";

                 echo "</tr>";
        }
    }
?>
  </table>
 </center>
</form>
<a href="index.php">Home</a>
</body>
</html>
<!--

                 echo "<td width='200'>$r[1]" . " $r[2]</td>";


$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 

$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 
$cpass = $_POST['cpass'];

$email = $_POST['email']; 
$password = $_POST['pass']; 


else 
{ 
NewUser(); 
} 



//echo "Great work Guru !!!!";



//$eq1 = $_POST['eq1']; 


//SignUp(); 





/**
function NewUser() 
{ 
$eq1 = $_POST['eq1']; 

$query = "INSERT INTO ta (color) VALUES ('$eq1')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
{ 
	
echo "YOUR DATA IS INSERTED..."; 

} 
} 

/**;
function SignUp() 
{ 

$eq1 = $_POST['eq1']; 


$result = mysql_query("SELECT * FROM ta WHERE color = '$eq1'") or die(mysql_error()); 
if(@mysql_num_rows($result) ==1) 
{ 
echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 

} 
/**




} 


?> 


-->