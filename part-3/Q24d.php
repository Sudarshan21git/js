<!-- d. Write a PHP program to delete a record from a table in MySQL -->

<?php

include "connect.php";

$sql = "DELETE FROM user WHERE age = 21";
$res = mysqli_query($conn, $sql);
echo "Lab:24(d), Name:sudarshan sharma, Roll:49 <br>";
if ($res) {
    echo "deleted succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>