<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title id="tpay">Manage My Account | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="semantic.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100">
            <?php include "header.php"; ?>

            <div class="col-12 mt-4">
                <div class="row d-flex flex-row">
                    <!-- navigation -->
                    <div class="col-10 col-lg-2 mx-4">
                        <div class="row">
                            <i class="bi bi-arrow-left-square text-white fs-1 d-none d-lg-block " style="cursor:pointer;" onclick="history.back();"></i>

                            <div class="border border-1 border-white rounded">
                                <ol class="ui list fs-5 my-3 mx-3">
                                    <li style="user-select: auto; cursor: pointer;"><span onclick="man();">Manage My Account</span>
                                        <ol style="user-select: auto;">
                                            <li style="user-select: auto; cursor: pointer;" onclick="window.location='profile.php';">My Profile</li>
                                            <li style="user-select: auto; cursor: pointer;" onclick="window.location='addressBook.php';">Address Book</li>
                                            <li style="user-select: auto; cursor: pointer;" onclick="pay();">Payment Options</li>
                                        </ol>
                                    </li>
                                    <li style="user-select: auto; cursor: pointer;" onclick="window.location='deleteAccount.php';">Delete My Account</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <!-- navigation -->

                    <div class="col-10 col-lg-9 mt-4 mt-lg-0">

                        <!-- manage -->
                        <div class="row" id="manage">
                            <?php include "manageMyAccount.php"; ?>
                        </div>

                        <div class="row d-none" id="payment">
                            <?php include "payment.php"; ?>
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