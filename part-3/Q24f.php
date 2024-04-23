<!-- f. Write PHP program to fetch records from two tables in MySQL using subqueries. -->
<?php

include "connect.php";
echo "Lab:24f, Name:Sudarshan sharma, Roll:49 <br>";
$sql = "SELECT * FROM user WHERE id IN (SELECT id FROM user2)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. ", Name: " . $row["name"]. "<br>";
    }
} else {
    echo "No records found";
}


