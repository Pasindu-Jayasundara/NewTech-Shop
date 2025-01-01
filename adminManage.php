<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Manage | New Tech</title>

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
            <p class=" text-warning fs-1 d-flex justify-content-start">Manage</p>

                <div class="d-flex justify-content-center">
                    <!-- nav bar -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link fs-4" style="color:chartreuse; cursor:pointer;" href="manageUsers.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" style="color:chartreuse; cursor:pointer;" onclick="changeAddminBg3();">Products</a>
                        </li>
                    </ul>
                </div>

                <!-- <div class="row"> -->
                <!-- <div class="col-9"> -->

                <div class="d-none" id="dashboard">
                    <?php include "userManage.php"; ?>
                </div>

                <div class="d-none" id="amp">
                    <?php include "productManage.php"; ?>
                </div>

                <!-- </div> -->
                <!-- </div> -->



            </div>
            <!-- </div> -->
        </div>

        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

</body>

</html>