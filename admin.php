<head>
    <title>CS316 Project 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="tables.css" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <script src="jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>

<body>
    <div id="include"></div>
    <div class="containercontainer">
        <div class="contcontainer">
            <div class="contcard">
                <?php
                $servername = "mysql.cs.uky.edu";
                $username = "etwe226";
                $password = "Password2@";
                $dbname = "etwe226";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "<script>console.log('Database connected successfully');</script>";
                echo "<br>";
                $sql = "SELECT * FROM users;";
                $result = $conn->query($sql);
                echo "<table class='usrList'>";
                echo "<caption>User List</caption>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Email</th>";
                echo "<th>Num of Posts</th>";
                echo "<th>Num of Comments</th>";
                echo "<th>Date Account Created</th>";
                echo "<th>Role</th>";
                echo "</tr>";
                echo "</thead>";

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" .  $row["numPosts"] . "</td>";
                        echo "<td>" . $row["numComments"] . "</td>";
                        echo "<td>" . $row["dateCreated"] . "</td>";
                        echo "<td>" . $row["access"] . "</td>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        include();
        setTimeout(function() {
            assignActive();
        }, 75);
    </script>
</body>

</html>