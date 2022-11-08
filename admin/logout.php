<?php
include('includes/header.php');
include('security.php');

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    //$_SESSION['message'] = "Logged Out Successfully";
    header('Location: index.php');
    exit(0);
}


?>