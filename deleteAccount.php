<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage My Account | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100 d-flex align-items-center justify-content-center">
            <div class="col-12">

                <div class="row d-flex align-items-center justify-content-center">

                    <div class="col-7 border border-1 border-white rounded p-4" id="f1">

                        <form class="row g-3 needs-validation" novalidate>

                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" value="" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" value="" required>
                            </div>
                            <div class="d-flex mt-5 mb-4 col-12">
                                <div class="col-lg-7 col-12 d-lg-flex flex-lg-row justify-content-lg-evenly d-flex flex-column">
                                    <a href="myProfile.php" class="btn btn-primary col-lg-5 col-12 d-grid">Go Back</a>
                                    <a class="btn btn-danger col-lg-5 d-grid col-12 mt-2 mt-lg-0" onclick="deleteA();">Delete My Account</a>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-4 col-11 border border-1 border-white rounded p-4 d-none" id="f2">

                        <form class="row g-3 needs-validation" novalidate>

                            <div class="col-md-12">
                                <span class="text-warning">Please check your Email & Enter the Varification Code below.</span>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Verification Code</label>
                                <input type="tel" class="form-control" value="" required>
                            </div>
                            <div class="d-flex mt-5 mb-4 col-12 justify-content-evenly">
                                <a href="myProfile.php" class="btn btn-primary col-lg-5 col-6 d-grid">Go Back</a>
                                <a class="btn btn-danger col-lg-5 col-6 d-grid ms-2 ms-lg-0" onclick="deleteA2();">Delete My Account</a>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>