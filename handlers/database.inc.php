<?php
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "site_data";

$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
