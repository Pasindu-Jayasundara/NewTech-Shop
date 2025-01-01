<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin SignIn | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body class="admin-body">

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 a">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xxl-6">
                        <div class="row b2 rounded-5" id="b2">
                            <p class="text-white fs-1 fw-bold d-flex justify-content-center mt-5 c">Welcome to New Tech.</p>
                            <div class="col-10 offset-1 mb-4">

                                <!-- login -->
                                <form class="row g-3" id="login">
                                    <div class="col-12">
                                        <label class="form-label text-white">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label text-white">Password</label>
                                        <input type="password" class="form-control" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <br />
                                            <input class="form-check-input bg" type="checkbox" id="condition" required>
                                            <label class="form-check-label text-white" for="condition">
                                                Remember Me
                                            </label>
                                            <a onclick="fogotPasswordNotice();" class="form-check-label text-white float-end" style="cursor: pointer;" for="condition">
                                                Forgot Password
                                            </a>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-warning col-5 col-sm-6 d-grid  mt-5" type="submit" onclick="window.location='adminPanel.php';">Log In as Admin</button>
                                        <button class="btn btn-danger col-5 col-sm-6 d-grid ms-2 mt-5" type="submit" onclick="window.location='login.php';">Log In as User</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-center mt-5">
                        <p class="pt-4 fs-6">&copy; 2022 New_Tech.lk || All Right Reserved</p>
                    </div>

                    <!-- model 1 -->

                    <div class="modal fade" id="model1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header  bg-black">
                                    <h1 class="modal-title fs-5 fw-bold text-danger" id="staticBackdropLabel">Important</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-warning bg-dark">
                                    We have send a Account Verification Code to Your Email Address.
                                </div>
                                <div class="modal-footer bg-black">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="forgotPassword();">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- model 1 -->

                    <!-- model 2 -->

                    <div class="modal" tabindex="-1" id="forgotPasswordModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-black text-warning">
                                    <h5 class="modal-title">Reset Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body bg-dark text-white">
                                    <div class="row g-3">

                                        <div class="col-6">
                                            <label class="form-lable">New Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" id="passwd1">
                                                <button class="btn btn-outline-secondary" type="button" id="pbtn1" onclick="showPassword();">
                                                    <i class="bi bi-eye-slash-fill"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-lable">Re-type Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" id="passwd2">
                                                <button class="btn btn-outline-secondary" type="button" id="pbtn2" onclick="showPassword2();">
                                                    <i class="bi bi-eye-slash-fill"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-lable">Verification Code</label>
                                            <input type="text" class="form-control" id="vc">
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer bg-black">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.reload();">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="window.location.reload();">Reset Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- model 2 -->

                </div>
            </div>

        </div>
    </div>



    <script src="bootstrap.js"></script>
    <script src="script.js"></script>

</body>

</html>