<?php
$file = "source.txt";

$openfw = fopen($file, "w");

$string = "<h4>Lab:22a, Name:Sudarshan sharma, Roll/Section:49'B'</h4>Written using fputs and read using fgets!!!";
fputs($openfw,$string);

$openfr = fopen($file, "r");
echo fgets($openfr);

fclose($openfr);
fclose($openfw);
?>
