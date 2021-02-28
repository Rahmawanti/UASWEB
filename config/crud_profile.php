<?php
require_once 'koneksi.php';

try {
    $sql = 'SELECT * FROM `user` ORDER BY `username` ASC';
    $q = $database_connection->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak bisa membuka database $database_name :" . $e->getMessage());
}
