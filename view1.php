<?php
include 'config/crud_minuman.php';
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
         <!-- profile modal end -->
         <div class="row mb-3">
            <div class="col-3">
                <a href="tambah_minuman.php" class="btn btn-primary">Add New <i class="fa fa-user-circle-o"></i></a>
            </div>
            <div class="col-9">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">

                </div>
            </div>
        </div>

        <!-- table -->
        <table class="table" id="userstable">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama minuman</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $no_minuman = $row['no_minuman'];
                    $gambar = $row['gambar'];
                    $nama_minuman = $row['nama_minuman'];
                    $harga = $row['harga'];
                    $deskripsi = $row['deskripsi'];
                ?>
                    <tr>
                        <td class="align-middle"><img src="config/uploads/<?php echo $gambar; ?>" class="img-thumbnail rounded float-left"></td>
                        <td class="align-middle"><?php echo $nama_minuman; ?></td>
                        <td class="align-middle"><?php echo $harga; ?></td>
                        <td class="align-middle"><?php echo $deskripsi; ?></td>
                        <td class="align-middle">
                            <form action="edit_minuman.php" method="POST">
                                <input type="hidden" name="no_minuman" value="<?php echo $no_minuman; ?>" />
                                <input type="hidden" name="nama_minuman" value="<?php echo $nama_minuman; ?>" />
                                <input type="hidden" name="harga" value="<?php echo $harga; ?>" />
                                <input type="hidden" name="deskripsi" value="<?php echo $deskripsi; ?>" />
                                <button type="submit" class="btn btn-primary mr-3 edituser"><i class="fa fa-pencil-square-o fa-lg"></i></button>
                            </form>
                        </td>
                    
                        <!-- form delete -->
                        <td class="align-middle">
                            <form action="config/hapus_minuman.php" method="POST">
                                <input type="hidden" name="no_minuman" value="<?php echo $no_minuman; ?>" />
                                <button type="submit" class="btn btn-danger deleteuser"><i class="fa fa-trash-o fa-lg"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table><!-- table -->
        <nav id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <input type="hidden" name="currentpage" id="currentpage" value="1">
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