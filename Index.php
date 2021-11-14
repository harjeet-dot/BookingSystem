<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Booking System</title>
</head>

<body>

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
            <li class="nav-item">
                <a class="nav-link" href="./admin/admin.php">Search Room</a>
            </li>

        </ul>
    </nav>

    <div class="container-form">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">

                        <form>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-login text-uppercase fw-bold" type="submit">Sign
                                    in</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white">

            <div class="container p-4 pb-0">


            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Project By Kazuhisa kondo, Harjeet Singh Bajwa, Ramandeep Kaur Cheema

            </div>

        </footer>

    </section>


</body>

</html>