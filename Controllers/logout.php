<?php 
    session_start();
    include('config.php');

    session_destroy();
    header('location:../Admin/index.php');
?>