<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Address Book | New Tech</title>

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

            <div class="col-12 d-flex">
                <div class="row d-lg-flex flex-lg-row justify-content-lg-center align-items-lg-center d-flex flex-column align-items-lg-end justify-content-start m-lg-5 m-2">

                    <div class="d-flex flex-row col-12 justify-content-between">
                        <i class="bi bi-arrow-left-square text-white d-block  fs-2" onclick="history.back();"></i>
                        <i class="bi bi-plus-square  fs-2 " id="plus" onclick="cAddress();"></i>
                    </div>

                    <div class="col-lg-8 col-12 border border-1 border-white rounded" id="add">
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-5 col-11 m-3 border border-1 border-secondary rounded py-3">
                                <div class="row d-flex flex-row justify-content-center">

                                    <div class="col-8">
                                        <p>Pasindu Bhathiya</p>
                                        <span class="d-block">0740211671</span>
                                        <span class="d-block">
                                            ssssss ssssssssssssss ssssssssssssss
                                            ddddddddddd dddddddddd
                                        </span>
                                    </div>

                                    <div class="col-3 bg-dark rounded d-flex flex-column align-items-center justify-content-center">
                                        <i class="bi bi-trash fs-5 btn btn-outline-danger"></i>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-5 col-11 m-3 border border-1 border-secondary rounded py-3">
                                <div class="row d-flex flex-row justify-content-center">

                                    <div class="col-8">
                                        <p>Pasindu Bhathiya</p>
                                        <span class="d-block">0740211671</span>
                                        <span class="d-block">
                                            ssssss ssssssssssssss ssssssssssssss
                                            ddddddddddd dddddddddd
                                        </span>
                                    </div>

                                    <div class="col-3 bg-dark rounded d-flex flex-column align-items-center justify-content-center">
                                        <i class="bi bi-trash fs-5 btn btn-outline-danger"></i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-11 col-lg-5 m-3 border border-1 border-secondary rounded py-3">
                                <div class="row d-flex flex-row justify-content-center">

                                    <div class="col-8">
                                        <p>Pasindu Bhathiya</p>
                                        <span class="d-block">0740211671</span>
                                        <span class="d-block">
                                            ssssss ssssssssssssss ssssssssssssss
                                            ddddddddddd dddddddddd
                                        </span>
                                    </div>

                                    <div class="col-3 bg-dark rounded d-flex flex-column align-items-center justify-content-center">
                                        <i class="bi bi-trash fs-5 btn btn-outline-danger"></i>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- model -->
            <div class="col-12 text-white vh-min-100 d-none mb-5" style="background-color: rgba(0, 0, 0, 0.49); margin-top: -3%;" id="newAdd">

                <p class="fs-2" style="margin-left: 10%;">Add a new Address</p>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-lg-8 col-11 border border-1 border-white rounded">
                        <div class="row d-flex flex-row align-items-center justify-content-center">

                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Mobile</label>
                                    <div class="input-group has-validation">
                                        <input type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Province</label>
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">District</label>
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">City</label>
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Line 1</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Line 2</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                                </div>

                                <div class="mt-5 mb-4 d-flex">
                                    <div class="col-3">
                                        <button class="btn btn-danger col-12 d-grid" type="submit" onclick="cAddress();">Close</button>
                                    </div>
                                    <div class="col-3 mx-2">
                                        <button class="btn btn-success col-12 d-grid" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>



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