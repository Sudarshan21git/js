<!-- c) WAP to use custom exception handling in PHP.  -->
<?php
class InvalidAgeException extends Exception{
}
function getAge($a){
if ($a <0 || $a>160){
throw new InvalidAgeException("Invalid Age!!");
}
echo "<br>Age = {$a}<br>";
}
try{
//no exception
getAge(23);
//exception
getAge(-3);
}catch(InvalidAgeException $e){
echo"Error: {$e->getMessage()}";
}