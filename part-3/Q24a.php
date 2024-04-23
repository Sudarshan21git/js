<!-- 24. PHP and MySQL
a. Write a PHP program to insert some data into a table in MySQL -->

<?php

$conn = new mysqli("localhost", "root", "", "js");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = " Sudarshan";
$email = "sudarshan@gmail.com";
$age = 21;

$sql = "INSERT INTO user (name, email, age) VALUES ('$name', '$email', $age)";

if ($conn->query($sql)) {
    echo "Lab:24a, Name:Sudarshan sharma, Roll:49 <br> $name  data has been recorded succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
