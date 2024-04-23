<!-- g) WAP in PHP to illustrate the concepts of abstract class. -->
<?php
echo "Lab:27g, Name:Sudarshan Sharma, Roll:49<br>";

abstract class Shape {
    abstract public function ar();
}

class Circle extends Shape {
    private $r;
    public function __construct($r) {
        $this->r = $r;
    }
    public function ar() {
        return 3.14 * $this->r ** 2;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function ar() {
        return $this->length * $this->width;
    }
}

foreach ([new Circle(5), new Rectangle(4, 6)] as $shape) {
    echo "Area: " . $shape->ar() . "<br>";
}
?>