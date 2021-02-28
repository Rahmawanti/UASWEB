<?php
require_once "koneksi.php";
$no_makanan = $_POST["no_makanan"];
$nama_makanan = $_POST["nama_makanan"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];

$q = $database_connection->prepare("UPDATE `makanan` SET `nama_makanan` = ?,
`harga` = ?, `deskripsi` = ? WHERE `makanan`.`no_makanan` = ?");
$q->execute([$nama_makanan, $harga, $deskripsi, $no_makanan]);
header("Location: ../view.php");
