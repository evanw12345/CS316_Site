<?php include_once 'common.php'; ?>
<div class="containercontainer" style="background-color: rgba(0,0,0,0.1);">
    <div class="contcard">
        <?php
        include_once './handlers/database.inc.php';
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
</div>

<?php include_once 'footer.php' ?>