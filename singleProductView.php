<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product View | New Tech</title>

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

            <div class="col-12 my-lg-5 mt-5">
                <i class="bi bi-arrow-left-square text-white fs-1 position-absolute d-none d-lg-flex" style="margin-left: 2%; cursor:pointer;" onclick="history.back();"></i>

                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-11 col-lg-4">

                        <div class="row border border-1 border-white d-flex flex-column align-items-center rounded bg-dark ">
                            <div class="col-lg-11 col-11 my-4 mx-3 ">
                                <div class="row border border-1 border-white rounded " style="height: 55vh;">

                                    <!-- carousal -->
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="resources/lap.png" class="d-block w-100" style="height: 50vh;" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="resources/phone.png" class="d-block w-100" style="height: 50vh;" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="resources/lap2.png" class="d-block w-100" style="height: 50vh;" />
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 bg-info d-lg-flex flex-lg-column mt-5 bg-black align-items-lg-center d-none">

                            <button class="btn btn-outline-info d-grid col-12" id="spvmb" onclick="spvm();">Contact the Seller</button>

                            <span class="d-none" id="spvmt">
                                <div class="col-12 d-flex flex-row justify-content-evenly mb-3">
                                    <button class="btn btn-outline-success d-grid col-5">Send Messege</button>
                                    <button class="btn btn-outline-danger d-grid col-5" onclick="spvm();">Cancle</button>
                                </div>
                                <textarea cols="90" rows="10" class="col-12 rounded bg-dark text-white fs-6 p-3"></textarea>
                            </span>
                            <div class="d-flex flex-column mt-3 bg-dark align-items-center border border-1 border-secondary rounded">
                                <!-- type -->
                                <div class=" bg-black col-12 d-flex flex-row align-items-center justify-content-center border border-end border-secondary rounded-top p-4">
                                    <input type="text" placeholder="Type Here ..." class="bg-dark col-9 rounded-1 border border-1 border-secondary p-2 text-white" />
                                    <button class="col-2 ms-3 rounded-1 btn btn-primary">Send</button>
                                </div>
                                <!-- type -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            I recomend this product
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            this is a good one
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            high quality product.
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->
                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-6">
                        <form class="row g-3 needs-validation border mx-4 mt-3 mt-lg-0 mx-lg-5 border-1 border-secondary rounded p-4" novalidate>
                            <div class="col-md-12">
                                <label class="form-label fs-3 mt-2">Samsung A21s</label>
                            </div>
                            <div class="col-12">
                                <hr />
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Brand : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Model : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Colour : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Condition : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Price : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Seller : </label>
                            </div>
                            <div class="col-md-12 ms-3 ms-lg-5">
                                <label class="form-label fs-6">Description ;</label>
                                <div class="ms-5 col-10">
                                    <p class="text-info text-start">A laptop computer, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal compute </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6 mt-4">In Stock : </label>
                            </div>
                            <div class="col-md-5 ms-3 ms-lg-5">
                                <label class="form-label fs-6 mt-4">Warrenty : </label>
                            </div>
                            <div class="col-10 col-md-4 ms-3 ms-lg-5">
                                <label class="form-label">Quantity ; </label>
                                <div class="input-group mb-3 ms-3 ms-lg-5">
                                    <span class="input-group-text" style="cursor: pointer;">+</span>
                                    <input type="text" class="form-control" />
                                    <span class="input-group-text" style="cursor: pointer;">-</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr />
                            </div>
                            <div class="col-12 d-flex justify-content-center mb-4">
                                <button class="btn btn-outline-danger col-4 d-grid" type="submit">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                                <button class="btn btn-outline-warning col-4 d-grid ms-2" type="submit">Add to Cart</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center mb-4">
                                <a class="btn btn-outline-success d-grid col-8" href="checkout.php">Buy Now</a>
                            </div>
                        </form>

                        <div class="col-12 bg-info d-flex flex-column mt-5 bg-black align-items-center d-lg-none">

                            <button class="btn btn-outline-info d-grid col-12" id="spvmb2" onclick="spvm();">Contact the Seller</button>

                            <span class="d-none" id="spvmt2">
                                <div class="col-12 d-flex flex-row justify-content-evenly mb-3">
                                    <button class="btn btn-outline-success d-grid col-5">Send Messege</button>
                                    <button class="btn btn-outline-danger d-grid col-5" onclick="spvm();">Cancle</button>
                                </div>
                                <textarea cols="90" rows="10" class="col-12 rounded bg-dark text-white fs-6 p-3"></textarea>
                            </span>
                            <div class="d-flex flex-column mt-3 bg-dark align-items-center border border-1 border-secondary rounded">
                                <!-- type -->
                                <div class=" bg-black col-12 d-flex flex-row align-items-center justify-content-center border border-end border-secondary rounded-top p-4">
                                    <input type="text" placeholder="Type Here ..." class="bg-dark col-9 rounded-1 border border-1 border-secondary p-2 text-white" />
                                    <button class="col-2 ms-3 rounded-1 btn btn-primary">Send</button>
                                </div>
                                <!-- type -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            I recomend this product
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            this is a good one
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->

                                <!-- feedback -->
                                <div class="col-12 rounded p-2 mt-2 d-flex justify-content-center flex-row">
                                    <div class="bg-black col-11 d-lg-flex flex-row align-items-center rounded p-2">
                                        <img src="resources/au.jpg" class="col-1 rounded-5 border border-1 border-primary" />
                                        <div class="col-10 d-flex text-white flex-row bg-dark mx-3 p-2 rounded-1 text-start">
                                            high quality product.
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback -->
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