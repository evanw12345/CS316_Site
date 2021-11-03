<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <title>CS316 Project 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" type="text/css" href="tables.css" />
    <script src="jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
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
        <a href="videos.php" id="link3">Videos</a>
        <a href="admin.php" id="link4">Admin</a>
        <a href="test.php" id="link6">DB TEST</a>
        <a style="float: right;"><button onclick="document.getElementById('popup_ID').style.display='block'">Login</button></a>
        <a style="float:right;" href="usrUpload.php" id="link5">&#43;</a>
    </div>

    <!-- LOGIN FORM -->
    <div id="popup_ID" class="popup">
        <form class="popup-content animate" method="POST" action="http://examples.funwebdev.com/process.php">
            <div class="container">
                <label for="username">Username</label>
                <input type="text" name="username" required><br><br>
                <label for="pswd">Password</label>
                <input type="password" name="pswd" pattern="(?=.*[A-Z])(?=.*\d).{8,}" title="Password must include a number, uppercase letter, and be at least 8 characters." required><br><br>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
        var popup = document.getElementById('popup_ID');
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>