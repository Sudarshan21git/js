<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
    <h2>User info.</h2>
    <table border='1px' style=" border-collapse: collapse;">
            <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>action</th>
            </tr>
    <?php
    include 'connect.php';
        $sql = "SELECT * FROM user";
        $res = $conn->query($sql);

        if (!$res) {
            echo $conn->error;
        } else {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $age = $row['age'];
                echo "            
                <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
                <td>$age</td>
                <td><a href='edit.php?id=$id'><button>edit</button></a>
                <a href='delete.php?id=$id'><button>delete</button></a>
                </td>
                </tr>";
            }
        }
    
    $conn->close();
    ?>
    </table>
    <br>
    <a href="insert.php"><button>add data</button></a>
    <p>Lab:25, Name:Sudarshan sharma, Roll:49</p>
</body>
</html>
