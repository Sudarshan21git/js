<!-- g. Write PHP program to fetch records from two tables in MySQL using SQL joins. -->

<?php
include "connect.php";
echo "Lab:24g, Name:Sudarshan sharma , Roll:49 <br>";

// SQL query using SQL JOIN to fetch records from two tables
$sql = "SELECT user.id, user.name, user2.email, user2.age 
        FROM user 
        INNER JOIN user2 ON user.id = user2.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. ", Name: " . $row["name"]. ", Email: " . $row["email"]. ", Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No records found";
}

// Close database connection
$conn->close();
?>
