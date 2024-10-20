<?php

require_once '../../controllers/CarController.php';
require_once '../../models/Car.php';

if (isset($_POST['category']) && isset($_POST['brand']) && isset($_POST['model'])) {
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $car = new Car(0, $category, $brand, $model);
    $controller = new CarController();
    $controller->update($_GET['id'], $car);
    header('Location: index.php');
}

else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new CarController();
    $car =  $controller->findById($id);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Car</title>
    </head>

    <body>
        <h1>Update Car</h1>
        <form method="POST" action="update.php?id=<?=$id?>">

            <label for="category">Category</label>
            <input type="text" name="category" placeholder="Enter Category" value="<?= $car['category'] ?>" required>

            <br>
            <br>

            <label for="brand">Brand</label>
            <input type="text" name="brand" placeholder="Enter Brand" value="<?= $car['brand'] ?>" required>

            <br>
            <br>

            <label for="model">Model</label>
            <input type="text" name="model" placeholder="Enter Model" value="<?= $car['model'] ?>" required value="">
            <br>
            <br>

            <button type="submit">Update Car</button>
        </form>
        <a href="index.php">Back to Cars List</a>
    </body>

    </html>
<?php

} 