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
        <div class="row bg-black text-white min-vh-100">
            <div class="col-12">
                <div class="row">

                    <p class="fs-5 fw-bold">Manage My Account</p>
                    <div class="d-lg-flex flex-lg-row d-flex flex-column">
                        <div class="flex-grow-1 mx-4 px-4 border border-secondary rounded bg-dark pt-2 col-12 col-lg-4 mb-4">
                            <p class="fs-5">Personal Profile | <a href="profile.php" class="text-info">Edit</a></p>

                            <div class="mx-5 mb-3 mt-4">
                                <p>Name : Kamal Addaraarachchi</p>
                                <p>Email : Kamal@gmail.com</p>
                                <p>Gender : Male</p>
                                <p>Mobile : 0740211671</p>
                            </div>

                        </div>
                        <div class="flex-grow-1 d-flex flex-column mx-4 px-4 border border-secondary rounded bg-dark pt-2 col-12 col-lg-4 mb-4">
                            <p class="fs-5">Addresss Book | <a href="addressBook.php" class="text-info">Edit</a></p>
                            <div class="d-flex flex-row">
                                <p class="flex-grow-1 border border-0 border-end border-white mx-3 d-flex flex-column">
                                    Shippling Address
                                    <span class="mt-3 px-4">
                                        jhbghnjklkmjn<br />jmndjksxjndcxd <br />cdxszaxc
                                    </span>
                                </p>
                                <p class="flex-grow-1 px-4 d-flex flex-column">
                                    Billing Address
                                    <span class="mt-3 px-4">
                                        jhbghnjklkmjn<br />jmndjksxjndcxd <br />cdxszaxc
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- empty messege -->
                    <!-- <p class="mt-5 fs-5 fw-bold">Messeges</p>
                    <div class="d-flex flex-column">
                        <div class="mx-4 px-4 border border-secondary rounded bg-dark pt-2 d-flex align-items-center justify-content-center pb-2">
                            <p>You have no New Messeges</p>
                        </div>
                    </div> -->
                    <!-- empty messege -->


                    <!-- have messege -->
                    <p class="mt-5 fs-5 fw-bold">Messeges <span class="badge text-bg-warning">New</span></p>

                    <!-- 1 -->
                    <div class="d-flex mb-3">
                        <div class="mx-4 px-4 border border-secondary rounded bg-dark pt-2 d-flex align-items-center justify-content-center pb-2">
                            <div>
                                <i class="bi bi-x text-white fs-6 btn btn-danger" style="margin-right: 8px; margin-left: -5px;"></i>
                                 From : Kamal
                                <button class="btn btn-outline-info mx-3" onclick="window.location='myMessege.php';">View</button>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="d-flex mb-3">
                        <div class="mx-4 px-4 border border-secondary rounded bg-dark pt-2 d-flex align-items-center justify-content-center pb-2">
                            <div>
                                <i class="bi bi-x text-white fs-6 btn btn-danger" style="margin-right: 8px; margin-left: -5px;"></i>
                                 From : Kamal
                                <button class="btn btn-outline-info mx-3" onclick="window.location='myMessege.php';">View</button>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="d-flex mb-3">
                        <div class="mx-4 px-4 border border-secondary rounded bg-dark pt-2 d-flex align-items-center justify-content-center pb-2">
                            <div>
                                <i class="bi bi-x text-white fs-6 btn btn-danger" style="margin-right: 8px; margin-left: -5px;"></i>
                                 From : Kamal
                                <button class="btn btn-outline-info mx-3" onclick="window.location='myMessege.php';">View</button>
                            </div>
                        </div>
                    </div>

                    <!-- have messege -->

                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>