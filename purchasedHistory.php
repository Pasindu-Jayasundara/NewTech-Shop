<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Purchased History | New Tech</title>

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

            <div class="d-flex justify-content-center mt-4">
                <i class="bi bi-arrow-left-square text-white d-none d-lg-flex fs-1 position-absolute" style="margin-left: -94%;  cursor:pointer;" onclick="history.back();"></i>
                <p class="text-warning fs-2">Purchased History</p>
            </div>

            <div class="col-12">


                <span class="btn btn-danger position-absolute col-lg-1 col-3 d-grid d-none d-lg-block mt-4" style="cursor:pointer; margin-left: 86%;">Clear All</span>
                <div class="d-lg-none  d-flex justify-content-center mt-3">
                    <span class="btn btn-danger col-lg-1 col-3 d-grid  d-lg-none">Clear All</span>
                </div>


                <div class="row d-flex justify-content-center my-4">

                    <div class="col-8 rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <!-- cards -->
                        <div class="text-white">
                            <div class="row row-cols-1 row-cols-md-4 g-4">

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                        <div class="card-body bg-black">
                                            <h5 class="card-title fs-3">Laptop</h5>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-outline-success mt-3 mb-2" onclick="window.location='singleProductView.php';">view</button>
                                                <button class="btn btn-outline-info mb-2" onclick="window.location='purchasedDetails.php';">Purchased Details</button>
                                                <button class="btn btn-outline-warning mb-2" onclick="window.location='feedback.php';">Feedback</button>
                                            </div>
                                        </div>
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