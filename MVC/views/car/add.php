<?php

require_once '../../controllers/CarController.php';
require_once '../../models/Car.php';

if (isset($_POST['category']) && isset($_POST['brand']) && isset($_POST['model'])) {
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $car = new Car(0, $category, $brand, $model);
    $controller = new CarController();
    $controller->create($car);
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
</head>
<body>
    <h1>Add Car</h1>
    <form method="POST" action="add.php">
        <label for="category">Category</label>
        <input type="text" name="category" placeholder="Enter Category" required>
        
        <br>
        <br>

        <label for="brand">Brand</label>
        <input type="text" name="brand" placeholder="Enter Brand" required>
        
        <br>
        <br>
        
        <label for="model">Model</label>
        <input type="text" name="model" placeholder="Enter Model" required>
        <br>
        <br>

        <button type="submit">Add Car</button>
    </form>
    <a href="/simple_mvc_app/public/index.php">Back to Cars List</a>
</body>
</html>
