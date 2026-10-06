<?php

include 'db.php';

$sql = "SELECT * FROM laptops";
$result = mysqli_query($conn, $sql);

$totalProducts = mysqli_num_rows($result);

$totalStock = 0;

$laptops = [];

while ($laptop = mysqli_fetch_assoc($result)) {

    $laptops[] = $laptop;

    $totalStock += $laptop['stock'];
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Laptop Inventory</title>

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

    <!-- HEADER -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="page-title mb-1">

                <i class="bi bi-laptop text-primary"></i>

                Laptop Inventory

            </h1>

            <p class="text-muted mb-0">
                Manage your laptop products
            </p>

        </div>


        <a href="create.php" class="btn btn-primary">

            <i class="bi bi-plus-lg"></i>

            Add Laptop

        </a>

    </div>


    <!-- SUMMARY -->

    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <div class="card p-4">

                <div class="text-muted">
                    Total Products
                </div>

                <h2 class="mb-0">

                    <i class="bi bi-laptop text-primary"></i>

                    <?= $totalProducts ?>

                </h2>

            </div>

        </div>


        <div class="col-md-6">

            <div class="card p-4">

                <div class="text-muted">
                    Total Stock
                </div>

                <h2 class="mb-0">

                    <i class="bi bi-box-seam text-success"></i>

                    <?= $totalStock ?>

                </h2>

            </div>

        </div>

    </div>


    <!-- TABLE -->

    <div class="card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>

                            <th>Brand</th>

                            <th>Model</th>

                            <th>Processor</th>

                            <th>RAM</th>

                            <th>Price</th>

                            <th>Stock</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php if (count($laptops) > 0): ?>

                        <?php foreach ($laptops as $laptop): ?>

                            <tr>

                                <td>
                                    <?= $laptop['id'] ?>
                                </td>

                                <td>

                                    <strong>
                                        <?= htmlspecialchars($laptop['brand']) ?>
                                    </strong>

                                </td>

                                <td>
                                    <?= htmlspecialchars($laptop['model']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($laptop['processor']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($laptop['ram']) ?>
                                </td>

                                <td>

                                    ₱<?= number_format(
                                        $laptop['price'],
                                        2
                                    ) ?>

                                </td>

                                <td>

                                    <?php if ($laptop['stock'] == 0): ?>

                                        <span class="badge bg-danger">
                                            Out of Stock
                                        </span>

                                    <?php elseif ($laptop['stock'] <= 5): ?>

                                        <span class="badge bg-warning text-dark">
                                            <?= $laptop['stock'] ?> left
                                        </span>

                                    <?php else: ?>

                                        <span class="badge bg-success">
                                            <?= $laptop['stock'] ?> available
                                        </span>

                                    <?php endif; ?>

                                </td>

                                <td>

                                    <a
                                        href="edit.php?id=<?= $laptop['id'] ?>"
                                        class="btn btn-sm btn-warning">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <a
                                        href="delete.php?id=<?= $laptop['id'] ?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this laptop?')">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="8"
                                class="text-center py-5">

                                <i class="bi bi-inbox fs-1 text-muted"></i>

                                <p class="text-muted mt-2">
                                    No laptops found.
                                </p>

                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>