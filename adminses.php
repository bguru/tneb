<?php
   include('config.php');
   session_start();
   
   $userid = $_SESSION['userid'];
   
   $ses_sql = mysqli_query($db,"select userid from tt2 where userid = '$userid' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userid'];
   
   if(!isset($_SESSION['userid'])){
      header("Location:login.php");
   }
?>