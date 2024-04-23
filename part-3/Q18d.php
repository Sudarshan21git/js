<?php
// Function to demonstrate pass by value
function pbv($num) {
    $num += 10;
    echo "Inside passByValue function: $num<br>";
}

// Function to demonstrate pass by reference
function pvr(&$num) {
    $num += 10;
    echo "Inside passByReference function: $num<br>";
}

// Initial value
$num = 5;
echo "<h4>Lab:18d, Name:Sudarshan sharma , Roll/Section:49'B''</h4>";

// Calling passByValue function
echo "Before passByValue call: $num<br>";
pbv($num);
echo "After passByValue call: $num<br><br>"; // The original value remains unchanged

// Calling passByReference function
echo "Before passByReference call: $num<br>";
pvr($num);
echo "After passByReference call: $num<br>"; // The original value is modified because it was passed by reference
?>
