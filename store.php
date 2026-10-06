<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$brand = $_POST['brand'];
$model = $_POST['model'];
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "INSERT INTO laptops
        (brand, model, processor, ram, price, stock)
        VALUES
        ('$brand', '$model', '$processor', '$ram', '$price', '$stock')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Insert failed: " . mysqli_error($conn));
}

header("Location: index.php");
exit;