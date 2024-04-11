<?php
include("connection.php");
$id = $_POST["id"];
$updateStatus = $_POST["updateStatus"];

$sql = "UPDATE orderdetails SET orderStatus='$updateStatus' WHERE id=$id";
if ($con->query($sql) === TRUE) {
    header("location: viewOrders.php");
}

?>