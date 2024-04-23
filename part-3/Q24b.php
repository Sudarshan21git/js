<!-- b. Write a PHP program to read all data from a table in MySQL -->

<?php

include "connect.php";

$sql = "SELECT * FROM user";
$res = mysqli_query($conn, $sql);
echo "Lab:24b, Name:Sudarshan sharma, Roll:49 <br>";
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
        $email = $row['email'];
        $age = $row['age'];
        echo "Name: $name, Email: $email, Age: $age <br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>