<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body>

    <div class="container-fluid sticky-top">

        <div class="row bg-dark">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">

                    <div class="col-lg-3  col-2 px-0 px-lg-3 mt-1">
                        <i class="bi bi-list text-white fs-1 position-absolute mt-2 px-1 d-block d-md-none d-lg-none navbar-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="cursor:pointer;"></i>
                        <img src="resources/images/logo.png" class="logo mx-5 mx-md-0 mx-lg-0" style="cursor:pointer;" id="1" onclick="change(id);" />
                    </div>

                    <nav class="navbar navbar-dark bg-dark fixed-top d-md-none d-lg-none">
                        <div class="container-fluid">
                            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                                        <img src="resources/images/logo.png" class="logo"/>
                                        New Tech
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="store.php"><i class="bi bi-shop text-warning fs-3 px-3"></i>Store</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="myProfile.php"><i class="uil uil-user-md text-warning fs-3 px-3"></i>My Profile</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="mySellings.php"><i class="uil uil-university text-warning fs-3 px-3"></i>My Sellings</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="myProduct.php"><i class="bi bi-briefcase text-warning fs-3 px-3"></i>My Product</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="watchlist.php"><i class="bi bi-house-heart text-warning fs-3 px-3"></i>Watchlist</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="myGiftCards.php"><i class="bi bi-gift text-warning fs-3 px-3"></i>Gifts</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="purchasedHistory.php"><i class="uil uil-invoice text-warning fs-3 px-3"></i>Purchased History</a>
                                        </li>
                                        <li class="nav-item text-white" data-bs-toggle="offcanvas">
                                            <a class="nav-link" href="myMessege.php"><i class="uil uil-envelope-minus text-warning fs-3 px-3"></i>Message</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="col-lg-6 col-md-3 text-white fs-5 d-lg-inline-flex align-items-center justify-content-center d-none d-md-inline-flex offset-md-2 offset-lg-0">
                        <a href="store.php" class="px-lg-4" style="cursor:pointer;"><i class="bi bi-shop text-white fs-3 px-3 d-none d-md-block d-lg-block"></i></a>
                        <a href="cart.php" class="px-lg-4" style="cursor:pointer;"><i class="bi bi-cart3 text-white fs-3 px-3 d-none d-md-block d-lg-block"></i></a>
                        <a href="watchlist.php" class="px-lg-4" style="cursor:pointer;"><i class="bi bi-house-heart text-white fs-3 px-3 d-none d-md-block d-lg-block"></i></a>
                        <a href="myGiftCards.php" class="px-lg-4" style="cursor:pointer;"><i class="bi bi-gift text-white fs-3 px-3 d-none d-md-block d-lg-block"></i></a>
                    </div>

                    <div class="col-lg-3 d-lg-inline-flex align-items-center justify-content-center offset-4 offset-md-2 offset-lg-0 col-6 col-md-3 p-2 p-lg-0 mt-1">
                        <i class="bi bi-cart3 text-white fs-3 px-3 d d-lg-none d-md-none" style="cursor:pointer;" onclick="window.location='cart.php';"></i>
                        <i class="bi bi-person-circle text-white fs-3" style="cursor:pointer;" id="2" onclick="change(id);"></i>&nbsp;&nbsp;
                        <a class="text-decoration-none text-white" style="cursor:pointer;" href="login.php">Sign In &nbsp;|</a>&nbsp;
                        <a class="text-decoration-none text-white" style="cursor:pointer;" href="login.php">Log In</a>
                    </div>

                </div>
            </div>

            <div class="list-group col-6 col-md-4 col-lg-3 offset-6 offset-md-8 offset-lg-9 position-absolute my-5 d-none z" id="3" onmouseleave="hide();">
                <a class="list-group-item bg-black border-bottom border-1 border-secondary text-white list-group-item-action" style="cursor:pointer;" data-bs-toggle="list" onclick="window.location='myProfile.php';"><i class="uil uil-user-md text-warning fs-3 px-1"></i>My Profile</a>
                <a class="list-group-item bg-black border-bottom border-1 border-secondary text-white list-group-item-action" style="cursor:pointer;" data-bs-toggle="list" onclick="window.location='mySellings.php';"><i class="uil uil-university text-warning fs-3 px-1"></i>My Sellings</a>
                <a class="list-group-item bg-black border-bottom border-1 border-secondary text-white list-group-item-action" style="cursor:pointer;" data-bs-toggle="list" onclick="window.location='myProduct.php';"><i class="bi bi-briefcase text-warning fs-3 px-1"></i>My Product</a>
                <a class="list-group-item bg-black border-bottom border-1 border-secondary text-white list-group-item-action" style="cursor:pointer;" data-bs-toggle="list" onclick="window.location='purchasedHistory.php';"><i class="uil uil-invoice text-warning fs-3 px-1"></i>Purchased History</a>
                <a class="list-group-item bg-black border-bottom border-1 border-secondary text-white list-group-item-action" style="cursor:pointer;" data-bs-toggle="list" onclick="window.location='myMessege.php';"><i class="uil uil-envelope-minus text-warning fs-3 px-1"></i>Message</a>
            </div>

        </div>

    </div>

    <script src="bootstrap.js"></script>
    <script src="script.js"></script>

</body>

</html>