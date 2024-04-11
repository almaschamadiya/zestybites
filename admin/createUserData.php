<?php
    include("connection.php");
    $dir = "../assets/img/admin/";
    $file_name = basename($_FILES["photo"]["name"]);
    $file_path = $dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
    $name = $_POST["name"];
    $username = $_POST["username"];
    $job = $_POST["job"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "insert into adminuser (photo,name,job,address,phone,email,password,username)
    values('".$file_name."','".$name."','".$job."','".$address."','".$phone."','".$email."','".$password."','".$username."')";
    if ($con->query($sql) === TRUE) {
        header("location: viewUser.php");
      } 
?>