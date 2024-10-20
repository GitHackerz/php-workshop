<?php

class Animal {
    public $name;  // Accessible anywhere
    private $age;  // Accessible only within the class

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$dog = new Animal();
$dog->name = "Doggo";  // Allowed
$dog->setAge(5);  // Indirect access through a method

?>
