<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invoice | New Tech</title>

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
                <i class="bi bi-arrow-left-square d-none d-lg-flex text-white position-absolute fs-2 ms-4" style="cursor: pointer;" onclick="history.go(-2);"></i>

                <div class="col-12 d-flex justify-content-center">
                    <p class="fs-2 mt-3" style="color:chartreuse;">INVOICE</p>
                </div>

                <div class=" d-lg-flex justify-content-lg-end d-flex justify-content-center" style="margin-top: 2%;">
                    <button class="btn btn-outline-info"><i class="bi bi-printer"></i> Print</button>
                    <button class="btn btn-outline-danger ms-2"><i class="bi bi-filetype-pdf"></i> PDF</button>
                </div>

                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-lg-6 col-11 my-4 bg-dark border border-1 border-white rounded p-lg-4 p-2">

                        <div class="col-12 text-white ">
                            <div class="row">

                                <div class="col-6">
                                    <div class="ms-5 invoiceHeaderImage"></div>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 text-info text-end">
                                            <h2>New Tech</h2>
                                        </div>
                                        <div class="col-12 text-end">
                                            <span>Maradana, Colombo 10, Sri Lanka</span><br />
                                            <span>+94 1111111111</span><br />
                                            <span>newTech@gmail.com</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="border border-1 border-white" />
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="text-start">INVOICE TO :</h5>
                                            <span class="ms-4">Pasindu Bhathiya</span>
                                            <span class="ms-4">pasindu@gmail.com</span>
                                        </div>
                                        <div class="col-6 text-end mt-0" style="margin-top: -150%;">
                                            <h1 class="text-primary">INVOICE 01</h1>
                                            <span class="fw-bold">Date & Time of Invoice : </span>
                                            <span class="d-block">31-10-2022 00:00:00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">

                                    <table class="table">

                                        <thead>
                                            <tr class="border border-1 border-secondary text-white">
                                                <th class="border border-end border-secondary text-center bg-dark">#</th>
                                                <th class="border border-end border-secondary text-center bg-black">Order ID</th>
                                                <th class="border border-end border-secondary text-center bg-dark">Product</th>
                                                <th class="text-end border border-end border-secondary text-center bg-black">Unit Price</th>
                                                <th class="text-end border border-end border-secondary text-center bg-dark">Quantity</th>
                                                <th class="text-end border border-end border-secondary text-center bg-black">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="height: 72px;">
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">01</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">00001</td>
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">Apple iPhone 12</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">Rs. 100000 .00</td>
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">01</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">Rs. 100000 .00</td>
                                            </tr>
                                            <tr style="height: 72px;">
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">02</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">00002</td>
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">Apple iPhone 13</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">Rs. 100000 .00</td>
                                                <td class="bg-dark  text-end text-info border border-secondary pt-4">05</td>
                                                <td class="bg-black text-end text-info border border-secondary pt-4">Rs. 100000 .00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="border-0 border-end border-secondary"></td>
                                                <td class="fs-6 text-start text-white border-0 border-end border-bottom border-secondary">SUBTOTAL</td>
                                                <td class="text-end text-white border-0 border-end border-bottom border-secondary">Rs. 100000 .00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="border-0 border-end border-secondary"></td>
                                                <td class="fs-6 text-start text-white border-0 border-end border-bottom border-secondary">Delivery Fee</td>
                                                <td class="text-end text-white border-0 border-end border-bottom border-secondary">Rs. 100000 .00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="border-0 border-end border-secondary"></td>
                                                <td class="fs-6 text-start text-white border-0 border-end border-bottom border-secondary">Delivery Fee</td>
                                                <td class="text-end text-white border-0 border-end border-bottom border-secondary">Rs. 100000 .00</td>
                                            </tr>
                                        </tfoot>

                                    </table>

                                </div>

                                <div class="col-12">
                                    <hr class="border border-1 border-white" />
                                </div>

                                <p class="text-warning fs-4">Shipping Address :</p>
                                <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                    <p>Shipping Address :</p>
                                    <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                        <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                            1/70/B, kotahena
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                    <p>Billing Address :</p>
                                    <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                        <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                            1/70/B, kotahena
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                    <p>Auccation :</p>
                                    <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                        <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                            Birth Day
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12  d-flex flex-column align-items-start">
                                    <p>Special Note :</p>
                                    <div class="col-lg-10 col-11 d-lg-flex d-flex flex-row justify-content-start ms-3">
                                        <div class="card text-bg-dark mb-3 ms-lg-5 col-12 col-lg-12 border border-1 border-light p-3">
                                            Wisth you a Happy Birthday.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="border border-1 border-white" />
                                </div>

                                <div class="col-12  border-start border-5 border-warning mt-3 mb-3 ">
                                    <div class="row">
                                        <div class="col-12 mt-3 mb-3">
                                            <label class="form-label fw-bold fs-5" style="color:chartreuse;">NOTICE : </label>
                                            <label class="form-label fs-6 text-info">Purchaed items can return before 7 days of Delivery. </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="border border-1 border-primary" />
                                </div>

                                <div class="col-12 text-center mt-3 mb-3">
                                    <span class="fs-1 fw-bold" style="color:chartreuse;">Thank You !</span>
                                </div>

                                <div class="col-12 text-center mt-1 mb-0">
                                    <label class="form-label fw-bold" style="color:rgb(255, 169, 98);">Invoice was created on a computer and is valid without the Signature and Seal.</label>
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