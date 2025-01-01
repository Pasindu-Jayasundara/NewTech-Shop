<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Board | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">

        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>
            <div class="col-12">

                <i class="bi bi-arrow-left-square d-none d-lg-flex text-white position-absolute fs-2 ms-4 mt-4" style="cursor: pointer;" onclick="history.back();"></i>
                <p class=" text-warning fs-1 d-flex justify-content-center">Admin Board</p>

                <div class="row border border-1 border-secondary rounded bg-dark mx-5 mb-5 pb-4">

                    <!-- members -->
                    <div class="d-flex flex-column">
                        <p class="fs-5 mx-3 my-3" style="color: chartreuse; cursor:pointer;" id="cabm" onclick="admin(id);">Current Admin Board Members</p>


                        <!-- card -->
                        <div class="d-lg-flex flex-lg-row justify-content-lg-evenly d-flex flex-column align-items-center d-none " id="cabmc">

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex flex-column">
                        <p class="fs-5 mx-3 my-3" style="color: chartreuse; cursor:pointer;" id="oabm" onclick="admin(id);">Old Admin Board Members</p>


                        <!-- card -->
                        <div class="d-lg-flex flex-lg-row justify-content-lg-evenly d-flex flex-column align-items-center d-none " id="oabmc">

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminResignedProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminResignedProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminResignedProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                            <div class="card bg-black text-center mb-2 mb-lg-0 d-lg-flex flex-lg-column align-items-lg-center border border-1 border-white" style="width: 18rem;">
                                <h5 class="card-title mt-2" style="color: rgb(234, 0, 234);">Pasindu Bhathiya</h5>

                                <div class="col-12">
                                    <img src="resources/bs.png" class="card-img-top h-100 " style="width: 50%;" />
                                </div>


                                <div class="card-body d-flex flex-column align-items-center">
                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-white btn btn-outline-info d-grid col-12" onclick="window.location='adminResignedProfile.php';">View Profile</span>

                                    <hr class="col-12 text-white" />
                                    <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                </div>
                            </div>

                        </div>

                    </div>




                    <p class="fs-5 mx-3 my-3" style="color: chartreuse; cursor:pointer;" id="ana" onclick="admin(id);">Add New Admin </p>

                    <!-- Add admin -->
                    <div class="d-flex flex-column mt-4 d-none" id="anab">
                        <hr>
                        <p class="fs-5 mx-3 my-3" style="color: chartreuse;">Add Admin :</p>
                        <div class="d-flex ms-lg-5 ms-0">
                            <div class="col-12">

                                <form class="row g-3" id="register">
                                    <div class="col-6">
                                        <label class="form-label text-white">First name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="col-6 offset-0">
                                        <label class="form-label text-white">Last name</label>
                                        <input type="text" class="form-control col-10" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label text-white">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label text-white">Password</label>
                                        <input type="password" class="form-control" required>
                                    </div>
                                    <div class="col-6 offset-0">
                                        <label class="form-label text-white">Re-type Password</label>
                                        <input type="password" class="form-control col-10" required>
                                    </div>
                                    <br />

                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="btn btn-primary col-6 d-grid mx-3" type="submit" onclick="changeForm();">Register Admin</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

</body>

</html>