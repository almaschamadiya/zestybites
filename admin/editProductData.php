<?php 
    include("connection.php");
    $id = $_POST["id"];
    $image = $_POST["oldImage"];
    if ($_FILES["image"]["error"] != 4) {
        $dir = "../assets/img/menu/";
        $image = basename($_FILES["image"]["name"]);
        $file_path = $dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
    }
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $time = $_POST["time"];
    $sql = "UPDATE product SET name='$name',  image='$image',  description='$description',  price='$price',  productCategory='$category',  time='$time' WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        $_SESSION[$sessionName] = $name;
        header("location: viewProduct.php");
    }
?>