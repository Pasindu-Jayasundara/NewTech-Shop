<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Purchased Details | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="semantic.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid ">
        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>

            <div class="col-12">

                <i class="bi bi-arrow-left-square d-none d-lg-block text-white fs-1 position-absolute" style="margin-left: 2%; margin-top: 0%; cursor:pointer;" onclick="history.back();"></i>

                <div class="row d-flex justify-content-center my-4">

                    <div class="col-lg-8 col-11 rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <div class="d-flex flex-row justify-content-between col-12 mb-4">
                            <p class="fs-4">Purchased Details</p>
                            <div class="d-flex flex-column">
                                <p class="fs-6">Purchased Date & Time : 2022/03/28 00:00:00</p>
                                <p class="fs-6">Seller : kamal perera</p>
                            </div>
                        </div>

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
                                    <td class="fs-6 text-start text-white border-0 border-end border-bottom border-secondary">Total</td>
                                    <td class="text-end text-white border-0 border-end border-bottom border-secondary">Rs. 100000 .00</td>
                                </tr>
                            </tfoot>

                        </table>

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