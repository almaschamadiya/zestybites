<?php 
    include("connection.php");
    session_start();
    $sessionName = "adminLogin";
    $id = $_GET["id"];
    $name = $_GET["name"];
    $sql = "DELETE FROM adminuser WHERE id=$id";

    if ($con->query($sql) === TRUE) {
      if($name == $_SESSION[$sessionName]){
        header("location: createUser.php");
      }
      else{
        header("location: viewUser.php");
      }
    } 
?>