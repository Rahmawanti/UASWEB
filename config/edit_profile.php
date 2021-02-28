<?php
require_once "koneksi.php";
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];

$q = $database_connection->prepare("UPDATE `user` SET `username` = ?, 
`password` = SHA1(?) WHERE `user`.`id` = ?");
$q->execute([$username, $password, $id]);
header("Location: ../edit_profile.php");

