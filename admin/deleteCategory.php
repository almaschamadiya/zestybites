<?php 
    include("connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM productcategory WHERE id=$id";

    if ($con->query($sql) === TRUE) {
      header("location: viewCategory.php");
    } 
?>