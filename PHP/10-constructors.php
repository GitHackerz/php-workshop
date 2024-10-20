<?php

class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Hello, $this->name!";
    }

    public function __destruct() {
        echo "Goodbye, $this->name!";
    }
}

$person = new Person("John");
// Output: Hello, John!
// Destructor is automatically called at the end.

?>
