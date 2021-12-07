<h3>Search</h3>
<form method="POST">
    <label for="name_s">Name:</label>
    <input type="text" name="name_s">
    <label for="email_s">Email:</label>
    <input type="text" name="email_s">
    <label for="type_s">Account Type:</label>
    <select name="type_s">
        <option value="select">Select:</option>
        <option value="admin">Administrator</option>
        <option value="user">User</option>
    </select>
    <input type="submit" name="Search" value="Search">
</form>

<?php
require_once "database.inc.php";
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
$sql_all = "SELECT * FROM users;";
if (isset($_POST["Search"])) {
    $sql = "SELECT * FROM users WHERE ";
    $name = $_POST["name_s"];
    $email = $_POST["email_s"];
    ($_POST["type_s"] == "select") ? $type = "" : $type = $_POST["type_s"];
    if ($name > 0) {
        $sql .= "username LIKE '%$name%' ";
        echo "Searching for:<br>";
        echo "Username: $name ";
        if ($email > 0) {
            $sql .= "AND email LIKE '%$email%' ";
            echo "Email: $email ";
        }
        if ($type > 0) {
            $sql .= "AND access LIKE '%$type%' ";
            echo "Account Type: $type";
        }
        trim($sql);
        $sql .= ";";
    } else if ($email > 0) {
        $sql .= "email LIKE '%$email%' ";
        echo "Searching for:<br>";
        echo "Email: $email ";
        if ($type > 0) {
            $sql .= "AND access LIKE '%$type%' ";
            echo "Account Type: $type";
        }
        trim($sql);
        $sql .= ";";
    } else if ($type > 0) {
        $sql .= "access LIKE '%$type%' ";
        echo "Searching for:<br>";
        echo "Account Type: $type";
        trim($sql);
        $sql .= ";";
    } else {
        echo "No input detected!";
    }
    $result = $conn->query($sql);
    echo "<table class='usrList'>";
    echo "<caption>Search Results</caption>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Num of Posts</th>";
    echo "<th>Date Account Created</th>";
    echo "<th>Role</th>";
    echo "</tr>";
    echo "</thead>";
    buildTable($result);
}
$result = $conn->query($sql_all);
echo "<table class='usrList'>";
echo "<caption>All Users</caption>";
echo "<thead>";
echo "<tr>";
echo "<th>Username</th>";
echo "<th>Email</th>";
echo "<th>Num of Posts</th>";
echo "<th>Date Account Created</th>";
echo "<th>Role</th>";
echo "</tr>";
echo "</thead>";
buildTable($result);



?>