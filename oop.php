<?php

class Person{
    private $name; //can access anywhere, not just in this class
    // private $email; //can only be accessed inside this class
    private $email;
    private static $ageLimit = 40; 

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        
        echo __CLASS__.' created: ' . '<br/>';
    }
    
    public function __destruct(){
        echo __CLASS__.' destroyed.<br>';
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public static function getAgeLimit(){
        return self::$ageLimit;
    }
}

echo Person::getAgeLimit();
// echo Person::$ageLimit;

// $person1 = new Person('John Stamos', 'jstamos@fh.com');

// $person1->setName('John Stamos');
// $person1->setEmail('UncleJessie@fullhouse.org');

// echo '<br /><em>';
// echo $person1->getName();
// echo '<br />';
// echo $person1->getEmail();
// echo '</em><br />';

class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo 'a new '.__CLASS__.' has been created.';
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance.'<br>';
    }
}

$customer1 = new Customer('Dave Coulier', 'dc@fh.com', 2000);

// echo $customer1->getBalance();