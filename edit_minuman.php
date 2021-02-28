<?php
$no_minuman = $_POST["no_minuman"];
$nama_minuman = $_POST["nama_minuman"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];

?>

<html>

<head>
	<title>Starbucks Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<title>Edit Data Minuman</title>
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<!-- buat class container -->

	<div class="container">

        <!-- add/edit form modal -->
        <center>
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Minuman <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        </center>

        <form id="addform" method="POST" action="config/edit_minuman.php">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama minuman</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_minuman" value="<?php echo $nama_minuman; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Harga</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Deskripsi</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <input type="phone" class="form-control" name="deskripsi" value="<?php echo $deskripsi; ?>" required="required" maxLength="10" minLength="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Gambar</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar">
                            <label class="custom-file-label" for="userphoto">Choose file</label>
                        </div>
                    </div>

                </div>
            </div>
            <center>
                <div>
                    <input type="hidden" name="no_minuman" value="<?php echo $no_minuman; ?>" />

                    <button type="submit" class="btn btn-success" id="addButton">Submit</button>

                </div>
            </center>
        </form>

        <!-- add/edit form modal end -->
        <br>
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
  <div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</div>


</body>


</html>