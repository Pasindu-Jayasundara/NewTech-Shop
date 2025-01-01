<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Store | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row text-white bg-black">
            <?php include "header.php"; ?>

            <div class="col-12">

                <div class="row bg-dark">
                    <div class="col-lg-6 offset-lg-3 mb-2">

                        <div class="input-group">
                            <i class="bi bi-arrow-left-square text-white fs-1 position-absolute" style="margin-left: -50%; margin-top: -1%; cursor:pointer;" onclick="history.back();"></i>

                            <p class="text-warning fs-3 position-absolute d-none d-lg-flex" style="margin-left: -20%;">store</p>
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
                    <div class="col-12 col-sm-7 col-lg-3 mb-2 mb-lg-0 offset-3 offset-sm-4 offset-lg-0" style="cursor: pointer;">
                        <a class="text-white mx-4 btn btn-outline-danger" href="advanceSearch.php">Advanced Search</a>
                    </div>
                </div>

                <hr class="col-12" />

                <div class="col-lg-12 col-12 d-lg-flex flex-lg-column  c ">
                    <div class="col-lg-12 col-sm-12 d-lg-flex flex-lg-row d-xl-flex flex-xl-row justify-content-lg-evenly d-flex flex-column align-items-center d-sm-flex flex-sm-row align-items-sm-start d">

                        <div class="card text-center mb-3 mb-lg-0 col-sm-3 mx-lg-0 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mb-3 mb-lg-0 col-sm-3 mx-lg-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mb-3 mb-lg-0 col-sm-3 mx-lg-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mb-3 mb-lg-0 col-sm-3 d-lg-none d-xxl-flex mx-lg-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1  col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mb-3 mb-lg-0 col-sm-3 d-lg-none d-xxl-flex mx-lg-1 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 d-none d-lg-flex flex-lg-row col-sm-12 d-xl-flex flex-xl-row justify-content-lg-evenly d-sm-flex flex-sm-row align-items-sm-start d">

                        <div class="card text-center col-sm-3 mb-sm-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-sm-3 mb-sm-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-sm-3 mb-sm-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-sm-3 mb-sm-2 d-lg-none d-xxl-flex mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-sm-3 mb-sm-2 d-lg-none d-xxl-flex mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 d-none d-md-flex d-lg-flex flex-lg-row justify-content-lg-evenly d-xl-flex flex-xl-row d">

                        <div class="card text-center col-md-3 mb-md-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-md-3 mb-md-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-md-3 mb-md-2 mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-md-3 mb-md-2 d-lg-none d-xxl-flex mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center col-md-3 mb-md-2 d-lg-none d-xxl-flex mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-5 col-lg-5">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 d-none d-md-none d-xxl-flex flex-xxl-row flex-lg-row d-lg-none d">

                        <div class="card text-center mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card text-center mx-xl-auto" style="width: 18rem; margin-right: 2%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" style="height: 150px;">
                                    <div class="carousel-item active">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone2.png" class="d-block w-100" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/phone.png" class="d-block w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-black fw-bold col-lg-12" style="background-color:rgb(213, 192, 235);">
                                <h5 class="card-title text-black fw-bolder">Samsung A21s</h5>
                                <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">10 Items Availiable</span></span>
                                <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                <a href="#" class="btn btn-outline-primary col-lg-5 col-5 " onclick="window.location='singleProductView.php';">View</a>
                                <a href="#" class="btn btn-outline-danger mt-lg-1 col-lg-5 col-5 ">
                                    <i class="bi bi-bag-heart"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- pagination -->

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


                <!-- <div class="row bg-black d-flex align-items-center justify-content-center mb-4">

                    <div id="carouselExampleSlidesOnly" class="carousel slide slide2" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="resources/phone.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/acc.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/acc2.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/lap.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/lap2.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/phone2.png" class="d-block w-100 i" />
                            </div>

                        </div>
                    </div>

                </div> -->
            </div>


            <?php include "footer.php"; ?>

        </div>
    </div>


    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>