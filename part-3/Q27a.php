<!-- 27. Object oriented PHP
a) WAP in PHP which should have followings
 A class with at least three member variables
 A parameterized constructor having three parameters to initializes the data members 
 A method which displays values of the data members.
 Three methods with single parameter for each and the method should update the
values of data members based on given arguments
 Two objects of the class
 Statements for calling of above methods -->
<?php
echo "Lab:27a, Name:Sudarshan Sharma, Roll:49 <br>";
class bankAcc {
    private $accNo, $b;

    public function __construct($accNo, $initialB) {
        $this->accNo = $accNo;
        $this->b = $initialB;
    }

    public function display() {
        echo "Account Number: $this->accNo <br>";
        echo "Balance: $this->b <br>";
    }

    public function deposit($amt) {
        $this->b += $amt;
    }

    public function withdraw($amt) {
        if ($amt <= $this->b) {
            $this->b -= $amt;
            return true;
        }
        return false;
    }
}

$account1 = new bankAcc("1234567890", 1000);
$account2 = new bankAcc("9876543210", 2000);

$account1->deposit(500);
$account1->withdraw(200);

$account2->deposit(1000);
$account2->withdraw(500);

$account1->display();
$account2->display();
?>