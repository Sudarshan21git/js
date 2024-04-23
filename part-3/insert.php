<!-- 25. Create a CRUD application using PHP and MySQL .[Codes can be printed for this lab no.]  -->
<?php
include 'connect.php';
echo "Lab:49, Name:Sudarshan Sharma, Roll:49";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $sql = "INSERT INTO user (name, email, age) VALUES ('$name', '$email', $age)";
    $res = $conn->query($sql);
    if($res){
        header('location: display.php');
    } else{
        echo $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add data</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="name" ><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="text" name="age"><br><br>
    <button name="submit" type="submit" value="submit">submit</button>

    </form>
</body>
</html>

