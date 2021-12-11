<?php
require_once 'database.inc.php';
require_once "misc.inc.php";
if(isset($_POST["login"])){
    $user = $_POST["username"];
    $canLogin = verifyUser($conn, $user, $_POST["pswd"]);
    echo $canLogin;
    if ($canLogin == -1){ // Invalid username
        header("location: ../index.php?login=user_e&user=$user");
    } else if ($canLogin == 2) { // Invalid password
        header("location: ../index.php?login=pass_e&user=$user");
    } else { // success
        echo $canLogin["username"];
        loginUser($canLogin);
    }
    
} else {
    header("location: ../index.php");
    exit();
}