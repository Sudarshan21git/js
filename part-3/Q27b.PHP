<!-- b) WAP to demonstrate encapsulation in PHP -->
<?php
echo "Lab:27b, Name:Sudarshan sharma , Roll:49 <br>";
class Employee {
 private $name;
 private $salary;
 public function getName() {
 return $this->name;
 }
 public function setName($name) {
 $this->name = $name;
 }
 
}
$e1 = new Employee();
// Setting property values using setter methods
$e1->setName("sudarshan");
// Accessing property values using getter methods
echo $e1->getName(); // Output: