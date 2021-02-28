<?php
require_once "koneksi.php";
$id = $_POST["id"];
// echo $id_register;

$q = $database_connection->prepare("DELETE FROM `user` WHERE `user`.`id` = ?");
$q->execute([$id]);
header("Location: ../view3.php");
