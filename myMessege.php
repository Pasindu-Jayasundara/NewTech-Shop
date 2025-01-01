<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Message | New Tech</title>

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

            <div class="col-12">

                <i class="bi bi-arrow-left-square text-white fs-1 position-absolute mb-4" style="margin-left: 2%; margin-top: 0%; cursor:pointer;" onclick="history.back();"></i>

                <div class="d-lg-flex flex-lg-row justify-content-lg-end d-flex justify-content-end">
                    <span class="btn btn-success col-lg-1 col-4 d-grid mt-lg-4 mt-2 me-2" style="cursor:pointer; " onclick="window.location='newMessege.php';">New Massage</span>
                    <span class="btn btn-danger col-lg-1 col-4 d-grid mt-lg-4 mt-2">Clear All</span>
                </div>

                <div class="row d-lg-flex flex-lg-row d-flex flex-column align-items-center align-items-lg-start my-4">
                    <div class="col-lg-3 col-12 mx-lg-5 mx-1 mb-4 ">

                        <p class="fs-2">My Message</p>
                        <div class="border border-1 border-white rounded p-4">


                            <div class="m-3 px-2">

                                <ul class="nav flex-column">
                                    <li class="nav-item col-11">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By Received Time</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="t" type="radio">
                                            <span>Newest to Oldest</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="t" type="radio">
                                            <span>Oldest to Newest</span>
                                        </span>
                                    </li>

                                    <li class="nav-item col-10 mb-4">
                                        <a class="nav-link text-warning fs-4" aria-current="page" href="#">By State</a>
                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="s" type="radio">
                                            <span>New</span>
                                        </span>

                                        <span class="d-inline-block col-12">
                                            <input class="form-check-input" style="margin-left:15% ;" name="s" type="radio">
                                            <span>Read</span>
                                        </span>
                                    </li>
                                </ul>

                            </div>
                            <p class="fs-4 text-info">Total Messages : <span class="color: chartreuse;">10 Messages</span></p>
                        </div>
                    </div>

                    <div class="col-lg-8 col-11 mb-5 d-flex flex-column align-items-center justify-content-center border border-1 border-white rounded d-lg-flex flex-lg-column align-items-lg-start justify-content-lg-center bg-dark py-3">

                        <!-- 1 -->
                        <div class="row row-cols-1 row-cols-md-1 g-4">
                            <div class="col">
                                <div class="alert alert-secondary bg-black border-danger d-flex flex-column" role="alert">
                                    <div class="d-flex flex-row col-12">
                                        <span class="col-9">
                                            <span class="text-white">From : Admin</span><br />
                                            <span class="text-white">Date & Time : 01-2-02-2022 00:00:00</span>
                                        </span>
                                        <span class="d-flex flex-row align-items-center justify-content-end col-3">
                                            <button class="btn btn-primary" onclick="msgread();">Read</button>
                                        </span>
                                    </div>
                                    <div class="d-none bg-dark mt-2 p-3 rounded" id="msgcon">
                                        <p class="text-info">Thanks for giving us those informations.</p>
                                        <p style="color:greenyellow" class="text-end" id="rmsg"></p>
                                        <button class="btn btn-success ms-1" onclick="msgrep();" id="rep">Reply</button>
                                        <div class="d-flex flex-row d-none" id="tmsg">
                                            <input type="text" class="col-10 rounded bg-white text-black p-2" id="txtin" />
                                            <button class="btn btn-warning ms-1 col-2" onclick="rsend();">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="col">
                                <div class="alert alert-secondary bg-black border-danger d-flex flex-column" role="alert">
                                    <div class="d-flex flex-row col-12">
                                        <span class="col-8">
                                            <span class="text-white">From : Admin</span><br />
                                            <span class="text-white">Date & Time : 01-2-02-2022 00:00:00</span>
                                        </span>
                                        <div class="col-lg-1 col-2 mt-2">
                                            <span class="text-black rounded d-grid p-1 text-center fw-bold fs-6" id="new" style="background-color:chartreuse;">New</span>
                                        </div>
                                        <span class="d-flex flex-row align-items-center justify-content-end col-lg-3 col-2">
                                            <button class="btn btn-primary" onclick="msgread2();">Read</button>
                                        </span>
                                    </div>
                                    <div class="d-none bg-dark mt-2 p-3 rounded" id="msgcon2">
                                        <p class="text-info">Thanks for giving us those informations.</p>
                                        <p style="color:greenyellow" class="text-end" id="rmsg2"></p>
                                        <button class="btn btn-success ms-1" onclick="msgrep2();" id="rep2">Reply</button>
                                        <div class="d-flex flex-row d-none" id="tmsg2">
                                            <input type="text" class="col-10 rounded bg-white text-black p-2" id="txtin2" />
                                            <button class="btn btn-warning ms-1 col-2" onclick="rsend2();">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="col">
                                <div class="alert alert-secondary bg-black border-danger d-flex flex-column" role="alert">
                                    <div class="d-flex flex-row col-12">
                                        <span class="col-9">
                                            <span class="text-white">From : Admin</span><br />
                                            <span class="text-white">Date & Time : 01-2-02-2022 00:00:00</span>
                                        </span>
                                        <span class="d-flex flex-row align-items-center justify-content-end col-3">
                                            <button class="btn btn-primary" onclick="msgread3();">Read</button>
                                        </span>
                                    </div>
                                    <div class="d-none bg-dark mt-2 p-3 rounded" id="msgcon3">
                                        <p class="text-info">Thanks for giving us those informations.</p>
                                        <p style="color:greenyellow" class="text-end" id="rmsg3"></p>
                                        <button class="btn btn-success ms-1" onclick="msgrep3();" id="rep3">Reply</button>
                                        <div class="d-flex flex-row d-none" id="tmsg3">
                                            <input type="text" class="col-10 rounded bg-white text-black p-2" id="txtin3" />
                                            <button class="btn btn-warning ms-1 col-2" onclick="rsend3();">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="col">
                                <div class="alert alert-secondary bg-black border-danger d-flex flex-column" role="alert">
                                    <div class="d-flex flex-row col-12">
                                        <span class="col-8">
                                            <span class="text-white">From : Admin</span><br />
                                            <span class="text-white">Date & Time : 01-2-02-2022 00:00:00</span>
                                        </span>
                                        <div class="col-lg-1 col-2 mt-2">
                                            <span class="text-black rounded d-grid p-1 text-center fw-bold fs-6" id="new4" style="background-color:chartreuse;">New</span>
                                        </div>
                                        <span class="d-flex flex-row align-items-center justify-content-end col-lg-3 col-2">
                                            <button class="btn btn-primary" onclick="msgread4();">Read</button>
                                        </span>
                                    </div>
                                    <div class="d-none bg-dark mt-2 p-3 rounded" id="msgcon4">
                                        <p class="text-info">Thanks for giving us those informations.</p>
                                        <p style="color:greenyellow" class="text-end" id="rmsg4"></p>
                                        <button class="btn btn-success ms-1" onclick="msgrep4();" id="rep4">Reply</button>
                                        <div class="d-flex flex-row d-none" id="tmsg4">
                                            <input type="text" class="col-10 rounded bg-white text-black p-2" id="txtin4" />
                                            <button class="btn btn-warning ms-1 col-2" onclick="rsend4();">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->


                            <!-- pagination -->
                            <div class="col-12 mt-5">
                                <hr />
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <nav aria-label="Page navigation example" class="text-white d-none d-lg-flex">
                                        <ul class="pagination pagination-lg">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example" class="text-white d-flex d-lg-none">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

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