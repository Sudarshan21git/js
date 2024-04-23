<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documnet</title>
</head>
<body>
    <h4>Lab:17a, Name:Sudarshan sharma, Roll/Section:49'B'</h4>
    <form method="post" action="Q17a.php">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1"><br><br>
        
        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2"><br><br>
        
        <input type="submit" name="submit" value="Generate Multiplication Table">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
            if ($num1 > $num2) {
                $biggerNumber = $num1;
            } else {
                $biggerNumber = $num2;
            }
            echo "<h3>Multiplication Table of $biggerNumber:</h3>";
            for ($i = 1; $i <= 10; $i++) {
                $mul = $biggerNumber*$i;
                echo "$biggerNumber * $i = $mul <br>";   
            }
        }
    ?>
</body>
</html>
