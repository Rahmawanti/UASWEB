<?php
require_once "koneksi.php";
$no_minuman = $_POST["no_minuman"];
$nama_minuman = $_POST["nama_minuman"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];

$q = $database_connection->prepare("UPDATE `minuman` SET `nama_minuman` = ?,
`harga` = ?, `deskripsi` = ? WHERE `minuman`.`no_minuman` = ?");
$q->execute([$nama_minuman, $harga, $deskripsi, $no_minuman]);
header("Location: ../view1.php");
