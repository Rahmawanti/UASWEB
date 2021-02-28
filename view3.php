<?php
include 'config/crud_profile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Website</title>
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table" id="userstable">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                ?>
                    <tr>
                        <td class="align-middle"><?php echo $username; ?></td>
                        <td class="align-middle"><?php echo $email; ?></td>
                        <td class="align-middle"><?php echo $password; ?></td>
                        <td class="align-middle">
                            <form action="edit_profile.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="password" value="<?php echo $password; ?>" />
                                <button type="submit" class="btn btn-primary mr-3 edituser"><i class="fa fa-pencil-square-o fa-lg"></i></button>
                            </form>
                    
                        <!-- form delete -->
                        <td class="align-middle">
                            <form action="config/hapus_profile.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger deleteuser"><i class="fa fa-trash-o fa-lg"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table><!-- table -->
    </div>
    <br>
<br>
<br>
<br>
<br>
  <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright by 18111128_RAHMAWANTI_TIF RP 18 CID A_UASWEB1</p>
                </div>
            </div>
        </div>
    </footer>

<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</div>
    <div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
<br />
    Loading...
</div>
</body>
<script>
$(document).ready(function() {
// $('#overlay').fadeIn().delay(2000).fadeOut();
});
</script>

</html>