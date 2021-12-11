<?php
function userExist($conn, $user)
{
    $sql = "SELECT * FROM users WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row !== false) {
        if ($row["username"] == $user) return true;
    } else return false;
}

function verifyUser($conn, $user, $pass)
{
    echo $user;
    $temp = "";
    $sql = "SELECT * FROM users WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row !== false) {
        if ($row["username"] == $user) $temp = $row;
    }
    if ($temp == "") {
        return -1;
    } else {
        return (password_verify($pass, $temp["pass"])) ? $row : 2;
    }
}

function loginUser($user)
{
    echo '<br>';
    echo 'inside loginUser';
    echo '<br>';


    session_start();
    $_SESSION["username"] = $user["username"];
    $_SESSION["access"] = $user["access"];
    echo $_SESSION["username"] . ' ' . $_SESSION["access"];
    header("location: ../index.php?login=success&user=$user");
}

function buildTable($result)
{
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" .  $row["numPosts"] . "</td>";
            echo "<td>" . $row["dateCreated"] . "</td>";
            echo "<td>" . $row["access"] . "</td>";
        }
    } else {
        echo "0 results";
    }
}
