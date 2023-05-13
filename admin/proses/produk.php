<?php
require_once('../app.php');


$produk = new Pakaian($dbh);

if (isset($_POST['tambah_pakaian'])) {
    $produk->tambahPakaian($_POST);
    header('Location: ../produk.php');
} elseif (isset($_POST['ubah_pakaian'])) {
    $produk->ubahPakaian($_POST);
    header('Location: ../produk.php');
} elseif (isset($_POST['hapus_pakaian'])) {
    $produk->hapusPakaian($_POST['id']);
    header('Location: ../produk.php');
}
