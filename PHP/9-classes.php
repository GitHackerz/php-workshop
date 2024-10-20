<?php

class Car {
    public $brand;
    public $model;

    public function drive() {
        echo "Driving $this->brand $this->model!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Corolla";
$myCar->drive();  // Output: Driving Toyota Corolla!

?>
