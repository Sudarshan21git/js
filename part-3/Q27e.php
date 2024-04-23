<!-- e) WAP in PHP to demonstrate the concepts of static variable and static methods. -->
<?php
echo "Lab:27e, Name:Sudarshan Sharma, Roll:49 <br>";
class Counter {
    // Static variable to keep track of the count
    private static $count = 0;

    // Static method to increment the count
    public static function increment() {
        self::$count++;
    }

    // Static method to get the current count
    public static function getCount() {
        return self::$count;
    }
}

// Increment the count
Counter::increment();
Counter::increment();

// Get the count
echo "Count: " . Counter::getCount(); // Output: Count: 3
?>