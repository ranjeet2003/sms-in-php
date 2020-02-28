<?php
    session_start();
   if($_SESSION['uid']){
       echo $_SESSION['uid'];
   }
  else{
      header('location:../login.php');
  }
?>