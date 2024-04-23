<!-- d) WAP to show how constructor of parent class is called from child class -->
<?php
echo "Lab:27d, Name:Sudarshan Sharma , Roll:49 <br>";

class ParentClass {
    protected $n;
    public function __construct($n) {
    $this->n = $n;
    echo "Parent constructor called. Name: " . $this->n . "<br>";
    }
   }
   class ChildClass extends ParentClass {
    public function __construct($n) {
    parent::__construct($n);
    echo "Child constructor called. Name: " . $this->n . "<br>";
    }
   }
   // Creating an object of the child class
   $child = new ChildClass("sudarshan");
   