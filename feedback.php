<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback | New Tech</title>

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

                <i class="bi bi-arrow-left-square text-white d-none d-lg-flex fs-1 position-absolute" style="margin-left: 2%; margin-top: 1%; cursor:pointer;" onclick="history.back();"></i>

                <div class="row d-flex justify-content-center my-4">

                    <div class="col-lg-8 col-11 rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <div class="d-flex flex-row justify-content-between col-12 mb-4">
                            <div class="d-flex flex-column">
                                <p class="fs-6">Product Details : ASUS VivoBook</p>
                                <p class="fs-6">Seller : kamal</p>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="fs-6">Date & Time : 2022/03/28 00:00:00</p>
                                <p class="fs-6">User : kamal perera</p>
                            </div>
                        </div>

                        <textarea cols="80" class="col-12 bg-dark text-white border border-1 border-white rounded p-3" rows="10"></textarea>

                        <div class="col-12 d-flex justify-content-center mt-4">
                            <button class="btn btn-success text-center col-6 d-grid fs-5">Post Feedback</button>
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