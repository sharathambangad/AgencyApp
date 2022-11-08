<?php
/* entry point*/


include('security.php');

if(isset($_SESSION['username'])){
    header('Location: index-admin.php');
    exit(0);
}


?>
