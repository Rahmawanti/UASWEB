
  <?php
session_start();
include 'config/koneksi.php';
include 'config/crud_makanan.php';
include 'config/crud_minuman.php';
include 'config/crud_profile.php';

?>
<!doctype html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Website Starbucks</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/halutama.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <a href="#home" class="navbar-brand page">Website Starbucks</a>
            </div>

            <ul class="nav navbar-nav navbar-right">


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: white;"><?php echo $_SESSION['username']; ?></span>
                        <img class="img-profile rounded-circle" src="image/undraw_profile.svg" width="26" height="26">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="edit_profile.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="config/logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>


        </div>
    </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div class="jumbotron text-center">
        <img src="img/str.jpeg" alt="" class="rounded-circle">
        <h1>Starbucks</h1>
    </div>
  <!-- jumbotron -->

 <!-- container menu makanan -->
 <div class="container">
    <div class="alert alert alert-primary" role="alert">
    <a class="btn" href="view.php">Data Makanan</a>
</div>
 
<!-- container menu makanan -->

  <!-- container menu minuman -->
  <div class="container">
        <div class="alert alert alert-primary" role="alert">
        <a class="btn" href="view1.php">Data Minuman</a>
        </div>
  
  <!-- container menu -->
  

<br>
<br>
<br>
<br>
  <!-- kaki -->
  <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright by 18111128_RAHMAWANTI_TIF RP 18 CID A_UASWEB1</p>
                </div>
            </div>
        </div>
    </footer>
  <!-- kaki -->
  <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
</body>

</html>