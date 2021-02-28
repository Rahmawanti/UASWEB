<?php
require_once "koneksi.php";
$no_minuman = $_POST["no_minuman"];
// echo $id_register;

$q = $database_connection->prepare("DELETE FROM `minuman` WHERE `minuman`.`no_minuman` = ?");
$q->execute([$no_minuman]);
header("Location: ../view1.php");
