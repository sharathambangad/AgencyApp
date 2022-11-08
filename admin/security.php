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

if(!isset($_SESSION['username']))
{
    header('Location: login.php');
    exit(0);
}
