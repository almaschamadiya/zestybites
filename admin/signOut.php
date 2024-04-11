<?php 
    session_start();
    $sessionName = "adminLogin";
    $_SESSION[$sessionName] = "";
    header("location: login.php");
?>