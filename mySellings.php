<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Sellings | New Tech</title>

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
                <div class="row d-lg-flex flex-lg-row align-items-lg-start d-flex flex-column align-items-center my-4">
                    <div class="col-lg-3 col-12 mx-lg-5 mx-1 ">

                        <i class="bi bi-arrow-left-square text-white fs-1 d-none d-lg-flex" style="cursor:pointer;" onclick="history.back();"></i>

                        <p class="fs-2">My Sellings</p>
                        <div class="border border-1 border-white rounded p-4">
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <div class="m-3 px-5">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Sold Time</a>
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
                            <p class="fs-4 text-info">Total Sellings : <span class="color: chartreuse;">10 Items</span></p>
                        </div>
                    </div>

                    <div class="col-lg-8 col-11 border border-1 mt-2 border-white rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <!--  -->
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col d-flex flex-column align-items-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Laptop</h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='singleProductView.php';">View</span>
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-text-secondary">Sold Date : 2022/03/28</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Laptop</h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='singleProductView.php';">View</span>
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-text-secondary">Sold Date : 2022/03/28</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Laptop</h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='singleProductView.php';">View</span>
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-text-secondary">Sold Date : 2022/03/28</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Laptop</h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='singleProductView.php';">View</span>
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-text-secondary">Sold Date : 2022/03/28</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!-- pagination -->
                        <hr class="col-12 mt-5" />
                        <div class="col-12 d-flex justify-content-center mt-2">
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
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>

        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

</body>

</html>