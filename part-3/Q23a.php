<!-- 23. Including and uploading files
a. Write programs to demonstrate the use of include (), require(), include_once() and 
require_once() functions. -->
<?php
echo "Lab:23a, Name:Sudarshan sharma, Roll:49 <br>";
include 'sum.php';
echo "Addition is ".sum(10,21);

require 'subtract.php';
echo "<br> subtraction is ".sub(21,2);

include_once 'sum.php';
echo "<br> Addition is ".sum(1,2);

require_once 'subtract.php';
echo "<br> subtraction is ".sub(10,6);

?>

