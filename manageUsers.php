<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Users | New Tech</title>

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
                    <div class="col-lg-3 col-12 mx-lg-5 mx-0">

                        <i class="bi bi-arrow-left-square d-none d-lg-flex text-white fs-1 " style="cursor:pointer;" onclick="history.back();"></i>

                        <p class="fs-2">Manage Users</p>
                        <div class="border border-1 border-white rounded p-4">
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <div class="m-3 px-5">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Joined Date</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="date" type="radio">
                                            <span>Newest to Oldest</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="date" type="radio">
                                            <span>Oldest to Newest</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By State</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="state" type="radio">
                                            <span>Sellers</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="state" type="radio">
                                            <span>Buyers</span>
                                        </span>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="state" type="radio">
                                            <span>All</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10 mb-4">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Ratings</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="ratings" type="radio">
                                            <span>Heighest</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="ratings" type="radio">
                                            <span>Lowest</span>
                                        </span>
                                    </li>
                                </ul>

                            </div>
                            <p class="fs-4 text-info">Total Users : <span class="color: chartreuse;">10 Users</span></p>
                        </div>
                    </div>

                    <div class="col-lg-8 col-11 mt-3 mt-lg-0  border border-1 border-white rounded d-lg-flex flex-lg-column align-items-lg-start justify-content-lg-center bg-dark py-3">

                        <!--  -->
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col d-flex flex-row justify-content-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Pasindu</h5>
                                    <img src="resources/au.jpg" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center col-12">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='userProfile.php';">View</span>
                                        <span class="card-text text-white btn btn-outline-danger mt-2 d-grid col-12" >Deactive</span>
                                        <hr class="col-12 text-white" />
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-row justify-content-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Kamal</h5>
                                    <img src="resources/au.jpg" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center col-12">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='userProfile.php';">View</span>
                                        <span class="card-text text-white btn btn-outline-danger mt-2 d-grid col-12" >Deactive</span>
                                        <hr class="col-12 text-white" />
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-row justify-content-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Pasindu</h5>
                                    <img src="resources/au.jpg" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center col-12">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='userProfile.php';">View</span>
                                        <span class="card-text text-white btn btn-outline-danger mt-2 d-grid col-12" >Deactive</span>
                                        <hr class="col-12 text-white" />
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-row justify-content-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Kamal</h5>
                                    <img src="resources/au.jpg" class="card-img-top h-75" style="width: 90%;" />
                                    <div class="card-body d-flex flex-column align-items-center col-12">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='userProfile.php';">View</span>
                                        <span class="card-text text-white btn btn-outline-danger mt-2 d-grid col-12" >Deactive</span>
                                        <hr class="col-12 text-white" />
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