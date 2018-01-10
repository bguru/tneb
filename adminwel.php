<?php
   include('adminses.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
    <center>  <h1>Welcome <?php echo $login_session; ?></h1> </center><br>

<a href="adminnew.php">Add user</a>

     <center> <h2><a href = "logout.php">Sign Out</a></h2></center>
   </body>
   
</html>