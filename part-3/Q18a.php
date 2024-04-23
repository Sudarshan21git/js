<?php
echo "<h4>Lab:18a, Name:Sudarshan Sharma, Roll/Section:49'B'</h4>";

function checkAge($age) {
    return ($age < 18) ? "You are restricted" : "Welcome";
}

// Test the function
$age1= 20;
$age2= 7;
echo checkAge($age1);
echo "<br>";
echo checkAge($age2);

?>
