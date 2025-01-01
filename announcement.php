<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Announcement | New Tech</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/images/icon.ico" />

</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row bg-black text-white min-vh-100">
            <div class="col-12 ">
                <p class=" text-warning fs-1 d-flex justify-content-center">Announcement</p>

                <div class="row border border-1 border-secondary rounded bg-dark mx-lg-5 mb-5 pb-4">

                    <form class="row g-3 needs-validation" novalidate>
                        <p style="color: chartreuse;" class="fs-4">Find Receiver :</p>
                        <div class="col-md-4">
                            <label class="form-label">Type</label>
                            <select class="form-select">
                                <option>Specific</option>
                                <option>All</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" required />
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" required />
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5 mb-4">
                            <span class="btn btn-success col-6 d-grid" onclick="anno();">Search</span>
                        </div>

                        <!-- card -->
                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center ">
                            <div class="col d-none" id="annod">
                                <div class="card bg-black text-center d-flex flex-column align-items-center border border-1 border-white" style="width: 18rem;">
                                    <h5 class="card-title mt-2" style="color: chartreuse;">Pasindu Bhathiya</h5>
                                    <img src="resources/bs.png" class="card-img-top h-50" style="width: 45%;" />
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-white btn btn-outline-warning d-grid col-12 mt-2" onclick="ame();">Messege</span>
                                        <hr class="col-12 text-white" />
                                        <span class="card-text text-text-secondary">Joined Date : 2022/03/28</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 d-none" id="mbox">
                                <label class="form-label fs-4" style="color: chartreuse;">Messege :</label>
                                <div class="ms-5 mb-3">
                                    <p class="fs-5 text-white">To (Seller): Pasindu Bhathiya</p>
                                </div>
                                <textarea cols="184" rows="10" class="rounded col-12 bg-dark border border-1 border-secondary text-white p-3"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5 mb-4 d-none" id="msb">
                                <button class="btn btn-success col-12 d-grid" type="submit">Send Message</button>
                            </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>