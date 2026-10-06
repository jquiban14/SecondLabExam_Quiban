<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "laptop_crud"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}