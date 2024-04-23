<?php

// Define an associative array
$score = array(
    'sudarshan' => 85,
    'SUDARSHAN' => 92,
    'SuDaRshan' => 78,
);
echo "<h4>Lab:17d, Name:Sudarshan Sharma, Roll/Section:49'B'</h4>";

// Using for loop to access the associative array
echo "Using for loop:<br>";
$total = 0;
$all = count($score);
$key = array_keys($score);
for ($i = 0; $i < $all; $i++) {
    $a = $key[$i];
    $b = $score[$a];
    echo "$a scored $b<br>";
    $total += $b;
}
echo "Total score: $total<br><br>";

// Using foreach loop to access the associative array
echo "Using foreach loop:<br>";
$total = 0;
foreach ($score as $c => $score) {
    echo "$c scored $score<br>";
    $total += $score;
}
echo "Total score: $total<br>";

?>
