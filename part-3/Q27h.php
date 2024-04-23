<!-- h) WAP in PHP to illustrate the concepts of interface -->
<?php
interface Animal {
    public function makeSound();
   }
   class Cat implements Animal {
    public function makeSound() {
    echo "Cat is meowing.";
    }
   }
   class Dog implements Animal {
    public function makeSound() {
    echo "Dog is barking.";
    }
   }
   // Function that accepts any object implementing the Animal interface
   function animalSound(Animal $animal) {
    $animal->makeSound();
   }
   // Create objects of different classes implementing the Animal interface
   $cat = new Cat();
   $dog = new Dog();
// Call the function with different objects
animalSound($cat); // Output: Cat is meowing.
animalSound($dog); // Output: Dog is barking.