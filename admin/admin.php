<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
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
            <a class="nav-link" href="#">Signup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./admin/admin.php">Admin</a>
        </li>
        
    </ul>
</nav>

  <div id="login">
    <h3 class="text-center text-white pt-5">Admin Panel</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="" method="post">
              <h3 class="text-center text-info">Admin Panel</h3>
              <div class="form-group">
                <label for="username" class="text-info">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Password:</label><br>
                <input type="text" name="password" id="password" class="form-control">
              </div>
              <div class="form-group">
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
</body>

</html>