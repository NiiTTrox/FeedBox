<?php

$servername = "localhost";
$username = "testy";
$password = "1234";
$dbname = "feedbox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
SELECT users.username, feeds.content, feeds.date
FROM feeds
JOIN users ON feeds.userid = users.id
ORDER BY feeds.date DESC
";

$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row


    echo "<style>tr:nth-child(odd){ background: cornflowerblue; } tr:nth-child(even) {background: darkseagreen}</style>";

    echo "<table style='border: 1px solid red;'>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["content"]. "</td><td>" . $row["date"]. "</td></tr>";
    }

    echo "</table>";

} else {
    echo "0 results";
}


$conn->close();



