<?php
class poliklinikModel
{

    public function get()
    {
        $sql = "SELECT * FROM poliklinik";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($namaPoliklinik)
    {
        $sql = "INSERT INTO poliklinik(nama) VALUES('$namaPoliklinik')";
        return koneksi()->query($sql);
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM poliklinik WHERE id_poliklinik = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesEdit($id, $namaPoliklinik)
    {
        $sql = "UPDATE poliklinik SET nama = '$namaPoliklinik' WHERE id_poliklinik = $id";
        return koneksi()->query($sql);
    }

    public function prosesDelete($id)
    {
        $sql = "DELETE FROM poliklinik WHERE id_poliklinik = $id";
        return koneksi()->query($sql);
    }
}
