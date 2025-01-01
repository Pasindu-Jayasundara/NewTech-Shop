<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Profile | New Tech</title>

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

            <div class="d-flex flex-row p-0 card-text my-5 justify-content-center">
                <i class="bi bi-arrow-left-square position-absolute d-none d-lg-flex fs-3" style="margin-left: -95%; cursor: pointer;" onclick="history.back();"></i>
                <div class="col-4 text-white d-flex flex-row justify-content-end px-5" style="font-size:1000% ;">
                    <div class="d-flex flex-column align-items-center justify-content-center col-8 rounded" style="height: 50%;">
                        <div class="col-10 d-flex justify-content-center align-items-center" style="margin-top: 20%;  height: 60%; margin-bottom: -40%;">
                            <img src="resources/au.jpg" class="h-100 border border-1 border-white"/>
                        </div>
                    </div>
                </div>
                <div class="border border-1 border-white rounded bg-dark col-6 d-flex justify-content-center mx-4">

                    <div class="col-11 pt-4 px-3">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="Pasindu" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="Bhathiya" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDefaultUsername" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="pasindubathiya28@gmail.com" disabled>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Registered Date & Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="2022-01-01" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Mobile</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="0740211671" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">Province</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="western" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">District</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="colombo" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">City</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="colombo" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" value="10300" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label">Address Line 1</label>
                                <input type="text" class="form-control" id="validationDefault02" value="70/1/3" disabled>
                            </div>
                            <div class="col-md-6 mb-4 mb-lg-0">
                                <label for="validationDefault02" class="form-label">Address Line 2</label>
                                <input type="text" class="form-control" id="validationDefault02" value="colombo" disabled>
                            </div>
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