<?php 
    include("connection.php");
    session_start();
    $sessionName = "adminLogin";
    $sql = "DELETE FROM adminuser WHERE name='".$_SESSION[$sessionName]."'";

    if ($con->query($sql) === TRUE) {
      header("location: login.php");
    } 
?>