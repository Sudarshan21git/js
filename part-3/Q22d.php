<?php
echo "<h4>Lab:22d, Name:Sudarshan Sharma, Roll/Section:49'B'</h4>";

$file = "source.txt";
$rep = "replaced.txt";

// Open source file for reading
$fr = fopen($file, "r") ;
$fw = fopen($rep, "w");

echo "Text in source file:<br>";
// Read and display the content of the source file
while ($line = fgets($fr)) {
    echo $line; 
    // Replace patterns in the current line and write to the destination file
    $mod = preg_replace("/\b[Tt]\w+\b/", "HEHE", $line);
    fwrite($fw, $mod);
}

echo "<br><br   >text in replaced file:<br>";
$fw1 = fopen($rep, "r");
echo fgets($fw1);
fclose($fr);
fclose($fw);

?>
