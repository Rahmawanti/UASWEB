<?php
require_once 'koneksi.php';

try {
    $sql = 'SELECT * FROM `makanan` ORDER BY `nama_makanan` ASC';
    $q = $database_connection->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak bisa membuka database $database_name :" . $e->getMessage());
}
