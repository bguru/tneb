<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'tneb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $query = "SELECT * FROM ta";
$result = mysql_query($query);
if (!$db)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
?>
