<?php
$file = "source1.txt";

$openfw = fopen($file, "w");

$string = "<h4>Lab:22b, Name:Sudarshan sharma, Roll/Section:49'B'</h4>Written using fwrite and read using fread!!!";
fwrite($openfw,$string);

$openfr = fopen($file, "r");
echo fread($openfr,filesize($file));

fclose($openfr);
fclose($openfw);
?>
