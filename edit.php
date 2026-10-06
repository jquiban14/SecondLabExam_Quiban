<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM laptops WHERE id = $id";

$result = mysqli_query($conn, $sql);

$laptop = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Edit Laptop</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card">

                <div class="card-body p-4">

                    <!-- HEADER -->

                    <div class="mb-4">

                        <h2 class="mb-1">

                            <i class="bi bi-pencil-square text-warning"></i>

                            Edit Laptop

                        </h2>

                        <p class="text-muted mb-0">

                            Update the laptop information below.

                        </p>

                    </div>


                    <!-- FORM -->

                    <form action="update.php" method="POST">

                        <!-- ID -->

                        <input
                            type="hidden"
                            name="id"
                            value="<?= $laptop['id'] ?>">


                        <!-- BRAND -->

                        <div class="mb-3">

                            <label class="form-label">
                                Brand
                            </label>

                            <input
                                type="text"
                                name="brand"
                                class="form-control"
                                value="<?= htmlspecialchars($laptop['brand']) ?>"
                                required>

                        </div>


                        <!-- MODEL -->

                        <div class="mb-3">

                            <label class="form-label">
                                Model
                            </label>

                            <input
                                type="text"
                                name="model"
                                class="form-control"
                                value="<?= htmlspecialchars($laptop['model']) ?>"
                                required>

                        </div>


                        <!-- PROCESSOR -->

                        <div class="mb-3">

                            <label class="form-label">
                                Processor
                            </label>

                            <input
                                type="text"
                                name="processor"
                                class="form-control"
                                value="<?= htmlspecialchars($laptop['processor']) ?>"
                                required>

                        </div>


                        <!-- RAM + STOCK -->

                        <div class="row">

                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        RAM
                                    </label>

                                    <input
                                        type="text"
                                        name="ram"
                                        class="form-control"
                                        value="<?= htmlspecialchars($laptop['ram']) ?>"
                                        required>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Stock
                                    </label>

                                    <input
                                        type="number"
                                        name="stock"
                                        class="form-control"
                                        value="<?= $laptop['stock'] ?>"
                                        min="0"
                                        required>

                                </div>

                            </div>

                        </div>


                        <!-- PRICE -->

                        <div class="mb-4">

                            <label class="form-label">
                                Price
                            </label>

                            <input
                                type="number"
                                name="price"
                                class="form-control"
                                value="<?= $laptop['price'] ?>"
                                step="0.01"
                                min="0"
                                required>

                        </div>


                        <!-- BUTTONS -->

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-warning">

                                <i class="bi bi-check-lg"></i>

                                Update Laptop

                            </button>


                            <a
                                href="index.php"
                                class="btn btn-secondary">

                                <i class="bi bi-arrow-left"></i>

                                Back

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>