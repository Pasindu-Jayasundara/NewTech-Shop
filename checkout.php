<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>

            <div class="col-12">
                <i class="bi bi-arrow-left-square text-white d-none d-lg-flex position-absolute fs-2 ms-4" style="cursor: pointer;" onclick="history.back();"></i>
                <!-- <p class="fs-2 mt-3" style="margin-left: 44%; color:chartreuse;">CHECKOUT</p> -->

                <div class="col-12 d-flex justify-content-center">
                    <p class="fs-2 mt-3" style="color:chartreuse;">CHECKOUT</p>
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-11 mb-4 bg-dark">
                        <div class="row border border-1 border-white rounded d-flex flex-column align-items-center">
                            <div class="col-11  mb-3" style="width: 96%;">
                                <div class="row d-flex justify-content-center">
                                    <img src="resources/images/logo.png" class="w-25" />
                                </div>
                                <div class="row border border-1 border-white rounded bg-black">
                                    <p class="mt-3">Pricing :</p>
                                    <div class="col-lg-12 d-lg-flex ms-lg-3 d-flex flex-row justify-content-center">
                                        <div class="card text-bg-dark mb-3 col-12 col-lg-10 border border-1 border-light">
                                            <div class="px-3 pt-3">
                                                <h5 class="card-title fs-6">Items (3)
                                                    <span class="float-end">Rs. 300000 .00</span>
                                                </h5>
                                                <h5 class="card-title fs-6">Shipping
                                                    <span class="float-end">Rs. 2500 .00</span>
                                                </h5>
                                                <h5 class="card-title fs-6">Voucher Discount
                                                    <span class="float-end">Rs. 2500 .00</span>
                                                </h5>
                                                <h5 class="card-title fs-6">Special Note
                                                    <span class="float-end">Rs. 0000 .00</span>
                                                </h5>
                                                <hr />
                                                <h5 class="card-title fs-6 mt-4 mb-4">Total
                                                    <span class="float-end">Rs. 2500 .00</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6  d-flex flex-column align-items-start">
                                        <p>Shipping Address :</p>
                                        <div class="col-lg-8  d-lg-flex d-flex flex-row justify-content-start ms-3">
                                            <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                                1/70/B, kotahena
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6  d-flex flex-column align-items-start">
                                        <p>Billing Address :</p>
                                        <div class="col-lg-8  d-lg-flex d-flex flex-row justify-content-start ms-3">
                                            <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                                1/70/B, kotahena
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                        <p>Auccation : (If there is any...)</p>
                                        <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                            <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                                Birth Day
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                        <p>Special Note to be added : (If need...)</p>
                                        <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                            <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                                Wisth you a Happy Birthday.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5 mb-3">
                                        <button class="btn btn-outline-danger" onclick="history.back();">Cancel</button>
                                        <button class="btn btn-outline-primary" onclick="window.location='invoice.php';">Proceed To Payment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="p-3">
                    <p class="text-warning">You are about to Purchase ;</p>

                    <!-- card -->
                    <div class="text-white ps-5 ms-4">
                        <div class="row row-cols-1 row-cols-md-5 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="resources/lap.png" class="card-img-top" style="height: 25vh;" />
                                    <div class="card-body bg-black">
                                        <h5 class="card-title text-primary fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">1 Item</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="resources/phone.png" class="card-img-top" style="height: 25vh;" />
                                    <div class="card-body bg-black">
                                        <h5 class="card-title text-primary fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">1 Item</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="resources/lap2.png" class="card-img-top" style="height: 25vh;" />
                                    <div class="card-body bg-black">
                                        <h5 class="card-title text-primary fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">1 Item</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="resources/phone2.png" class="card-img-top" style="height: 25vh;" />
                                    <div class="card-body bg-black">
                                        <h5 class="card-title text-primary fw-bolder">Samsung A21s</h5>
                                        <span class="fs-6 py-0 d-block text-start">Color:&nbsp;&nbsp;&nbsp;<span class="ms-5">Black</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Contidition:&nbsp;&nbsp;&nbsp;<span class="ms-1">Brandnew</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Stock :&nbsp;&nbsp;<span class="ms-5">1 Item</span></span>
                                        <span class="fs-6 py-0 d-block text-start">Price :&nbsp;&nbsp;&nbsp;<span class="ms-5">Rs. 100000 .00</span></span>
                                    </div>
                                </div>
                            </div>
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