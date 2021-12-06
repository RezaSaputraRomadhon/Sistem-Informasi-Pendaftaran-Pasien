<?php

class obatModel
{

    public function get()
    {
        $sql = "SELECT obat.id_obat as id, obat.nama_obat as obat, obat.harga as harga, obat.stock as stock, jenis.jenis_obat as jenis, 
        kategori.kategori_obat as kategori FROM obat
        JOIN jenis ON obat.id_jenis = jenis.id_jenis
        JOIN kategori ON obat.id_kategori = kategori.id_kategori";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getJenis()
    {
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getKategori()
    {
        $sql = "SELECT * FROM kategori";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function jenis()
    {
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($obat, $stock, $harga, $id_jenis, $id_kategori)
    {
        $sql = "INSERT INTO obat(nama_obat,stock,harga,id_jenis,id_kategori) VALUES ('$obat','$stock','$harga',$id_jenis,$id_kategori)";
        return koneksi()->query($sql);
    }

    public function getDataById($id)
    {
        $sql = "SELECT obat.id_obat as id, obat.nama_obat as obat, obat.harga as harga, obat.stock as stock, jenis.id_jenis as id_jenis, jenis.jenis_obat as jenis, 
        kategori.id_kategori as id_kategori, kategori.kategori_obat as kategori FROM obat
        JOIN jenis ON obat.id_jenis = jenis.id_jenis
        JOIN kategori ON obat.id_kategori = kategori.id_kategori
        WHERE id_obat = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesEdit($id, $obat, $stock, $harga, $id_jenis, $id_kategori)
    {
        $sql = "UPDATE obat SET nama_obat = '$obat', stock = $stock, harga = $harga, id_jenis = $id_jenis, id_kategori = $id_kategori WHERE id_obat = $id ";
        return koneksi()->query($sql);
    }
}
