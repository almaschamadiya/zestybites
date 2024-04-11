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
    $sql = "UPDATE productcategory SET categoryName='$name',  image='$image' WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        $_SESSION[$sessionName] = $name;
        header("location: viewCategory.php");
    }
?>