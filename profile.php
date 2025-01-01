<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile | New Tech</title>

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

            <div class="d-lg-flex flex-lg-row p-0 card-text my-5  justify-content-lg-center d-flex flex-column align-items-center">
                <i class="bi bi-arrow-left-square position-absolute fs-3 d-none d-lg-block" style="margin-left: -95%; cursor: pointer;" onclick="window.location='myProfile.php';"></i>
                <div class="col-lg-4  col-12 text-white d-lg-flex d-flex flex-column align-items-center flex-lg-row justify-content-lg-end justify-content-center px-5" style="font-size:1000% ;">
                    <div class="d-flex flex-column align-items-center justify-content-center col-lg-8 col-12 rounded border border-1 border-white" style="height: 50%;">
                        <div class="col-10 border border-0 rounded d-flex pt-5 justify-content-center align-items-center" style="margin-top: 20%;  height: 60%; margin-bottom: -40%;">
                            <i class="bi bi-person-circle d-none" id="ppicon"></i>
                            <img src="resources/au.jpg" class="col-10 rounded-circle"/>
                        </div>
                        <div class="d-block mt-lg-0 mt-5 p-3 p-lg-0" >
                            <button class="btn btn-outline-info"><label for="upi">Change</label></button>
                            <input type="file" id="upi" hidden/>
                            <button class="btn btn-outline-danger">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="border border-1 border-white rounded bg-dark col-lg-6 col-11 d-flex justify-content-center mx-4">

                    <div class="col-11 pt-4 px-3">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="" required>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="" required>
                            </div>
                            <div class="col-md-12">
                                <label for="validationDefaultUsername" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Mobile</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Registered Date & Time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefaultUsername" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                    <span class="input-group-text" id="inputGroupPrepend2">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">Province</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">District</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">City</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">State</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-12 d-flex flex-row mx-3 my-4 mt-5">
                                <div class="col-6">
                                    <button class="btn btn-success col-11 d-grid" type="submit">Save Changes</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-info col-11 d-grid" type="submit">Edit</button>
                                </div>
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