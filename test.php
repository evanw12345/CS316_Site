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
    <style>

    </style>
</head>

<body>
    <div id="include"></div>
    <div class="containercontainer" style="background-color: rgba(0,0,0,0.1);">
        <?php
        $servername = "mysql.cs.uky.edu";
        $username = "etwe226";
        $password = "Password2@";
        $dbname = "etwe226";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        echo "<br>";
        $sql = "SELECT ID, fname, lname, street_address FROM addresses ORDER BY ID;";
        $result = $conn->query($sql);
        echo "<table class='usrList'>";
        echo "<thead>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        </tr>
        </thead>";
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" .  $row["lname"] . "</td>";
                echo "<td>" . $row["street_address"] . "</td>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <script>
        include();
        setTimeout(function() {
            assignActive();
        }, 75);
    </script>
</body>

</html>