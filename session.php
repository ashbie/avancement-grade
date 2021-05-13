<?php  
session_start();   
// session.php will verify the session, if there is no session it will redirect to login page.

if(!(isset($_SESSION['email'])))
{ // or
   header("location: login.php");
}

   include('config.php');
   
   
   $user_check = $_SESSION['email'];
   
   $ses_sql = mysqli_query($db,"SELECT * from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC); // 
   
   $login_session = $row['email']; // $row[] ?? 