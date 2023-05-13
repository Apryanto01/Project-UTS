<?php

class Pakaian
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function tambahPakaian($produk)
    {
        $query = $this->database->prepare("INSERT INTO pakaian (nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES(:nama,:ukuran,:warna,:stok,:harga,:tipe)");

        $query->bindParam(':nama', $produk['nama']);
        $query->bindParam(':warna', $produk['warna']);
        $query->bindParam(':stok', $produk['stok']);
        $query->bindParam(':harga', $produk['harga']);
        $query->bindParam(':ukuran', $produk['ukuran']);
        $query->bindParam(':tipe', $produk['tipe']);

        return $query->execute();
    }

    public function ubahPakaian($produk)
    {
        $query = $this->database->prepare('UPDATE pakaian SET nama=:nama, ukuran=:ukuran, warna=:warna, stok=:stok, harga=:harga, tipe_pakaian_id=:tipe WHERE id=:id');

        $query->bindParam(':id', $produk['id']);
        $query->bindParam(':nama', $produk['nama']);
        $query->bindParam(':warna', $produk['warna']);
        $query->bindParam(':stok', $produk['stok']);
        $query->bindParam(':harga', $produk['harga']);
        $query->bindParam(':ukuran', $produk['ukuran']);
        $query->bindParam(':tipe', $produk['tipe']);

        return $query->execute();
    }

    public function hapusPakaian($id)
    {
        $query = $this->database->prepare('DELETE FROM pakaian WHERE id = :id');
        $query->bindParam(':id', $id);

        return $query->execute();
    }

    public function lihatPakaian()
    {
        $query = $this->database->prepare("SELECT *, pakaian.id AS pakaian_id, tipe_pakaian.tipe AS tipe FROM pakaian INNER JOIN tipe_pakaian ON pakaian.tipe_pakaian_id = tipe_pakaian.id");

        $query->execute();

        return $query->fetchAll();
    }

    public function detailPakaian($id)
    {
        $query = $this->database->prepare("SELECT *, tipe_pakaian.tipe AS tipe FROM pakaian INNER JOIN tipe_pakaian ON pakaian.tipe_pakaian_id = tipe_pakaian.id WHERE pakaian.id = :id");
        $query->bindParam(':id', $id);

        $query->execute();

        return $query->fetch();
    }
}
