<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body class="main-body2">

    <div class="container-fluid">
        <div class="row bg-black text-white">
            <?php include "header.php"; ?>


            <div class="col-12">
                <label class="position-absolute fw-bolder text-center des">Welcome to New Tech<br />
                    <span class="lh-base ex">Explore everything in one place</span>
                </label>

                <button class="position-absolute col-lg-3 col-4 d-grid button" onclick="changePage();">Go To Shop&nbsp;&rarr;</button>
                <div class="row bg-black d-flex align-items-center justify-content-center mb-4">

                    <div id="carouselExampleSlidesOnly" class="carousel slide slide2" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="resources/lap.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slide/tech1.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/phone.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/lap2.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slide/tech6.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/acc.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slide/tech7.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/phone2.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/slide/tech8.png" class="d-block w-100 i" />
                            </div>
                            <div class="carousel-item">
                                <img src="resources/acc2.png" class="d-block w-100 i" />
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <hr class="offset-2 offset-lg-1 col-8 col-lg-10" />

            <div class="bg-black text-white col-12 col-lg-12">
                <div class="row d-lg-flex d-flex flex-lg-row text-center text-lg-start mt-3 mt-lg-2 flex-column justify-content-lg-start justify-content-start align-items-lg-center align-items-center">
                    <div class="col-lg-5 col-6 mt-lg-3 mb-lg-4 fw-bold service mx-lg-3">
                        <span>Our Service</span>
                        <img src="resources/ser.png" class="img-thumbnail mb-lg-2" />
                    </div>
                    <div class="col-lg-6 mt-lg-5 service2 fw-bold mt-4 mt-lg-0 mb-3">
                        <p>We provide A range of services including<br />computer repairs,  buys and sells quality electronic items</p>
                    </div>
                </div>
            </div>

            <hr class="offset-2 offset-lg-1 col-8 col-lg-10" />

            <div class="bg-black text-white col-lg-12 mt-lg-3 d-none d-lg-grid">
                <div class="row d-lg-flex flex-row justify-content-end align-items-center">
                    <div class="col-lg-6 service2 mt-lg-6 fs-4 fw-bold">
                        <p>Fast & secure home Delivery Service.<br /></p>
                    </div>
                    <div class="col-lg-5 fw-bold service d-lg-flex flex-column mx-lg-3" style="width: 35%;">
                        <span>Delivery</span>
                        <img src="resources/delivery.gif" class="img-thumbnail mb-lg-2" />
                    </div>
                </div>
            </div>

            <div class="bg-black text-white col-12 col-lg-12 d-grid d-lg-none">
                <div class="row d-lg-flex d-flex flex-lg-row text-center text-lg-start mt-3 mt-lg-2 flex-column justify-content-lg-start justify-content-start align-items-lg-center align-items-center">
                    <div class="col-lg-5 col-6 mt-lg-3 mb-lg-4 fw-bold service mx-lg-3">
                        <span>Delivery</span>
                        <img src="resources/delivery.gif" class="img-thumbnail mb-lg-2" />
                    </div>
                    <div class="col-lg-6 mt-lg-5 service2 fw-bold mt-4 mt-lg-0 mb-3">
                        <p>Fast & secure home Delivery Service.</p>
                    </div>
                </div>
            </div>

            <hr class="offset-2 offset-lg-1 col-8 col-lg-10" />

            <div class="bg-black text-white col-12 col-lg-12">
                <div class="row d-lg-flex d-flex flex-lg-row text-center text-lg-start mt-3 mt-lg-2 flex-column justify-content-lg-start justify-content-start align-items-lg-center align-items-center">
                    <div class="col-lg-5 col-6 mt-lg-3 mb-lg-4 fw-bold service mx-lg-3">
                        <span>Location</span>
                        <img src="resources/location.gif" class="img-thumbnail mb-lg-2 bg-transparent" onclick="window.location='https://goo.gl/maps/XNxPTkRpXL5oHNMcA';"/>
                    </div>
                    <div class="col-lg-6 mt-lg-5 service2 fw-bold mt-4 mt-lg-0 mb-3">
                        <p>Colser to the main Road. Easy acces to the transport services.</p>
                    </div>
                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="script.js"></script>

</body>

</html>