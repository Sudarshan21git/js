<!-- b) WAP to demonstrate multiple catch blocks in PHP -->
<?php
function calculate($a, $b)
{
try {
if (count($b) < 6) {
throw new OutOfBoundsException("Index is out of bound!");
}
if ($b[5] == 0) {
 throw new DivisionByZeroError("Division by zero is not allowed.");
}
$result = $a / $b[5];
echo "Result: {$result} <br>";
} catch (DivisionByZeroError $e) {
echo "Error: " . $e->getMessage() . "<br>";
} catch (OutOfBoundsException $e) {
echo "Error: " . $e->getMessage() . "<br>";
}
}
// index out of bounds
calculate(10, [3, 6, 7, 8]);
//division by zero
calculate(10, [3, 6, 7, 8, 9, 0, 45]);
//no exception
calculate(10, [3, 6, 7, 8, 9, 5, 45]);