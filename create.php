<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Add Laptop</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card">

                <div class="card-body p-4">

                    <h2 class="mb-1">

                        <i class="bi bi-laptop text-primary"></i>

                        Add Laptop

                    </h2>

                    <p class="text-muted mb-4">
                        Enter the laptop information.
                    </p>


                    <form action="store.php" method="POST">


                        <div class="mb-3">

                            <label class="form-label">
                                Brand
                            </label>

                            <input
                                type="text"
                                name="brand"
                                class="form-control"
                                placeholder="e.g. ASUS"
                                required>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Model
                            </label>

                            <input
                                type="text"
                                name="model"
                                class="form-control"
                                placeholder="e.g. ROG Strix G16"
                                required>

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Processor
                            </label>

                            <input
                                type="text"
                                name="processor"
                                class="form-control"
                                placeholder="e.g. Intel Core i7"
                                required>

                        </div>


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
                                        placeholder="e.g. 16GB"
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
                                        min="0"
                                        required>

                                </div>

                            </div>

                        </div>


                        <div class="mb-4">

                            <label class="form-label">
                                Price
                            </label>

                            <input
                                type="number"
                                name="price"
                                class="form-control"
                                placeholder="65000"
                                step="0.01"
                                min="0"
                                required>

                        </div>


                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-primary">

                                <i class="bi bi-check-lg"></i>

                                Save Laptop

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