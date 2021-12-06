<?php
class jenisObatModel
{

    public function get()
    {
        $sql = "SELECT * FROM jenis";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($jenis)
    {
        $sql = "INSERT INTO jenis(jenis_obat) VALUES('$jenis')";
        return koneksi()->query($sql);
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM jenis WHERE id_jenis = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesEdit($id, $jenis)
    {
        $sql = "UPDATE jenis SET jenis_obat = '$jenis' WHERE id_jenis = $id";
        return koneksi()->query($sql);
    }

    public function prosesDelete($id)
    {
        $sql = "DELETE FROM jenis WHERE id_jenis = $id";
        return koneksi()->query($sql);
    }
}
