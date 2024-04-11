<?php
include("connection.php");
$cookieName = "logIn";
$id = $_POST["id"];
if (isset($_POST["cancel"])) {
    $sql = "UPDATE orderdetails SET orderStatus='canceled' WHERE name='$_COOKIE[$cookieName]' AND orderId='$id'";
    echo $sql;
    if ($con->query($sql) === TRUE) {
        header("location: orderStatus.php");
    }
}
?>