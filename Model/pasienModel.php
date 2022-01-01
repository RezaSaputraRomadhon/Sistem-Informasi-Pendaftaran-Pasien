<?php
class pasienModel
{

    public function get()
    {
        $sql = "SELECT * FROM pasien";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($nama, $email, $noHp, $pekerjaan, $alamat)
    {
        $sql = "INSERT INTO pasien(nama,email,no_telp,pekerjaan,alamat) VALUES('$nama','$email','$noHp','$pekerjaan','$alamat')";
        return koneksi()->query($sql);
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM pasien WHERE id_pasien = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesEdit($id, $nama, $email, $noHp, $pekerjaan, $alamat)
    {
        $sql = "UPDATE pasien SET nama = '$nama', email = '$email', no_telp = '$noHp', pekerjaan = '$pekerjaan', alamat = '$alamat' WHERE id_pasien = $id";
        return koneksi()->query($sql);
    }

    public function prosesDelete($id)
    {
        $sql = "DELETE FROM pasien WHERE id_pasien = $id";
        return koneksi()->query($sql);
    }
}
