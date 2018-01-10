<?php

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'tneb'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

//echo "Great work Guru !!!!";



$fullname = $_POST['name']; 
$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 

SignUp(); 






function NewUser() 
{ 
$fullname = $_POST['name']; 
$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 
$cpass = $_POST['cpass'];

$query = "INSERT INTO tt1 (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
{ 
	
echo "YOUR REGISTRATION IS COMPLETED..."; 

} 
} 

function SignUp() 
{ 

$userName = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['pass']; 

$result = mysql_query("SELECT * FROM WebsiteUsers WHERE userName = '$userName' AND pass = '$password'") or die(mysql_error()); 
if(@mysql_num_rows($result) ==1) 
{ 
echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 

} 
else 
{ 
NewUser(); 
} 





} 


?> 