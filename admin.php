<?php
   include("config.php");
   session_start();
   $msg = " ";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = mysqli_real_escape_string($db,$_POST['userid']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userid FROM tt2 WHERE userid = '$userid' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
           if($count == 1) {
       $_SESSION['userid'] = $userid;
         header("Location: adminwel.php");
      }else 
      {
$msg = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
<head>
	<title>Welcome to TNEB</title>
</head>
<body>
<center>
<h1>Welcome to Power Distribution site.</h1>
</center>

<div>
	Login

	<form action="" method="post">

	User ID : <input type="text" name="userid"><br>
	Password :<input type="password" name="password"><br>
	<input type="submit" name="submit"><br><br>   <?php echo $msg; ?>
	</form>
</div>

<br>
<div><a href="admin.php">Admin</a> <a href="contact.php">Contact Us</a></div>
<footer>
 <!-- <p>Created by: </p>

<div class="message"><?php if($message!="") { echo $message; } ?>
 -->
</footer>
</body>
</html>