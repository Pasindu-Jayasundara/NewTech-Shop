<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Message | New Tech</title>

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

                <i class="bi bi-arrow-left-square text-white fs-1 position-absolute" style="margin-left: 2%; margin-top: 4%; cursor:pointer;" onclick="history.back();"></i>
                <p class="fs-3 col-12 text-center text-warning mt-4">New Message</p>
                <div class="row d-flex justify-content-center my-4">



                    <div class="col-8 rounded d-flex flex-column align-items-start justify-content-center bg-dark py-3">

                        <form class="row g-3 needs-validation col-12 p-3" novalidate>
                            <p style="color: chartreuse;" class="fs-4">Find Receiver :</p>
                            <div class="col-md-4">
                                <label class="form-label">To</label>
                                <select class="form-select">
                                    <option>Seller</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Shop</label>
                                <input type="text" class="form-control" required />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" required />
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5 mb-4">
                                <button class="btn btn-success col-6 d-grid" type="submit">Search</button>
                            </div>

                            <div class="col-12 d-flex justify-content-center">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Kamal Perera</h5>
                                    <img src="resources/bs.png" class="card-img-top h-50" style="width: 35%;" />
                                    <div class="card-body d-flex flex-column align-items-center col-12">
                                        <hr class="col-12" />
                                        <span class="btn btn-outline-warning col-12 d-grid" onclick="nmf();">Choose</span>
                                    </div>
                                </div>
                            </div>

                            <span id="nm" class="d-none">
                                <div class="col-md-12 ">
                                    <label class="form-label fs-4" style="color: chartreuse;">Message :</label>
                                    <div class="ms-5 mb-3">
                                        <p class="fs-5 text-white">To (Seller): Kamal Perera</p>
                                    </div>
                                    <textarea cols="184" rows="10" class="rounded col-12 bg-dark text-white p-3"></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-center mt-5 mb-4">
                                    <button class="btn btn-success col-6 d-grid" type="submit">Send Message</button>
                                </div>
                            </span>
                        </form>

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