<?php
// Function with default arguments
function greet($name = "World") {
    echo "Hello, $name!<br>";
}
echo "<h4>Lab:18c, Name:Sudarshan sharma , Roll/Section:49'B'</h4>";

echo "Function call without argument <br>";
// Calling the function without passing any argument
greet(); // Output: Hello, Guest!

echo "Function call with an argument <br>";
// Calling the function with an argument
greet("Sudarshan"); // Output: Hello, John!
?>
