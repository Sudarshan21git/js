<!-- f) WAP in PHP to demonstrate the concept of method overriding. -->
<?php
echo "Lab:27f, Name:Sudarshan sharma, Roll:49<br>";
class Animal {
    public function makeSound() {
    echo "sounds ";
    }
   }
   class Cat extends Animal {
    public function makeSound() {
    echo "meow ";
    }
   }
   // Creating objects
   $animal = new Animal();
   $cat = new Cat();
   // Calling the makeSound() method on objects
   $animal->makeSound(); // Output: Animal is making a sound
   $cat->makeSound(); 