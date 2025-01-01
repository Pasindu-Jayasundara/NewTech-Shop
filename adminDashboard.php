<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Dashboard | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid ">
        <div class="row bg-black text-white min-vh-100">
            <div class="col-12">

                <div class="col-12 d-flex justify-content-center">
                    <p class=" text-warning fs-1 d-flex justify-content-center">Dashboard</p>
                </div>

                <div class="row border border-1 border-secondary rounded bg-dark mx-lg-5 mx-0 mb-5 pb-4 ">

                    <!-- earning -->
                    <div class="d-flex flex-column">
                        <p class="fs-5 mx-lg-3 mx-0 my-3" style="color: chartreuse;">Earnings :</p>
                        <div class="d-flex ms-lg-5 ms-0">
                            <div class="col-lg-6 col-6">
                                <p class="fs-5 mx-lg-3 mx-0 my-3">Today Earnings</p>

                                <div class="col-lg-6 col-12 ms-lg-5 ms-0 mt-2 rounded d-flex align-items-center ">
                                    <div class="input-group mb-3 ms-lg-4 ms-0">
                                        <span class="input-group-text bg-black text-white">Rs.</span>
                                        <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                        <span class="input-group-text bg-black text-white">.00</span>
                                    </div>
                                </div>

                                <div class="accordion accordion-flush ms-lg-5 ms-0">
                                    <div class="accordion-item ms-lg-4 ms-0">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" id="eb" onclick="e();">
                                                Details
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="ec">
                                            <div class="accordion-body">
                                                <nav class="nav flex-column">
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Mobile Phones :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Laptops :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Computers :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Camera :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Gaming :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-6">
                                <p class="fs-5 mx-lg-3 mx-0 my-3">Monthly Earnings</p>

                                <div class="col-lg-6 col-12 ms-lg-5 ms-0 mt-2 rounded d-flex align-items-center">
                                    <div class="input-group mb-3 ms-lg-4 ms-0">
                                        <span class="input-group-text bg-black text-white">Rs.</span>
                                        <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                        <span class="input-group-text bg-black text-white">.00</span>
                                    </div>
                                </div>

                                <div class="accordion accordion-flush ms-lg-5 ms-0">
                                    <div class="accordion-item ms-lg-4 ms-0">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" id="eb2" onclick="e2();">
                                                Details
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="ec2">
                                            <div class="accordion-body">
                                                <nav class="nav flex-column">
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Mobile Phones :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Laptops :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Computers :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Camera :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Gaming :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <span class="input-group-text bg-black text-white">Rs.</span>
                                                                <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                <span class="input-group-text bg-black text-white">.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- selling -->
                    <div class="d-flex flex-column mt-4">
                        <hr>
                        <p class="fs-5 mx-lg-3 mx-0 my-3" style="color: chartreuse;">Sellings :</p>
                        <div class="d-flex ms-lg-5 ms-0">
                            <div class="col-6">
                                <p class="fs-5 mx-lg-3 mx-0 my-3">Today Sellings</p>

                                <div class="col-6 ms-lg-5 ms-0 mt-2 rounded d-flex align-items-center">
                                    <div class="input-group mb-3 ms-lg-4 ms-0">
                                        <span class="input-group-text bg-black text-white">Items </span>
                                        <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                    </div>
                                </div>

                                <div class="accordion accordion-flush ms-lg-5 ms-0">
                                    <div class="accordion-item ms-lg-4 ms-0">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" id="eb3" onclick="e3();">
                                                Details
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="ec3">
                                            <div class="accordion-body">
                                                <nav class="nav flex-column">
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Mobile Phones :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Laptops :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Computers :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Camera :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Gaming :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <p class="fs-5 mx-lg-3 mx-0 my-3">Monthly Sellings</p>

                                <div class="col-6 ms-lg-5 ms-0 mt-2 rounded d-flex align-items-center">
                                    <div class="input-group mb-3 ms-lg-4 ms-0">
                                        <div class="input-group ">
                                            <span class="input-group-text bg-black text-white">Items </span>
                                            <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion accordion-flush ms-lg-5 ms-0">
                                    <div class="accordion-item ms-lg-4 ms-0">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" id="eb4" onclick="e4();">
                                                Details
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="ec4">
                                            <div class="accordion-body">
                                                <nav class="nav flex-column">
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Mobile Phones :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Laptops :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Computers :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Camera :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="nav-link d-flex align-items-center" href="#">
                                                        <span class="col-5">Gaming :</span>
                                                        <div class="col-6 ms-5 mt-2 rounded d-flex align-items-center">
                                                            <div class="input-group mb-3 ms-4">
                                                                <div class="input-group mb-3 ms-4">
                                                                    <span class="input-group-text bg-black text-white">Items </span>
                                                                    <input type="text" class="form-control bg-black text-white text-end" value="10000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <hr class="mt-5 col-12" />
                    </div>

                    <div class="d-flex justify-content-evenly">

                        <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                            <h5 class="card-title mt-2" style="color: chartreuse;">Mostly Sold Item</h5>
                            <img src="resources/phone.png" class="card-img-top w-75 h-25" />
                            <div class="card-body d-flex flex-column align-items-center">
                                <hr class="col-12" />
                                <span class="card-text">Samsung A21s</span>
                                <span class="card-text">10 Items</span>
                                <span class="card-text">Rs. 10000 .00</span>
                                <img src="resources/awardb.png" class="w-25 mt-3" />
                            </div>
                        </div>

                        <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                            <h5 class="card-title mt-2" style="color: chartreuse;">Mostly Famouse Seller</h5>
                            <img src="resources/bs.png" class="card-img-top h-25" style="width: 35%;" />
                            <div class="card-body d-flex flex-column align-items-center">
                                <hr class="col-12" />
                                <span class="card-text">Kamal Kumara</span>
                                <span class="card-text">kamal@gmail.com</span>
                                <span class="card-text">0740211671</span>
                                <img src="resources/awardb.png" class="w-25 mt-3" />
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>