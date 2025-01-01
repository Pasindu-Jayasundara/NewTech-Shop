<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Advanced Search | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="semantic.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white ">
            <?php include "header.php"; ?>

            <div class="col-12">

                <div class="row bg-dark">
                    <div class="col-lg-6 offset-lg-3 mb-2">

                        <div class="input-group">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">Computers</a></li>
                                <li><a class="dropdown-item" href="#">Mobile phone & accessories</a></li>
                                <li><a class="dropdown-item" href="#">Gaming</a></li>
                                <li><a class="dropdown-item" href="#">Photography</a></li>
                                <li><a class="dropdown-item" href="#">Wearable</a></li>
                            </ul>
                            <input type="text" class="form-control" />
                            <button class="btn btn-success col-3 col-lg-2" type="button">
                                <i class="bi bi-search text-white fw-bold"></i>
                            </button>

                        </div>

                    </div>
                    <div class="col-12 col-sm-7 col-lg-3 mb-2 mb-lg-0 offset-3 offset-sm-4 offset-lg-0" style="cursor: pointer;">
                        <a class="text-white mx-4 btn btn-outline-danger" href="store.php">Go to Store</a>
                    </div>
                </div>

                <div class="row d-lg-flex flex-lg-row d-flex flex-column my-4">
                    <div class="col-12 col-lg-3 mx-0 mx-lg-5 mb-3 mb-lg-0">

                        <p class="fs-2">Advanced Search</p>
                        <div class="border border-1 border-white rounded p-4">
                            <form class="d-flex mt-3" role="search">
                                <p class="fs-3 fs-lg-3 text-warning">Sort :</p>
                            </form>

                            <div class="m-3 px-5">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Added Time</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Newest to Oldest</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Oldest to Newest</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Condition</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Brandnew</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Used</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Quantity</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>High to Low</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Low to High</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10 mb-4">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Price</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>High to Low</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" type="radio">
                                            <span>Low to High</span>
                                        </span>

                                    </li>

                                </ul>

                            </div>

                            <div class="input-group mb-3 d-block">
                                <a class="nav-link text-info fs-5 mb-2" aria-current="page" href="#">Price Range :</a>
                                <span class="ms-4">From :</span>
                                <form class="d-flex ms-5" role="search">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </form>
                                <span class="pt-1 ms-4">To :</span>
                                <form class="d-flex ms-5" role="search">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rs.</span>
                                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="col-11 col-lg-6 border border-1 ms-4 ms-lg-0 border-white rounded d-lg-flex flex-lg-column align-items-lg-start justify-content-lg-center bg-dark py-3">

                        <!-- card -->
                        <div class="card mb-3 text-white bg-black " style="max-width: 740px;">
                            <div class="row d-flex flex-row d-lg-flex flex-lg-column">
                                <div class="col-12 fs-6 pt-3 px-4">
                                    Seller : Kamal
                                    <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                </div>
                                <span class="col-12 d-flex">
                                    <hr class="col-12" />
                                </span>

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
                                    <div class="col-3 px-3 py-2 d-flex flex-column mx-2 ">
                                        <div class="row">
                                            <span class="btn btn-outline-success col-12 my-auto mb-2" onclick="window.location='checkout.php';">
                                                Buy
                                            </span>
                                            <span class="btn btn-outline-warning col-12 my-auto mb-2">
                                                Add to Cart
                                            </span>
                                            <span class="btn btn-outline-danger col-12 my-auto">
                                                Add to Wishlist
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
                                                    <span class="btn btn-outline-success col-12 my-auto mb-2">
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
                        <div class="card mb-3 text-white bg-black" style="max-width: 740px;">
                            <div class="row d-flex flex-column">
                                <div class="col-12 fs-6 pt-3 px-4">
                                    Seller : Kamal
                                    <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                </div>
                                <span class="col-12 d-flex">
                                    <hr class="col-12" />
                                </span>

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
                                                Add to Wishlist
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
                                                    <span class="btn btn-outline-success col-12 my-auto mb-2">
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
                        <div class="card mb-3 text-white bg-black" style="max-width: 740px;">
                            <div class="row d-flex flex-column">
                                <div class="col-12 fs-6 pt-3 px-4">
                                    Seller : Kamal
                                    <p class="card-text float-end"><small class="text-white-50">Added 3 mins ago</small></p>
                                </div>
                                <span class="col-12 d-flex">
                                    <hr class="col-12" />
                                </span>

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
                                                Add to Wishlist
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
                                                    <span class="btn btn-outline-success col-12 my-auto mb-2">
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

                        <!-- pagination -->
                        <div class="col-12 d-flex justify-content-center mt-3">
                            <nav aria-label="Page navigation example" class="text-white">
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

</body>

</html>