<?php 
    session_start();
    unset($_SESSION['member_username']);
    unset($_SESSION['member_username']);
    session_destroy();
    header("location: home.php");
?>