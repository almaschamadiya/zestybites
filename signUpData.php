<?php
include("connection.php");
if (isset($_POST["signIn"])) {
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cookieName = "logIn";
    $cookieValue = $name;
    setcookie($cookieName, $cookieValue);
    $sql = "INSERT INTO user (name,email,phone,address,password)VALUES ('$name', '$email', '$phone', '$address', '$password')";

    if ($con->query($sql) === TRUE) {
        header("location: index.php");
    }
}
?>