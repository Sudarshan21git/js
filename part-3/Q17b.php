<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documnet</title>
</head>
<body>
<h4>Lab:17b, Name:Sudarshan Sharma , Roll/Section:49'B'</h4>
    <form method="post" action="Q17b.php">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1"><br><br>
        
        <label for="num2">Enter second number:</label>
        <input type="text" id="num2" name="num2"><br><br>
        
        <label for="operator">Select an operator:</label>
        <select id="operator" name="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
            <option value="%">Modulus (%)</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            case '%':
                $result = $num1 % $num2;
                break;
            default:
                $result = "Invalid operator";
        }

        echo "<label>Result: $result</label>";
    }
    ?>
</body>
</html>
