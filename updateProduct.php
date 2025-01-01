<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Product | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="semantic.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>

            <div class="col-12 d-flex justify-content-center my-3">
                <p class="fs-1 text-warning">Update Product</p>
            </div>

            <div class="col-12">
                <i class="bi bi-arrow-left-square text-white d-none d-lg-flex position-absolute mx-4 fs-1" style="cursor: pointer; margin-top: -3%;" onclick="window.location='myProduct.php';"></i>
                <div class="row d-flex justify-content-center align-items-center">



                    <div class="col-lg-7 col-11 border border-1 border-white rounded p-4 mb-5">

                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Category</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Brand</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Model</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fs-5">Title</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Product Condition</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Product Colour</label>
                                <select class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="d-flex mt-2">
                                    <input type="text" class="form-control me-2" placeholder="Add colour" />
                                    <span class="btn btn-outline-success col-3 d-grid">Add</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Product Quantity</label>
                                <input type="number" value="1" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Delivery Cost Within your City</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fs-5">Delivery Cost Out-of your City</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rs.</span>
                                    <input type="text" class="form-control" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label fs-5">Description</label>
                                <textarea cols="125" rows="10" class="text-warning bg-dark rounded col-12"></textarea>
                            </div>
                            <div class="col-12 d-flex">
                                <img src="resources/phone.png" class="img-thumbnail col-4" />
                                <img src="resources/phone2.png" class="img-thumbnail col-4" />
                                <img src="resources/lap2.png" class="img-thumbnail col-4" />
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-outline-success col-6 d-grid" type="submit"><label for="ui"> Update Images </label></button>
                                <input type="file" id="ui" hidden/>
                            </div>
                            <div class="col-12">
                                <hr class="col-12" />
                            </div>

                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-success col-6 d-grid" type="submit">Update Product</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>