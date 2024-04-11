<?php
include("connection.php");
if (isset($_POST["add"])) {
    $dir = "../assets/img/menu/";
    $file_name = basename($_FILES["image"]["name"]);
    $file_path = $dir . basename($_FILES["image"]["name"]);
    $name = $_POST["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
    $sql = "insert into productcategory (image,categoryName)
    values('".$file_name."','".$name."')";
    if ($con->query($sql) === TRUE) {
        header("location: viewCategory.php");
      } 
}
?>