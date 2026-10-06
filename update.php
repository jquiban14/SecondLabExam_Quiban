<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$id = $_POST['id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "UPDATE laptops SET
        brand = '$brand',
        model = '$model',
        processor = '$processor',
        ram = '$ram',
        price = '$price',
        stock = '$stock'
        WHERE id = $id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Update failed: " . mysqli_error($conn));
}

header("Location: index.php");
exit;