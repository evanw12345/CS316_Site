<?php

if (isset($_POST["create"])) {
    $username = $_POST["username"];
    $email = $_POST["email_C"];
    $pass = $_POST["pswd"];

    $username = filter_var($username);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    echo "$username $email $pass";
    require_once "database.inc.php";
    require_once "misc.inc.php";
    if (userExist($conn, $username)) {
        header("location: ../index.php?create=user_e&user=$username");
    } else {
        $sql = "INSERT INTO users (email, username, pass, dateCreated) VALUES ('$email', '$username', '$pass', CURRENT_DATE()); ";
        $result = $conn->query($sql);
        header("location: ../index.php?create=success&user=$username");
    }
} else {
    header("location: ../index.php");
}
