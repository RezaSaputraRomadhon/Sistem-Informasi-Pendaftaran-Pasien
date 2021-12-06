<?php

class authModel
{


    public function prosesAuthAdminRegristrasi($nama,$no_induk)
    {
        $sql = "SELECT * FROM admin WHERE nama = '$nama' AND no_induk = $no_induk AND role = 'admin regristrasi'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesAuthAdminObat($nama, $no_induk)
    {
        $sql = "SELECT * FROM admin WHERE nama = '$nama' AND no_induk = $no_induk AND role = 'admin obat'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}
