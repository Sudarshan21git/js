<!-- 25. Create a CRUD application using PHP and MySQL .[Codes can be printed for this lab no.]  -->
<?php
include 'connect.php';
echo "Lab:25, Name:Sudarshansharma, Roll:49";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id=$id";
    $res = $conn->query($sql);
    if($res){
        $row = mysqli_fetch_assoc($res);
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $age = $row['age'];

    } else{
        echo $conn->error;
    }
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $sql = "UPDATE user SET name='$name', email='$email', age=$age WHERE id = $id";
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
    <h2>Edit data</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="number" name="id" value="<?php echo $id;?>" hidden>
    Name: <input type="text" name="name" value="<?php echo $name;?>" ><br><br>
    Email: <input type="text" name="email" value="<?php echo $email;?>"><br><br>
    Age: <input type="text" name="age" value="<?php echo $age;?>"><br><br>
    <button name="submit" type="submit" value="submit">submit</button>
    </form>

</body>
</html>

