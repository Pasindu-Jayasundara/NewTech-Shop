<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Cards | New Tech</title>

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
                <div class="row d-lg-flex flex-lg-row d-flex flex-row justify-content-center my-4">
                    <div class="col-lg-3 col-12 mx-lg-5 mx-0">
                        <i class="bi bi-arrow-left-square d-none d-lg-flex text-white fs-1 " style=" cursor:pointer;" onclick="history.back();"></i>

                        <!-- <p class="text-warning fs-3 position-absolute" style="margin-left: -20%;">Wishlist</p> -->
                        <p class="fs-2">My Gift Cards</p>
                        <div class="border border-1 border-white rounded p-4 ">


                            <div class="m-3 px-3">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" href="#">By Received Time</a>
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
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By State</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="s" type="radio">
                                            <span>New</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="s" type="radio">
                                            <span>Used</span>
                                        </span>
                                    </li>

                                </ul>

                            </div>
                            <p class="fs-6 text-info">Total Gift Card Received : <span class="color: chartreuse;">10 Gift Cards</span></p>
                        </div>
                    </div>

                    <div class="col-8 border border-1 border-white rounded mt-3 mt-lg-0 d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <!--  -->
                        <div class="row row-cols-1 row-cols-md-3 g-4 ">
                            <div class="col  d-flex justify-content-center d-lg-block">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Valid On : <span class="text-info"> Phones</span></h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control bg-dark text-white" value="123" id="g1" />
                                            <span class="input-group-text bg-black text-white" style="cursor:pointer;" id="gb1" onclick="showPassword3();"><i class="bi bi-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  d-flex justify-content-center d-lg-block">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Valid On : <span class="text-info"> Phones</span></h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control bg-dark text-white" value="123" id="g1" />
                                            <span class="input-group-text bg-black text-white" style="cursor:pointer;" id="gb1" onclick="showPassword3();"><i class="bi bi-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  d-flex justify-content-center d-lg-block">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Valid On : <span class="text-info"> Phones</span></h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control bg-dark text-white" value="123" id="g1" />
                                            <span class="input-group-text bg-black text-white" style="cursor:pointer;" id="gb1" onclick="showPassword3();"><i class="bi bi-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  d-flex justify-content-center d-lg-block">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Valid On : <span class="text-info"> Phones</span></h5>
                                    <img src="resources/lap.png" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control bg-dark text-white" value="123" id="g1" />
                                            <span class="input-group-text bg-black text-white" style="cursor:pointer;" id="gb1" onclick="showPassword3();"><i class="bi bi-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!-- pagination -->
                        <div class="col-12 mt-5">
                            <hr />
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