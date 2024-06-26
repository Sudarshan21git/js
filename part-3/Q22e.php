<!-- WAP in PHP to demonstrate random accessing of file and associated functions.  -->
<?php
echo "<h4>Lab:22e, Name:Sudarshan Sharma, Roll/Section:49 'B'</h4>";

$filePath = 'source.txt';
// Open the file in read/write mode
$file = fopen($filePath, 'r+');
// Move the file pointer to a specific position
fseek($file, 10, SEEK_SET);
// Write data at the current position of the file pointer
fwrite($file, 'Hello');
// Move the file pointer to another position
fseek($file, 0, SEEK_END);
// Get the current position of the file pointer
$endPosition = ftell($file);
// Move the file pointer back 5 bytes from the end of the file
fseek($file, max($endPosition - 5, 0), SEEK_SET);
// Read data from the current position of the file pointer
$data = fread($file, 5);
// Print the data
echo $data;
// Close the file
fclose($file);
?>
