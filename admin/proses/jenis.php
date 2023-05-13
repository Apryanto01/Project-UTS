<?php
require_once('../app.php');


$jenis = new JenisPakaian($dbh);

if (isset($_POST['tambah_jenis'])) {
    $jenis->tambahJenis($_POST);
    header('Location: ../jenis_produk.php');
} elseif (isset($_POST['ubah_jenis'])) {
    $jenis->ubahJenis($_POST);
    header('Location: ../jenis_produk.php');
} elseif (isset($_POST['hapus_jenis'])) {
    $jenis->hapusJenis($_POST['id']);
    header('Location: ../jenis_produk.php');
}
