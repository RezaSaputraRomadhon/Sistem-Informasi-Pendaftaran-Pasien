<?php

class authModel
{


    public function prosesAuthAdminRegristrasi($no_induk, $password)
    {
        $sql = "SELECT * FROM admin WHERE no_induk = $no_induk AND role = 'admin regristrasi' AND password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesAuthAdminObat($no_induk, $password)
    {
        $sql = "SELECT * FROM admin WHERE no_induk = $no_induk AND role = 'admin obat' AND password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}
