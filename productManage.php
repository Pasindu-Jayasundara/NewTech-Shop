<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Product Manage | New Tech</title>

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

                <div class="row border border-1 border-secondary rounded bg-dark mx-5 mb-5 pb-4 d-flex">

                    <div class="border d-none d-lg-flex border-0 border-end border-white mt-4 col-lg-3 col-11">
                        <nav class="nav flex-column">
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg4();"><i class="bi bi-plus-square"></i>&nbsp;Add</a>
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg5();"><i class="bi bi-trash"></i>&nbsp;Remove</a>
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg6();"><i class="bi bi-arrow-repeat"></i>&nbsp;Permission</a>
                        </nav>
                    </div>

                    <div class="border d-flex d-lg-none border-0 border-bottom border-white mt-4 col-lg-3 col-12">
                        <nav class="nav flex-column">
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg4();"><i class="bi bi-plus-square"></i>&nbsp;Add</a>
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg5();"><i class="bi bi-trash"></i>&nbsp;Remove</a>
                            <a class="nav-link" style="cursor:pointer;" onclick="changeAddminBg6();"><i class="bi bi-arrow-repeat"></i>&nbsp;Permission</a>
                        </nav>
                    </div>

                    <!-- <div class="row"> -->
                    <div class="col-lg-9 col-12">

                        <div class="d-none" id="ad">
                            <?php include "add.php"; ?>
                        </div>

                        <div class="d-none" id="re">
                            <?php include "remove.php"; ?>
                        </div>

                        <div class="d-none" id="per">
                            <?php include "permission.php"; ?>
                        </div>

                    </div>

                    <!-- </div> -->

                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>