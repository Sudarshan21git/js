<?php
echo "<h4>Lab:17e, Name:Sudarshan Sharma , Roll/Section:49'B'</h4>";

// Initialize an array
$numbers = [1, 2, 3, 4, 5];
echo "<strong>Original Array:</strong> ";
print_r($numbers);
echo "<br>";

// array_push()
array_push($numbers, 6);
echo "<strong>After array_push():</strong> ";
print_r($numbers);
echo "<br>";

// array_shift()
$firstElement = array_shift($numbers);
echo "<strong>After array_shift():</strong> ";
print_r($numbers);
echo "<br>";

// array_search()
$searchIndex = array_search(3, $numbers);
echo "<strong>Index of 3 in array:</strong> $searchIndex <br>";

// array_unshift()
array_unshift($numbers, 0);
echo "<strong>After array_unshift():</strong> ";
print_r($numbers);
echo "<br>";

// sort()
sort($numbers);
echo "<strong>After sort():</strong> ";
print_r($numbers);
echo "<br>";

// asort()
asort($numbers);
echo "<strong>After asort():</strong> ";
print_r($numbers);
echo "<br>";

// ksort()
ksort($numbers);
echo "<strong>After ksort():</strong> ";
print_r($numbers);
echo "<br>";

// rsort()
rsort($numbers);
echo "<strong>After rsort():</strong> ";
print_r($numbers);
echo "<br>";

// arsort()
arsort($numbers);
echo "<strong>After arsort():</strong> ";
print_r($numbers);
echo "<br>";

// krsort()
krsort($numbers);
echo "<strong>After krsort():</strong> ";
print_r($numbers);
echo "<br>";

// Reset the internal array pointer to the first element
reset($numbers);

// current()
$currentElement = current($numbers);
echo "<strong>Current element using current():</strong> $currentElement <br>";

// next()
$nextElement = next($numbers);
echo "<strong>Next element using next():</strong> $nextElement <br>";

// end()
$lastElement = end($numbers);
echo "<strong>Last element using end():</strong> $lastElement <br>";

// pos() is an alias for current()
$position = pos($numbers);
echo "<strong>Current element using pos():</strong> $position <br>";

// prev()
$previousElement = prev($numbers);
echo "<strong>Previous element using prev():</strong> $previousElement <br>";

// shuffle()
shuffle($numbers);
echo "<strong>After shuffle():</strong> ";
print_r($numbers);
echo "<br>";

// array_reverse()
$reversedArray = array_reverse($numbers);
echo "<strong>After array_reverse():</strong> ";
print_r($reversedArray);
echo "<br>";

?>
