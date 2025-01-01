<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Watchlist | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>

            <div class="bg-dark pb-3">
                <div class="col-lg-6 offset-lg-3 mb-0 mt-3">
                    <div class="input-group">
                        <i class="bi bi-arrow-left-square text-white fs-1 position-absolute" style="margin-left: -48%; margin-top: -1%; cursor:pointer;" onclick="history.back();"></i>

                        <p class="text-warning fs-3 position-absolute d-none d-lg-flex" style="margin-left: -20%;">Watchlist</p>
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                        <ul class="dropdown-menu bg-black">
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Laptop</a></li>
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Computers</a></li>
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Mobile phone & accessories</a></li>
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Gaming</a></li>
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Photography</a></li>
                            <li class="bg-black border border-bottom border-1 border-secondary"><a class="dropdown-item text-white" href="store2.php">Wearable</a></li>
                        </ul>
                        <input type="text" class="form-control" />
                        <button class="btn btn-success col-3 col-lg-2" type="button">
                            <i class="bi bi-search text-white fw-bold"></i>
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <hr />
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-xxl-12 col-xl-7 col-md-11 col-xl-12">
                        <div class="row d-flex flex-row align-items-center justify-content-center">

                            <!-- card -->
                            <div class="bg-dark col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                            <!-- card -->
                            <div class="bg-dark col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                            <!-- card -->
                            <div class="bg-dark col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                            <!-- card -->
                            <div class="bg-dark col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                            <!-- card -->
                            <div class="bg-dark d-lg-flex d-none col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                            <!-- card -->
                            <div class="bg-dark d-none d-lg-flex col-xxl-5 col-xl-8 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard cartCard2">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

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
                                                <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                    Buy
                                                </span>
                                                <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                    Add to Cart
                                                </span>
                                                <span class="btn btn-outline-danger col-12 my-auto">
                                                    Remove
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
                                                        <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                            Buy
                                                        </span>
                                                        <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                            Add to Cart
                                                        </span>
                                                        <span class="btn btn-outline-danger col-12 my-auto">
                                                            Remove
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

                    <div class="row">
                        <div class="col-lg-12 d-flex d-lg-flex justify-content-center">

                            <nav aria-label="Page navigation" class="d-none d-lg-block">
                                <ul class="pagination pagination-lg">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <nav aria-label="Page navigation" class="d-block d-lg-none">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                </div>

            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

</body>

</html>