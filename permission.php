<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Product Manage | Permission | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">

        <form class="row g-3 needs-validation mt-4" novalidate>
            <!-- <p>Seller Info</p> -->
            <div class="col-md-6 ">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" required />
            </div>
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" required />
            </div>
            <div class="col-md-4">
                <label class="form-label">Category</label>
                <select class="form-select" required>
                    <option>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Brand</label>
                <select class="form-select" required>
                    <option>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Model</label>
                <select class="form-select" required>
                    <option>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5 mb-4">
                <button class="btn btn-success col-6 d-grid" type="submit">Search</button>
            </div>
        </form>

        <hr />

        <!-- card -->
        <div class="col-12 d-flex ">

            <!-- card -->
            <div class="bg-dark  d-lg-flex col-xxl-11 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                <div class="row d-flex flex-column">
                    <div class="col-12 fs-6">
                        Seller : Kamal
                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                    </div>
                    <hr class="col-11 ms-3" />

                    <!-- xxl & large & xl & xxl -->
                    <div class="col-12 col-md-11 col-lg-12 col-xl-11 d-none d-sm-none d-md-none d-lg-flex flex-lg-row d-xl-flex d-xxl-flex flex-xxl-row mx-0 px-2 mb-3 ">

                        <img src="resources/lap2.png" class="col-xxl-4 col-xl-4 col-5 col-md-2 col-lg-4 col-xl-2 mx-2 rounded text-white" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                        <div class="col-xxl-5 col-lg-4 col-xl-5 text-break px-3 py-2">
                            <p class="fs-4 fw-bold">Samsung A21s</p>
                            <span class="fs-6 py-0 d-block">Color: Black</span>
                            <span class="fs-6 py-0 d-block">Contidition: Brandnew</span>
                            <span class="fs-6 py-0 d-block">Stock : 10 Items Availiable</span>
                            <span class="fs-6 py-0 d-block">Price : Rs. 100000 .00</span>
                            <span class="fs-6 py-0">Worenty : 5 years</span>
                        </div>
                        <div class="col-3 px-3 py-2 d-flex flex-column mx-2">
                            <div class="row">
                                <span class="btn btn-outline-danger col-12 my-auto mb-2">
                                    Deactive
                                </span>
                                <span class="btn btn-outline-info col-12 my-auto" onclick="window.location='singleProductView.php';">
                                    View
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- xxl & large & xl & xxl -->

                    <!-- none & small & medium -->
                    <div class="card mb-3 d-flex d-sm-block d-md-flex d-lg-none d-xl-none d-xxl-none text-white bg-dark" style="max-width: 540px;">
                        <div class="row g-0 d-flex flex-column">
                            <div class="col-6 d-flex flex-row">
                                <img src="resources/phone.png" class="img-fluid rounded-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />

                                <div class="col-12 px-3 py-2 d-flex flex-row">
                                    <div class="row">
                                        <span class="btn btn-outline-danger col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                            Deactive
                                        </span>
                                        <span class="btn btn-outline-info col-12 my-auto mb-2" onclick="window.location='singleProductView.php';">
                                            view
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-inline-block">
                                <div class="card-body">

                                    <div class="col-xxl-3 text-break px-3 py-2 ">
                                        <p class="fs-4 fw-bold">Samsung A21s</p>
                                        <span class="fs-6 py-0 d-block">Color: Black</span>
                                        <span class="fs-6 py-0 d-block">Contidition: Brandnew</span>
                                        <span class="fs-6 py-0 d-block">Stock : 10 Items Availiable</span>
                                        <span class="fs-6 py-0 d-block">Price : Rs. 100000 .00</span>
                                        <span class="fs-6 py-0">Worenty : 5 years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- none & small & medium -->

                </div>
            </div>
            <!-- card -->

        </div>

    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>