<?php
    class Person {
        // Access modifiers:
            // 1) Public - can de accessed from anywhere even outside of the class
            // 3) Protected - can only be accessed from the class and any onther that extends the class
        public $name;
        public $email;
    };
    // Instantiate new class model
    $person1 = new Person;
    // To access property of class
    $person1->name = 'Jack Smoke';
    $person1->email = 'jsomke@world.net';
    // Output to screen
    echo $person1->name;
    echo '<br>';
    echo $person1->email;
    echo '<br>';

    class Persons {
        // Access modifiers:
            // 2) Private - can only be accessed from within the class
            // 3) Protected - can only be accessed from the class and any onther that extends the class
        private $name;
        private $email;
        // Create static properties
        public static $ageLimit = 65;
        private static $minIncome = 3000;

        // Create constructor to set new class object details
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            // Magic method
            echo __CLASS__ . ' Created';
            echo '<br>';
        }

        // Deconstructor to unset a class object
        public function __destruct(){
            // Magic method
            echo __CLASS__ . ' Destroyed';
            echo '<br>';
        }

        // Create setters to access private properties
        public function setName($name){
            $this->name = $name;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        // Create getters to access private properties
        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }

        public static function getMinIncome(){
            return self::$minIncome;
        }
    };
    // Instantiate new class model
    $persons1 = new Persons('Max Maximillion', 'maxmax@millions.org');
    // To access property of class
    // $persons1->setName('Max Maximillion');
    // $persons1->setEmail('maxmax@millions.org');
    // Output to screen
    echo $persons1->getName();
    echo '<br>';
    echo $persons1->getEmail();
    echo '<br>';
    // Call static properties and static method - can be done even if person not instanciated
    echo Persons::$ageLimit;
    echo '<br>';
    echo Persons::getMinIncome();
    echo '<br>';

    // Inheretance
    class Customer extends Persons{
        private $balance;

        // Create constructor to set new class object details
        public function __construct($name, $email, $balance){
            // Call parent constructor
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            // Magic method
            echo 'A new ' . __CLASS__ . ' has been created';
            echo '<br>';
        }

        // Create setters to access private properties
        public function setBalance($balance){
            $this->balance = $balance;
        }
        public function getBalance(){
            return $this->balance;
        }
    };
    // Instantiate new class model
    $customer1 = new Customer('Fluffy Sammy', 'sammy@fluffed.com', 3000);
    // To access property of class
    // $persons1->setName('Max Maximillion');
    // $persons1->setEmail('maxmax@millions.org');
    // Output to screen
    echo $customer1->getName();
    echo '<br>';
    echo $customer1->getEmail();
    echo '<br>';
    echo $customer1->getBalance();
    echo '<br>';
?>