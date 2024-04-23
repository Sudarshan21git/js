<?php
$nameErr = $unameErr = $ageErr = $pwErr = "";     

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $age = $_POST['age'];
    $pw = $_POST['pw'];
    $cpw = $_POST['cpw'];

    // Validation rules
    $valid = true;
 if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Name should only contain letters and spaces";
        $valid = false;
    }

if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]{7,}$/", $uname)) {
        $unameErr = "Username must be at least 8 characters long starting with a letter";
        $valid = false;
    }

 if ($age < 16) {
        $ageErr = "Age must be at least 16 years old";
        $valid = false;
    }

if ($pw != $cpw) {
        $pwErr = "Password and Confirm Password must match";
        $valid = false;
    }

    if ($valid) {
        // Process the form data
        echo "Form submitted successfully!";
        // You can add further processing here like storing the data in a database.
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    
    <h2>Lab:20, Name:Sudarshan Sharma, Roll/Section: 49'B'</h2>
    <form method="post" action="Q20.php">
        Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <span class="error"><?php echo isset($nameErr) ? $nameErr : ''; ?></span><br><br>
        
        Username: <input type="text" name="uname" value="<?php echo isset($_POST['uname']) ? $_POST['uname'] : ''; ?>">
        <span class="error"><?php echo isset($unameErr) ? $unameErr : ''; ?></span><br><br>
        
        Age: <input type="text" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>">
        <span class="error"><?php echo isset($ageErr) ? $ageErr : ''; ?></span><br><br>
        
        Password: <input type="text" name="pw" value="<?php echo isset($_POST['pw']) ? $_POST['pw'] : ''; ?>"><br><br>
        
        Confirm Password: <input type="text" name="cpw" value="<?php echo isset($_POST['cpw']) ? $_POST['cpw'] : ''; ?>">
        <span class="error"><?php echo isset($pwErr) ? $pwErr : ''; ?></span><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
