<?php
require_once "misc.inc.php";
echo "1 <br>";

if (isset($_POST["submit"])) {
    echo "2 <br>";
    if (isset($_SESSION["username"])) {
        echo "3 <br>";
        $title = $_POST["title"];
        $desc = $_POST["desc"];
        $tag = $_POST["tag"];
        $fileName = $_POST["fileName"];
        echo $title. '<br>' . $desc. '<br>'. $tag. '<br>';
    }
}
