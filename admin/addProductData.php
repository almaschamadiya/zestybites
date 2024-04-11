<?php
include("connection.php");
if (isset($_POST["add"])) {
    $dir = "../assets/img/menu/";
    $file_name = basename($_FILES["image"]["name"]);
    $file_path = $dir . basename($_FILES["image"]["name"]);
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $time = $_POST["time"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
    $sql = "insert into product (image,name,description,price,productCategory,time)
    values('".$file_name."','".$name."','".$description."','".$price."','".$category."','".$time."')";
    if ($con->query($sql) === TRUE) {
        header("location: viewProduct.php");
      } 
}
?>