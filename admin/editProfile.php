<?php
include("connection.php");
session_start();
$sessionName = "adminLogin";
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $photo = $_POST["oldPhoto"];
    if ($_FILES["photo"]["error"] != 4) {
        $dir = "../assets/img/admin/";
        $photo = basename($_FILES["photo"]["name"]);
        $file_path = $dir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $file_path);
    }
    $name = $_POST["name"];
    $job = $_POST["job"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $newPassword = $_POST["newPassword"];
    if ($newPassword != "") {
        $password = $newPassword;
    }
    $username = $_POST["username"];
    $newUserName = $_POST["newUsername"];
    if ($newUserName != "") {
        $username = $newUserName;
    }
    $sql = "UPDATE adminuser SET name='$name',  job='$job',  address='$address',  phone='$phone',  email='$email',  password='$password', username='$username', photo='$photo' WHERE id=$id";
    if ($con->query($sql) === TRUE) {
        $_SESSION[$sessionName] = $name;
        header("location: profile.php");
    }
}
?>