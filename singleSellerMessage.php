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

        <form class="row g-3 needs-validation" novalidate>
            <p style="color: chartreuse;">Find Seller :</p>
            <div class="col-md-4">
                <label class="form-label">Type</label>
                <select class="form-select">
                    <option>All</option>
                    <option>Specific</option>
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
            <div class="col-md-12">
                <label class="form-label" style="color: chartreuse;">Messege :</label>
                <textarea cols="184" rows="10" class="rounded"></textarea>
            </div>
            <div class="col-6 d-flex justify-content-center mt-5 mb-4">
                <button class="btn btn-success col-6 d-grid" type="submit" onclick="history.back();">Go Back</button>
            </div>
            <div class="col-6 d-flex justify-content-center mt-5 mb-4">
                <button class="btn btn-success col-6 d-grid" type="submit">Send To Pasindu</button>
            </div>
        </form>

        <hr />


    </div>

    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>