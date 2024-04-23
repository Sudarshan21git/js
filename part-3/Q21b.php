<?php
// Using mktime() function
echo "Lab:21b, Name:Sudarshan Sharma, Roll/Section: 49'B'"."<br>";
$mktime = mktime(15, 30, 0, 4, 6, 2024); // Creates a timestamp for 2024-04-06 15:30:00
echo "Using mktime(): " . date("Y-m-d H:i:s", $mktime) . "<br>";

// Using strtotime() function
$strtotime = strtotime("2024-04-06 15:30:00"); // Converts the date string to a timestamp
echo "Using strtotime(): " . date("Y-m-d H:i:s", $strtotime) . "<br>";

// Using strtotime() with relative time strings
$nextWeekTimestamp = strtotime("+1 week"); // Adds 1 week to the current date
echo "Next week: " . date("Y-m-d", $nextWeekTimestamp) . "<br>";

$nextMonthTimestamp = strtotime("+1 month"); // Adds 1 month to the current date
echo "Next month: " . date("Y-m-d", $nextMonthTimestamp) . "<br>";

$nextYearTimestamp = strtotime("+1 year"); // Adds 1 year to the current date
echo "Next year: " . date("Y-m-d", $nextYearTimestamp) . "<br>";

?>