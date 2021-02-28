<?php
require_once "koneksi.php";
$no_makanan = $_POST["no_makanan"];
// echo $id_register;

$q = $database_connection->prepare("DELETE FROM `makanan` WHERE `makanan`.`no_makanan` = ?");
$q->execute([$no_makanan]);
header("Location: ../view.php");
