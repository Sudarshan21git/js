<?php
echo "<h4>Lab:19, Name: Sudarshan sharma, Roll/Section:49'B'</h4>";

// Input string
$text = "The quick brown fox jumps over the lazy dog.<br>";
echo "text: $text";
// Using preg_match() to find a match
if (preg_match('/quick/', $text)) {
    echo "Match for quick found using preg_match().<br>";
} else {
    echo "No match found using preg_match().<br>";
}

// Using preg_match_all() to find all matches
if (preg_match_all('/the/i', $text, $matches)) {
    echo "Matches found using preg_match_all(): <br>";
    print_r($matches[0]);
    echo "<br>";
} else {
    echo "No matches found using preg_match_all().<br>";
}

// Using preg_replace() to replace matches
$newText = preg_replace('/brown/', 'black', $text);
echo "Text after replacement using preg_replace(): $newText<br>";
?>
