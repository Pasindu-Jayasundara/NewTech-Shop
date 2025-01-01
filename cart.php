<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart | New Tech</title>

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

                        <p class="text-warning fs-3 position-absolute" style="margin-left: -20%;">Cart</p>
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

                <!-- with product -->
                <div class="row">

                    <div class="col-xxl-8 col-xl-7 col-md-11 col-xl-8">
                        <div class="row">

                            <!-- summery none & small & medium -->
                            <div class="col-10 col-md-8 d-flex d-lg-none d-xxl-none sumCard">
                                <div class="card text-bg-dark mb-3 col-12 border border-1 border-light" style="margin-left: 40px;">
                                    <div class="card-header pt-3 pb-0 fw-bold fs-3">Summary</div>
                                    <hr class="col-12" />
                                    <div class="px-3">
                                        <h5 class="card-title fs-6">Items (3)
                                            <span class="float-end">Rs. 300000 .00</span>
                                        </h5>
                                        <h5 class="card-title fs-6">Shipping
                                            <span class="float-end">Rs. 2500 .00</span>
                                        </h5>
                                        <div class="mt-4 mb-3">
                                            <input type="text" class="col-8 rounded p-1 px-3" placeholder="Enter Voucher Code" />
                                            <span class="input-group-text col-3 btn btn-primary">Apply</span>
                                        </div>
                                        <h5 class="card-title fs-6 mt-4">Total
                                            <span class="float-end">Rs. 2500 .00</span>
                                        </h5>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <button class="btn btn-warning col-10 my-3" onclick="window.location='checkout.php';">CHECKOUT</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr class="col-12 mx-md-5 d-lg-none d-xl-none d-xxl-none" />
                            <!-- summery none & small & medium -->

                            <!-- card -->
                            <div class="bg-dark col-xxl-11 col-xl-11 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

                                    <!-- xxl & large & xl & xxl -->
                                    <div class="col-12 col-md-11 col-lg-12 col-xl-11 d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex flex-xxl-row mx-0 px-2 mb-3 ">
                                        <div class="mx-1 d-xxl-flex flex-xxl-row align-items-xxl-center justify-content-xxl-center">
                                            <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                        </div>
                                        <img src="resources/lap2.png" class="col-xxl-3 col-xl-2 col-5 col-md-2 col-lg-2 col-xl-2 mx-2 rounded text-white" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                        <div class="col-xxl-4 col-lg-3 col-xl-4 text-break px-3 py-2">
                                            <p class="fs-4 fw-bold">Samsung A21s</p>
                                            <span class="fs-6 py-0 d-block">Color: Black</span>
                                            <span class="fs-6 py-0">Worenty : 5 years</span>
                                        </div>
                                        <div class="col-3 px-3 py-2 d-flex flex-row">
                                            <div class="row">
                                                <span class="text-warning">Rs. 100000 .00</span>
                                                <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                <span class="text-info">-50%</span>
                                                <span class="btn btn-outline-success col-5 mx-2">
                                                    <i class="bi bi-heart-fill"></i>
                                                </span>
                                                <span class="btn btn-outline-danger col-5">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xxl-3 px-xxl-0 col-md-4 d-flex align-items-center justify-content-center">
                                            <div class="input-group mb-3 mx-4" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                <input type="text" class="col-4 text-center" value="10" readonly>
                                                <span class="input-group-text" style="cursor:pointer;">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- xxl & large & xl & xxl -->

                                    <!-- none & small & medium -->
                                    <div class="card mb-3 d-flex d-sm-block d-md-flex d-lg-none d-xl-none d-xxl-none text-white bg-dark" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <img src="resources/phone.png" class="img-fluid rounded-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                                <div class="col-xxl-3 text-break px-3 py-2 ">
                                                    <p class="fs-4 fw-bold">Samsung A21s</p>
                                                    <span class="fs-6 py-0 d-block">Color: Black</span>
                                                    <span class="fs-6 py-0">Worenty : 5 years</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mx-1 d-flex flex-row align-items-center justify-content-end">
                                                    <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12 px-3 py-2 d-flex flex-row">
                                                        <div class="row">
                                                            <span class="text-warning">Rs. 100000 .00</span>
                                                            <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                            <span class="text-info">-50%</span>
                                                            <div class="d-inline-block mt-4" style="margin-left: -15px; margin-bottom: -15px;">
                                                                <div class="input-group mb-3 mx-4 " tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                                    <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                                    <input type="text" class="col-4 text-center" value="10" readonly>
                                                                    <span class="input-group-text" style="cursor:pointer;">+</span>
                                                                </div>
                                                            </div>
                                                            <span class="btn btn-outline-success col-12 mx-2 mt-3" style="margin-bottom: -8px;">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </span>
                                                            <span class="btn btn-outline-danger col-12 mx-2 mt-3" style="margin-bottom: -25px;">
                                                                <i class="bi bi-trash"></i>
                                                            </span>
                                                        </div>
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
                            <div class="bg-dark col-xxl-11 col-xl-11 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

                                    <!-- xxl & large & xl & xxl -->
                                    <div class="col-12 col-md-11 col-lg-12 col-xl-11 d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex flex-xxl-row mx-0 px-2 mb-3 ">
                                        <div class="mx-1 d-xxl-flex flex-xxl-row align-items-xxl-center justify-content-xxl-center">
                                            <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                        </div>
                                        <img src="resources/lap2.png" class="col-xxl-3 col-xl-2 col-5 col-md-2 col-lg-2 col-xl-2 mx-2 rounded text-white" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                        <div class="col-xxl-4 col-lg-3 col-xl-4 text-break px-3 py-2">
                                            <p class="fs-4 fw-bold">Samsung A21s</p>
                                            <span class="fs-6 py-0 d-block">Color: Black</span>
                                            <span class="fs-6 py-0">Worenty : 5 years</span>
                                        </div>
                                        <div class="col-3 px-3 py-2 d-flex flex-row">
                                            <div class="row">
                                                <span class="text-warning">Rs. 100000 .00</span>
                                                <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                <span class="text-info">-50%</span>
                                                <span class="btn btn-outline-success col-5 mx-2">
                                                    <i class="bi bi-heart-fill"></i>
                                                </span>
                                                <span class="btn btn-outline-danger col-5">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xxl-3 px-xxl-0 col-md-4 d-flex align-items-center justify-content-center">
                                            <div class="input-group mb-3 mx-4" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                <input type="text" class="col-4 text-center" value="10" readonly>
                                                <span class="input-group-text" style="cursor:pointer;">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- xxl & large & xl & xxl -->

                                    <!-- none & small & medium -->
                                    <div class="card mb-3 d-flex d-sm-block d-md-flex d-lg-none d-xl-none d-xxl-none text-white bg-dark" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <img src="resources/phone.png" class="img-fluid rounded-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                                <div class="col-xxl-3 text-break px-3 py-2 ">
                                                    <p class="fs-4 fw-bold">Samsung A21s</p>
                                                    <span class="fs-6 py-0 d-block">Color: Black</span>
                                                    <span class="fs-6 py-0">Worenty : 5 years</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mx-1 d-flex flex-row align-items-center justify-content-end">
                                                    <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12 px-3 py-2 d-flex flex-row">
                                                        <div class="row">
                                                            <span class="text-warning">Rs. 100000 .00</span>
                                                            <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                            <span class="text-info">-50%</span>
                                                            <div class="d-inline-block mt-4" style="margin-left: -15px; margin-bottom: -15px;">
                                                                <div class="input-group mb-3 mx-4 " tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                                    <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                                    <input type="text" class="col-4 text-center" value="10" readonly>
                                                                    <span class="input-group-text" style="cursor:pointer;">+</span>
                                                                </div>
                                                            </div>
                                                            <span class="btn btn-outline-success col-12 mx-2 mt-3" style="margin-bottom: -8px;">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </span>
                                                            <span class="btn btn-outline-danger col-12 mx-2 mt-3" style="margin-bottom: -25px;">
                                                                <i class="bi bi-trash"></i>
                                                            </span>
                                                        </div>
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
                            <div class="bg-dark col-xxl-11 col-xl-11 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

                                    <!-- xxl & large & xl & xxl -->
                                    <div class="col-12 col-md-11 col-lg-12 col-xl-11 d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex flex-xxl-row mx-0 px-2 mb-3 ">
                                        <div class="mx-1 d-xxl-flex flex-xxl-row align-items-xxl-center justify-content-xxl-center">
                                            <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                        </div>
                                        <img src="resources/lap2.png" class="col-xxl-3 col-xl-2 col-5 col-md-2 col-lg-2 col-xl-2 mx-2 rounded text-white" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                        <div class="col-xxl-4 col-lg-3 col-xl-4 text-break px-3 py-2">
                                            <p class="fs-4 fw-bold">Samsung A21s</p>
                                            <span class="fs-6 py-0 d-block">Color: Black</span>
                                            <span class="fs-6 py-0">Worenty : 5 years</span>
                                        </div>
                                        <div class="col-3 px-3 py-2 d-flex flex-row">
                                            <div class="row">
                                                <span class="text-warning">Rs. 100000 .00</span>
                                                <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                <span class="text-info">-50%</span>
                                                <span class="btn btn-outline-success col-5 mx-2">
                                                    <i class="bi bi-heart-fill"></i>
                                                </span>
                                                <span class="btn btn-outline-danger col-5">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xxl-3 px-xxl-0 col-md-4 d-flex align-items-center justify-content-center">
                                            <div class="input-group mb-3 mx-4" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                <input type="text" class="col-4 text-center" value="10" readonly>
                                                <span class="input-group-text" style="cursor:pointer;">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- xxl & large & xl & xxl -->

                                    <!-- none & small & medium -->
                                    <div class="card mb-3 d-flex d-sm-block d-md-flex d-lg-none d-xl-none d-xxl-none text-white bg-dark" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <img src="resources/phone.png" class="img-fluid rounded-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                                <div class="col-xxl-3 text-break px-3 py-2 ">
                                                    <p class="fs-4 fw-bold">Samsung A21s</p>
                                                    <span class="fs-6 py-0 d-block">Color: Black</span>
                                                    <span class="fs-6 py-0">Worenty : 5 years</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mx-1 d-flex flex-row align-items-center justify-content-end">
                                                    <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" checked />
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12 px-3 py-2 d-flex flex-row">
                                                        <div class="row">
                                                            <span class="text-warning">Rs. 100000 .00</span>
                                                            <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                            <span class="text-info">-50%</span>
                                                            <div class="d-inline-block mt-4" style="margin-left: -15px; margin-bottom: -15px;">
                                                                <div class="input-group mb-3 mx-4 " tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                                    <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                                    <input type="text" class="col-4 text-center" value="10" readonly>
                                                                    <span class="input-group-text" style="cursor:pointer;">+</span>
                                                                </div>
                                                            </div>
                                                            <span class="btn btn-outline-success col-12 mx-2 mt-3" style="margin-bottom: -8px;">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </span>
                                                            <span class="btn btn-outline-danger col-12 mx-2 mt-3" style="margin-bottom: -25px;">
                                                                <i class="bi bi-trash"></i>
                                                            </span>
                                                        </div>
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
                            <div class="bg-dark col-xxl-11 col-xl-11 col-11 col-sm-9 col-md-10 text-white border border-1 border-light rounded mb-4 cartCard">
                                <div class="row d-flex flex-column">
                                    <div class="col-12 fs-6">
                                        Seller : Kamal
                                        <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                    </div>
                                    <hr class="col-12" />

                                    <!-- xxl & large & xl & xxl -->
                                    <div class="col-12 col-md-11 col-lg-12 col-xl-11 d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex flex-xxl-row mx-0 px-2 mb-3 ">
                                        <div class="mx-1 d-xxl-flex flex-xxl-row align-items-xxl-center justify-content-xxl-center">
                                            <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" />
                                        </div>
                                        <img src="resources/lap2.png" class="col-xxl-3 col-xl-2 col-5 col-md-2 col-lg-2 col-xl-2 mx-2 rounded text-white" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                        <div class="col-xxl-4 col-lg-3 col-xl-4 text-break px-3 py-2">
                                            <p class="fs-4 fw-bold">Samsung A21s</p>
                                            <span class="fs-6 py-0 d-block">Color: Black</span>
                                            <span class="fs-6 py-0">Worenty : 5 years</span>
                                        </div>
                                        <div class="col-3 px-3 py-2 d-flex flex-row">
                                            <div class="row">
                                                <span class="text-warning">Rs. 100000 .00</span>
                                                <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                <span class="text-info">-50%</span>
                                                <span class="btn btn-outline-success col-5 mx-2">
                                                    <i class="bi bi-heart-fill"></i>
                                                </span>
                                                <span class="btn btn-outline-danger col-5">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xxl-3 px-xxl-0 col-md-4 d-flex align-items-center justify-content-center">
                                            <div class="input-group mb-3 mx-4" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                <input type="text" class="col-4 text-center" value="10" readonly>
                                                <span class="input-group-text" style="cursor:pointer;">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- xxl & large & xl & xxl -->

                                    <!-- none & small & medium -->
                                    <div class="card mb-3 d-flex d-sm-block d-md-flex d-lg-none d-xl-none d-xxl-none text-white bg-dark" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <img src="resources/phone.png" class="img-fluid rounded-start" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Description" title="Product Details" />
                                                <div class="col-xxl-3 text-break px-3 py-2 ">
                                                    <p class="fs-4 fw-bold">Samsung A21s</p>
                                                    <span class="fs-6 py-0 d-block">Color: Black</span>
                                                    <span class="fs-6 py-0">Worenty : 5 years</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mx-1 d-flex flex-row align-items-center justify-content-end">
                                                    <input type="checkbox" style="cursor: pointer;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Select This Item" />
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-12 px-3 py-2 d-flex flex-row">
                                                        <div class="row">
                                                            <span class="text-warning">Rs. 100000 .00</span>
                                                            <span class="text-decoration-line-through">Rs. 2500000. 00</span>
                                                            <span class="text-info">-50%</span>
                                                            <div class="d-inline-block mt-4" style="margin-left: -15px; margin-bottom: -15px;">
                                                                <div class="input-group mb-3 mx-4 " tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Quantity">
                                                                    <span class="input-group-text" style="margin-left: 10px; cursor:pointer;">-</span>
                                                                    <input type="text" class="col-4 text-center" value="10" readonly>
                                                                    <span class="input-group-text" style="cursor:pointer;">+</span>
                                                                </div>
                                                            </div>
                                                            <span class="btn btn-outline-success col-12 mx-2 mt-3" style="margin-bottom: -8px;">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </span>
                                                            <span class="btn btn-outline-danger col-12 mx-2 mt-3" style="margin-bottom: -25px;">
                                                                <i class="bi bi-trash"></i>
                                                            </span>
                                                        </div>
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

                    <!-- summery xxl & large & xl -->
                    <div class="col-xxl-4 col-lg-8 col-xl-4 d-none d-lg-flex d-xxl-block sumCard">
                        <div class="card text-bg-dark mb-3 col-12 col-xl-10 border border-1 border-light" style="margin-left: 40px;">
                            <div class="card-header pt-3 pb-0 fw-bold fs-3">Summary</div>
                            <hr class="col-12" />
                            <div class="px-3">
                                <h5 class="card-title fs-6">Items (3)
                                    <span class="float-end">Rs. 300000 .00</span>
                                </h5>
                                <h5 class="card-title fs-6">Shipping
                                    <span class="float-end">Rs. 2500 .00</span>
                                </h5>
                                <div class="mt-4 mb-3">
                                    <input type="text" class="col-8 rounded p-1 px-3" placeholder="Enter Voucher Code" />
                                    <span class="input-group-text col-3 btn btn-primary">Apply</span>
                                </div>
                                <h5 class="card-title fs-6 mt-4">Total
                                    <span class="float-end">Rs. 2500 .00</span>
                                </h5>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button class="btn btn-warning col-10 my-3" onclick="window.location='checkout.php';">CHECKOUT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- summery xxl & large & xl-->
                </div>
                <!-- width product -->

                <!-- empty view -->
                <div class="row d-none">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 emptyCart"></div>
                            <div class="col-12 text-center mt-3 mb-2">
                                <label class="form-label fs-1 fw-bold">
                                    You have no items in your Cart yet.
                                </label>
                            </div>
                            <div class="offset-lg-4 col-12 col-lg-4 d-grid mb-3">
                                <a href="store.php" class="btn btn-outline-info fs-3 fw-bold">
                                    Start Shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- empty view -->

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