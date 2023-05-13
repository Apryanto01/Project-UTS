<?php

class Pesanan
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function lihatPesanan()
    {
        $query = $this->database->prepare("SELECT *,pakaian.nama,pakaian.ukuran, pesanan.nama AS kostumer FROM pesanan INNER JOIN pakaian ON pesanan.pakaian_id = pakaian.id");
        $query->execute();

        return $query->fetchAll();
    }

    public function tambahPesanan($pesanan)
    {
        $query = $this->database->prepare('INSERT INTO pesanan (nama,tanggal,pakaian_id,quantity) VALUES (:nama,:tanggal,:pakaian_id, :quantity)');

        $query->bindParam(':nama', $pesanan['nama']);
        $query->bindParam(':tanggal', $pesanan['tanggal']);
        $query->bindParam(':pakaian_id', $pesanan['pakaian_id']);
        $query->bindParam(':quantity', $pesanan['qty']);

        return $query->execute();
    }
}
