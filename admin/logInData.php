<?php
include("connection.php");
if (isset($_POST["logIn"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select name,password from adminuser where username='$username'";
    $result = $con->query($sql);
    $row = $result->fetch_array();
    session_start();
    $sessionName = "adminLogin";
    $_SESSION[$sessionName] = $row[0];
    if ($password == $row[1]) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}
?>