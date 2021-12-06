<?php

class kategoriObatModel
{
    public function get()
    {
        $sql = "SELECT * FROM kategori";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($kategori)
    {
        $sql = "INSERT INTO kategori(kategori_obat) VALUES('$kategori')";
        return koneksi()->query($sql);
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM kategori WHERE id_kategori = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesEdit($id, $kategori)
    {
        $sql = "UPDATE kategori SET kategori_obat = '$kategori' WHERE id_kategori = $id";
        return koneksi()->query($sql);
    }

    public function prosesDelete($id)
    {
        $sql = "DELETE FROM kategori WHERE id_kategori = $id";
        return koneksi()->query($sql);
    }
}
