<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM laptops WHERE id = $id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Delete failed: " . mysqli_error($conn));
}

header("Location: index.php");
exit;