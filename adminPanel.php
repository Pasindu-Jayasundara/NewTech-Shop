<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title id="Ap">Admin | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="semantic.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100 ">
            <?php include "header.php"; ?>

            <div class="col-12 mt-4">
                <div class="row d-flex flex-row">

                    <!-- navigation -->
                    <div class="col-lg-2 col-11 mx-4">
                        <div class="row">

                            <div class="border border-1 border-white rounded mb-5">

                                <p class="fs-4 mt-3">Pasindu Bhathiya</p>

                                <hr>

                                <nav class="nav flex-column ms-4 fs-5">
                                    <a class="nav-link text-white" style="cursor:pointer;" onclick="changeAddminBg();"><i class="uil uil-dashboard text-warning fs-3"></i>&nbsp;&nbsp;Dashboard</a>
                                    <a class="nav-link text-white" style="cursor:pointer;" onclick="changeAddminBg2();"><i class="uil uil-sliders-v-alt text-warning fs-3"></i>&nbsp;&nbsp;Manage</a>
                                    <a class="nav-link text-white" style="cursor:pointer;" onclick="changeAddminBg7();"><i class="uil uil-megaphone text-warning fs-3"></i>&nbsp;&nbsp;Announcements</a>
                                    <a class="nav-link text-white" style="cursor:pointer;" href="admins.php"><i class="bi bi-person-workspace text-warning fs-3"></i>&nbsp;&nbsp;Admin Panel</a>
                                    <a class="nav-link text-white" style="cursor:pointer;" href="myProfile.php"><i class="bi bi-person-lines-fill text-warning fs-3"></i>&nbsp;&nbsp;My Account</a>

                                </nav>

                            </div>

                        </div>
                    </div>
                    <!-- navigation -->

                    <div class="col-lg-9 col-12">

                        <div class="row d-none" id="dashboard">
                            <div class="col-12">
                                <?php include "adminDashboard.php"; ?>
                            </div>
                        </div>

                        <div class="row d-none" id="aManage">
                            <div class="col-12">
                                <?php include "adminManage.php"; ?>
                            </div>
                        </div>

                    </div>


                    <div class="row d-none" id="ann">
                        <div class="col-12">
                            <?php include "announcement.php"; ?>
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