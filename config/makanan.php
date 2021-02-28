<?php
require_once "koneksi.php";

$nama_makanan= $_POST["nama_makanan"];
$harga= $_POST["harga"];
$deskripsi= $_POST["deskripsi"];
$image = $_FILES["gambar"]["name"];
$tmp_dir = $_FILES["gambar"]["tmp_name"];
$imageSize = $_FILES["gambar"]["size"];

$upload_dir = "uploads/";
$imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
$gambar = rand(1000, 1000000) . "." . $imgExt;
move_uploaded_file($tmp_dir, $upload_dir . $gambar);

$q = $database_connection->prepare("INSERT INTO `makanan` (`no_makanan`, `nama_makanan`, `harga`,`deskripsi`,`gambar`) 
VALUES (NULL, ?, ?, ?, ?);");
$q->execute([$nama_makanan, $harga, $deskripsi, $gambar]);
header("Location: ../view.php");
?>
