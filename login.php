<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title id="title">User LogIn | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 a">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xxl-6">
                        <div class="row b2 rounded-5" id="b2">
                            <p class="text-white fs-1 fw-bold d-flex justify-content-center mt-5 c">Welcome to New Tech.</p>
                            <div class="col-10 offset-1 mb-4">
                                <!-- register -->
                                <form class="row g-3 d-none" id="register">
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
                                    <div class="col-6">
                                        <label class="form-label text-white">Mobile</label>
                                        <input type="tel" class="form-control" required>
                                    </div>
                                    <div class="col-6 offset-0">
                                        <label class="form-label text-white">Gender</label>
                                        <input type="text" class="form-control col-10" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <br />
                                            <input class="form-check-input bg" type="checkbox" id="condition" required>
                                            <label class="form-check-label text-white" for="condition">
                                                Agree to terms and conditions <span class="text-primary text-decoration-underline fs-6" onclick="terms();">Read Here...</span>
                                            </label>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="col-12 d-flex">
                                        <button class="btn btn-primary col-5 d-grid mx-lg-3 mx-0" type="submit" onclick="changeForm();">Register</button>
                                        <button class="btn btn-success col-5 d-grid offset-1" type="submit" onclick="changeForm();">Log In</button>
                                    </div>


                                </form>

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
                                    <a href="index.php" class="btn btn-primary col-5 col-sm-5 d-grid mx-3" type="submit">Log In</a>
                                    <button class="btn btn-success col-5 col-sm-5 d-grid offset-1 offset-sm-0" type="submit" onclick="changeForm();">Register</button>

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

                    <!-- terms -->
                    <div class="modal fade" id="terms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header  bg-black">
                                    <h1 class="modal-title fs-5 fw-bold text-danger" id="staticBackdropLabel">Terms & Conditions</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-white bg-dark">
                                    By Understandig this Terms & Condition , You are here by giving us the authority to store cookies & session data in your web browser. 
                                    We intened to use those data to provide better user experience.<br/><br/><br/>
                                    As the `NEW TECH` company is not responsible for any damage caused by misplacing or by giving thoes data to the other parties.<br/>
                                </div>
                                <div class="modal-footer bg-black">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeTerms();">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="acceptTerms();">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- terms -->

                </div>
            </div>

        </div>
    </div>



    <script src="bootstrap.js"></script>
    <script src="script.js"></script>

</body>

</html>