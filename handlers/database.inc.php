<?php
$servername = "sql5.freemysqlhosting.net";
$serveruser = "sql5480205";
$serverpass = "kwrSR6yzxV";
$dbname = "sql5480205";

$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
