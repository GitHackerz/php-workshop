<?php

require_once __DIR__."/../config/database.php";

class CarController
{
    protected $db;
 
    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function create(Car $car)
    {
        $sql = "INSERT INTO car (category, brand, model) VALUES (:category, :brand, :model)";
        $stmt = $this->db->prepare($sql);

        $category = $car->getCategory();
        $brand = $car->getBrand();
        $model = $car->getModel();


        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':brand', $brand);
        $stmt->bindParam(':model', $model);

        try {
            $stmt->execute();

            echo "Car Created";
        } catch (Exception $e) {
            die("Exception: " . $e->getMessage());
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM car";
        $stmt = $this->db->prepare($sql);
        try {
            $stmt->execute();
            $cars = $stmt->fetchAll();
            return $cars;
        } catch (Exception $e) {
            die("Exception: " . $e->getMessage());
        }
    }

    public function findById($id): mixed
    {
        $sql = "SELECT * FROM car where id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        try {
            $stmt->execute();
            $car = $stmt->fetch();
            return $car;
        } catch (Exception $e) {
            die("Exception: " . $e->getMessage());
        }
    }

    public function update($id, $car)
    {
        $sql = "UPDATE car SET category = :category, brand = :brand, model = :model WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':category', $car->getCategory());
        $stmt->bindParam(':brand', $car->getBrand());
        $stmt->bindParam(':model', $car->getModel());
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
        } catch (Exception $e) {
            die("Exception: " . $e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM car where id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
        } catch (Exception $e) {
            die("Exception: " . $e->getMessage());
        }
    }

}
