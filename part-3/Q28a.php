<!-- 28. Exception Handling in PHP
a) WAP to demonstrate the use of try, catch, throw and finally keywords in PHP -->

<?php
class test{
private $n1,$n2;
function __construct($num1,$num2){
$this->n1=$num1;
$this->n2=$num2;
}
function calculate(){
try{
$result = ($this->n1+$this->n2)/(5-$this->n2);
echo"The result is ".$result."<br>";
}
catch(DivisionByZeroError $ex){
echo"Exception!! ".$ex->getMessage()."<br>";
}
finally{
echo"Hello from finally block <br>";
}
} 
}
$obj1 = new Test(3,4);
$obj2 = new Test(3,5);
//no exception
$obj1->calculate();
//exception here
$obj2->calculate();