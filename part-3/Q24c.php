<!-- c. Write a PHP program to update a record of a table in MySQL -->
<?php

include "connect.php";
$name = "sharma";
$age = 20;

$sql = "UPDATE user SET name = '$name', age = $age WHERE name = 'Sudarshan'";
$res = mysqli_query($conn, $sql);
echo "Lab:24c, Name:Sudarshan Sharma , Roll:49 <br>";

if ($res) {
    echo "Updated succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>