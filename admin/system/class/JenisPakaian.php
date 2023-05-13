<?php

class JenisPakaian
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function lihatJenis()
    {
        $query = $this->database->prepare("SELECT * FROM tipe_pakaian");
        $query->execute();

        return $query->fetchAll();
    }

    public function detailJenis($id)
    {
        $query = $this->database->prepare("SELECT * FROM tipe_pakaian WHERE id =:id");
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function tambahJenis($jenis)
    {
        $query = $this->database->prepare("INSERT INTO tipe_pakaian (tipe) VALUES(:tipe)");
        $query->bindParam(':tipe', $jenis['tipe']);

        return $query->execute();
    }

    public function hapusJenis($id)
    {
        $query = $this->database->prepare("DELETE FROM tipe_pakaian WHERE id = :id");
        $query->bindParam(':id', $id);

        return $query->execute();
    }

    public function ubahJenis($jenis)
    {
        $query = $this->database->prepare('UPDATE tipe_pakaian SET tipe=:tipe WHERE id = :id');
        $query->bindParam(':id', $jenis['id']);
        $query->bindParam(':tipe', $jenis['tipe']);

        return $query->execute();
    }
}
