<?php

if (isset($_POST["create"])) {
    $username = $_POST["username"];
    $email = $_POST["email_C"];
    $pass = $_POST["pswd"];
    // $repeat = $_POST["repeat"];

    require_once "database.inc.php";
    $sql = "INSERT INTO users (email, username, pass, dateCreated) VALUES ('$email', '$username', '$pass', CURRENT_DATE()); ";
    $result = $conn->query($sql);
    echo "<br>I AM HERE";
    echo "$result";
} else {
    header("location: ../index.php");
}
