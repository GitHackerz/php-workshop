<?php

require_once '../../controllers/CarController.php';

$controller = new CarController();

$cars = $controller->findAll();

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $controller->delete($id);
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car List</title>
</head>
<body>
    <h1>car List</h1>
    <a href="add.php">Add car</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
            <tr>
                <td><?= $car['id'] ?></td>
                <td><?= $car['category'] ?></td>
                <td><?= $car['brand'] ?></td>
                <td><?= $car['model'] ?></td>
                <td>
                    <a href="update.php?id=<?= $car['id'] ?>">Update</a>
                    <a href="index.php?action=delete&id=<?= $car['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
