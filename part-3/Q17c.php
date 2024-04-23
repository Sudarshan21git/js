<?php

// Method 1: Using array() constructor
$array1 = array(1,2,3);

// Method 2: Using square bracket syntax
$array2 = [4,5,6];

// Method 3: Associative array
$assocArray = array(
    'name' => 'sudarshan',
    'age' => 20,
);

// Method 4: Multidimensional array
$multiArray = array(
    array('apple', 'banana', 'mango'),
    array('red', 'blue', 'green')
);
echo "<h4>Lab:17c, Name:Sudarshan Sharma, Roll/Section:49'B'</h4>";
// Displaying arrays using var_dump()
echo "<h3>Displaying arrays using var_dump():</h3>";
echo "Array 1: ",var_dump($array1);
echo "<br>";
echo "Array 2: ",var_dump($array2);
echo "<br>";
echo "Associative Array:",var_dump($assocArray);
echo "<br>";
echo "Multidimensional Array:",var_dump($multiArray);
echo "<br>";

// Displaying arrays using print_r()
echo "<h3>Displaying arrays using print_r():</h3>";
echo "Array 1: ",print_r($array1);
echo "<br>";
echo "Array 2: ",print_r($array2);
echo "<br>";
echo "Associative Array:",print_r($assocArray);
echo "<br>";
echo "Multidimensional Array:",print_r($multiArray);
echo "<br>";

?>
