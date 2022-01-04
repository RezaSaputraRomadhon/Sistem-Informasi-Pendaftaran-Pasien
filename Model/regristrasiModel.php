<?php
include 'vendor/autoload.php';

use Nim4n\SimpleDate;

class regristrasiModel
{

    public function index()
    {
        $sql = "SELECT pasien.nama AS nama, regristrasi.id_regristrasi AS id, regristrasi.tgl_regristrasi AS tgl, poliklinik.nama AS namaPoliklinik
        FROM regristrasi LEFT JOIN poliklinik ON regristrasi.id_poliklinik = poliklinik.id_poliklinik
        LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien
        GROUP BY regristrasi.id_regristrasi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $data['tgl'] = SimpleDate::dayDate($data['tgl']);
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getDataById($id)
    {
        $sql = "SELECT pasien.nama AS nama, pasien.alamat AS alamat, pasien.pekerjaan AS pekerjaan, regristrasi.id_regristrasi AS id, regristrasi.tgl_regristrasi AS tgl, poliklinik.nama AS poliklinik FROM regristrasi LEFT JOIN poliklinik ON regristrasi.id_poliklinik = poliklinik.id_poliklinik LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien WHERE regristrasi.id_regristrasi = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getNamaRegristrasi()
    {
        $sql = "SELECT * FROM pasien";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getNamaPoliklinik()
    {
        $sql = "SELECT * FROM poliklinik";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStore($id_poliklinik, $no_induk, $id_pasien, $tgl_regristrasi)
    {
        $sql = "INSERT INTO regristrasi(id_poliklinik,no_induk,id_pasien,tgl_regristrasi, status) VALUES ($id_poliklinik, $no_induk, $id_pasien, '$tgl_regristrasi', 1)";
        return koneksi()->query($sql);
    }

    public function prosesEdit($id)
    {
        $sql = "UPDATE pasien SET status = 1 WHERE id_pasien = $id";
        return koneksi()->query($sql);
    }
}
