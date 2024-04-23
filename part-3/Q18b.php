<?php

function sumSecondLargestAndSmallest($numbers) {
    // Sort the array in ascending order
    sort($numbers);
    
    // Get the second smallest and second largest elements
    $second_smallest = $numbers[1];
    $second_largest = $numbers[count($numbers) - 2];
    
    // Calculate the sum
    $sum = $second_smallest + $second_largest;
    
    // Print the sum
    echo "Sum of second smallest and second largest elements: $sum";
}

// Test the function
$numbers = [5, 3, 9, 1, 7];
sumSecondLargestAndSmallest($numbers); // Output: Sum of second smallest and second largest elements: 8

?>
