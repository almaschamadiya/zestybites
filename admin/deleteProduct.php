<?php 
    include("connection.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM product WHERE id=$id";

    if ($con->query($sql) === TRUE) {
      header("location: viewProduct.php");
    } 
?>