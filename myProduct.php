<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Product | New Tech</title>

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

            <div class="col-12">
                <div class="row d-lg-flex flex-lg-row d-flex flex-column align-items-center align-items-lg-start my-4">
                    <div class="col-lg-3 col-12 mx-lg-5 mx-0">

                        <i class="bi bi-arrow-left-square text-white fs-1 d-none d-lg-flex" style="cursor:pointer;" onclick="history.back();"></i>

                        <p class="fs-2">My Products</p>
                        <div class="border border-1 border-white rounded p-4">
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <div class="m-3 px-5">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Added Time</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="t" type="radio">
                                            <span>Newest to Oldest</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="t" type="radio">
                                            <span>Oldest to Newest</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Condition</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="c" type="radio">
                                            <span>Brandnew</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="c" type="radio">
                                            <span>Used</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10 mb-4">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Quantity</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="q" type="radio">
                                            <span>High to Low</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="q" type="radio">
                                            <span>Low to High</span>
                                        </span>
                                    </li>
                                </ul>


                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-11 border mt-2 mt-lg-0 border-1 border-white rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <div class="card mb-3" style="max-width: 740px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/phone.png" class="img-fluid rounded-start" style="height: 100%;" />
                                </div>
                                <div class="col-md-8 d-flex text-white bg-black px-4">
                                    <div class="card-body border border-0 border-end border-dark">
                                        <h5 class="card-title text-warning fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                        <div class="form-check form-switch mt-3">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label text-info" for="flexSwitchCheckChecked">Activate your Product</label>
                                        </div>
                                        <p class="card-text mt-4"><small class="text-muted">Added 3 mins ago</small></p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <button class="btn btn-primary col-12 d-grid mb-3" onclick="window.location='updateProduct.php';">Update</button>
                                        <button class="btn btn-danger col-12 d-grid">Delete</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card mb-3" style="max-width: 740px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/phone.png" class="img-fluid rounded-start" style="height: 100%;" />
                                </div>
                                <div class="col-md-8 d-flex text-white bg-black px-4">
                                    <div class="card-body border border-0 border-end border-dark">
                                        <h5 class="card-title text-warning fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                        <div class="form-check form-switch mt-3">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label text-info" for="flexSwitchCheckChecked">Activate your Product</label>
                                        </div>
                                        <p class="card-text mt-4"><small class="text-muted">Added 3 mins ago</small></p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <button class="btn btn-primary col-12 d-grid mb-3" onclick="window.location='updateProduct.php';">Update</button>
                                        <button class="btn btn-danger col-12 d-grid">Delete</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="card mb-3" style="max-width: 740px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="resources/phone.png" class="img-fluid rounded-start" style="height: 100%;" />
                                </div>
                                <div class="col-md-8 d-flex text-white bg-black px-4">
                                    <div class="card-body border border-0 border-end border-dark">
                                        <h5 class="card-title text-warning fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                        <div class="form-check form-switch mt-3">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label text-info" for="flexSwitchCheckChecked">Activate your Product</label>
                                        </div>
                                        <p class="card-text mt-4"><small class="text-muted">Added 3 mins ago</small></p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <button class="btn btn-primary col-12 d-grid mb-3" onclick="window.location='updateProduct.php';">Update</button>
                                        <button class="btn btn-danger col-12 d-grid">Delete</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- pagination -->
                        <div class="col-12 d-flex justify-content-center mt-3">
                            <nav aria-label="Page navigation example" class="text-white d-none d-lg-flex">
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
                            <nav aria-label="Page navigation example" class="text-white d-flex d-lg-none">
                                <ul class="pagination pagination-sm">
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


                    <div class="position-absolute" style="margin-left: 85%;">
                        <button class="btn btn-info fs-5 ms-5 ms-lg-0" onclick="window.location='addProduct.php';">Add Product</button>
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