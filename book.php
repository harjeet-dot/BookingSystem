<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/book.css">
    <title>Booking</title>
</head>

<style>
    .form-main {
        margin: 0 auto;
        padding-top: 10%;
        margin-top: 6%;

        box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, .12);

    }
</style>

<body style="background-image: url(../img/book-img.jpg);">

    <nav class="navbar fixed-top navbar-expand-sm bg-light navbar-light">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meeting Booking System</a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./admin/admin.php">Admin</a>
            </li>


        </ul>
    </nav>


    <form class="row g-3 form-main">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Date</label>
            <input type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" placeholder="2" min="1" required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Meeting Type</label>
            <select id="room-selection" class="form-control" name="room_preference" required>
                <option value="">Choose the Meeting Purpose</option>
                <option value="connecting">General</option>
                <option value="adjoining">Presentation</option>
                <option value="adjacent">Seminar</option>
            </select>

        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Start Date</label>
            <input type="time" class="form-control" id="start-date" name="start-period" required>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">End Date</label>
            <input type="time" class="form-control" id="end-date" name="end-period" required>
        </div>

        <div class="col-12">
            <button type="submit">Search Room</button>
        </div>



</body>
<script src="js/book.js"></script>

</html>