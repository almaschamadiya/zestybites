<?php
include("connection.php");
if (isset($_POST["logIn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select name,password from user where email='$email'";
    $result = $con->query($sql);
    $row = $result->fetch_array();
    $cookieName = "logIn";
    $cookieValue = $row[0];
    setcookie($cookieName, $cookieValue);
    if ($password == $row[1]) {
        session_start();
        $sessionName = "orderRedirect";
        $statusSessionName = "orderStatusRedirect";
        if($_SESSION[$sessionName] != "")
        {
            header("Location: $_SESSION[$sessionName]");
        }
        else if($_SESSION[$statusSessionName] != "")
        {
            header("Location: $_SESSION[$statusSessionName]");
        }
        else{
            header("Location: index.php");
        }
        exit();
    } else {
        header("Location: logIn.php?error=1");
        exit();
    }
}
?>