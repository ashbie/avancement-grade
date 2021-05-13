<?php
 session_start();
   // Logout page is having information about how to logout from login session.   
   if(session_destroy())
   {
      unset($_SESSION['username']);
      unset($_SESSION['email']);
      unset($_SESSION['success']);

      header("Location: login.php");
   }