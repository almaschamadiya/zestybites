<?php 
    include("connection.php");
    $orderId = "ZBOI_" . rand(1000,100000);
    $name = $_POST["name"];
    $address = $_POST["address"];
    $newAddress = $_POST["newAddress"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $TotalPrice = $_POST["productPriceTotal"];
    $qty = $_POST["qty"];
    $time = $_POST["time"];
    $orderStatus = "pending";
    $date = date("d/m/Y");
    if($newAddress != ""){
        $address = $newAddress;
    }
    $sql = "insert into orderdetails (orderId,name,address,productName,productPrice,TotalPrice,qty,orderStatus,deliveryTime,date) 
    values('".$orderId."','".$name."','".$address."','".$productName."','".$productPrice."','".$TotalPrice."','".$qty."','".$orderStatus."','".$time."','".$date."')";
    if ($con->query($sql) === TRUE) {
        header("location: orderStatus.php");
      } 
?>