<?php
// Set default timezone
date_default_timezone_set('UTC');

// Get current timestamp
$currentTimestamp = time();
 echo "Lab:21, Name:Sudarshan Sharma, Roll/Section: 49'B'"."<br>";

// Display current timestamp
echo "Current Timestamp: $currentTimestamp<br>";

// Display formatted date
echo "Formatted Date: " . date("l, F jS Y, H:i:s", $currentTimestamp) . "<br>";

// Display formatted time
echo "Formatted Time: " . date("h:i:s A", $currentTimestamp) . "<br>";

// Display different formatting options
echo "<br>Other Formatting Options:<br>";
echo "Year (Y): " . date("Y", $currentTimestamp) . "<br>";
echo "Month (m): " . date("m", $currentTimestamp) . "<br>";
echo "Day (d): " . date("d", $currentTimestamp) . "<br>";
echo "Hour (H): " . date("H", $currentTimestamp) . "<br>";
echo "Minute (i): " . date("i", $currentTimestamp) . "<br>";
echo "Second (s): " . date("s", $currentTimestamp) . "<br>";

// Display timezone
echo "<br>Timezone: " . date_default_timezone_get() . "<br>";
?>
