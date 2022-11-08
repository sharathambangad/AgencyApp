<?php
include('config/dbconfig.php');
session_start();

if($dbconfig)
{
     //echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(isset($_POST['login_btn']))
{
    $email_login = mysqli_real_escape_string($connection,$_POST['username']); 
    $password_login = mysqli_real_escape_string($connection,$_POST['password']);   

    $login_query = "SELECT * FROM admin_login WHERE username='$email_login' AND password= md5('$password_login') LIMIT 1";
    $login_query_run = mysqli_query($connection, $login_query);

   if(mysqli_fetch_array($login_query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index-admin.php');
        exit(0);
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: index.php');
        exit(0);
   }
    
}
?>