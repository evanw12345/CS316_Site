<?php session_start() ?>
<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <title>CS316 Project 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/login.css" />
    <link rel="stylesheet" type="text/css" href="styles/tables.css" />
    <link rel="icon" href="images/favicon.img.png" />
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div id="logo">
            <img src="images/logo.jpg" alt="Site Logo" />
        </div>
        <h1 class="title">The Other Side of the Internet</h1>
    </header>
    <div class="nav">
        <a href="index.php" id="link1">Home</a>
        <a href="images.php" id="link2">Images</a>
        <a href="videos.php" id="link3">Lore</a>
        <a href="test.php" id="link6">DB TEST</a>
        <?php
        if (!isset($_SESSION["username"])) {
            echo '<a style="float: right;" onclick="document.getElementById(\'popup_ID\').style.display=\'block\'">Login</a>';
        } else echo '<a style="float: right;" href="./handlers/logout.inc.php">Logout</a>'
        ?>
        <a style="float:right;" href="usrUpload.php" id="link5">&#43;</a>
        <?php
        if (isset($_SESSION["access"])) {
            if ($_SESSION["access"] == "admin") {
                echo '<a style="float: right;" href="admin.php" id="link4">Admin</a>';
            }
        }
        ?>
    </div>

    <!-- LOGIN FORM -->
    <?php include_once 'accountForms.php' ?>