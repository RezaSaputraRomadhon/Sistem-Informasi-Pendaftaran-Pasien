<?php

class dashboardModel
{

    public function getJumlahObat()
    {
        $sql = "SELECT COUNT(id_obat) AS total FROM obat";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getJumlahJenis()
    {
        $sql = "SELECT COUNT(id_jenis) AS total FROM jenis";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getJumlahKategori()
    {
        $sql = "SELECT COUNT(id_kategori) AS total FROM kategori";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getPasien()
    {
        $sql = "SELECT COUNT(id_pasien) AS total FROM pasien";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getPoliklinik()
    {
        $sql = "SELECT COUNT(id_poliklinik) AS total FROM poliklinik";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getRegristrasi()
    {
        $sql = "SELECT COUNT(id_regristrasi) AS total FROM regristrasi";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getDataRegristrasi()
    {
        $sql = "SELECT * FROM regristrasi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getTransaksi()
    {
        $sql = "SELECT pasien.nama AS nama, transaksiobat.status_transaksi AS status, transaksiobat.id_transaksi AS id, transaksiobat.tgl_transaksi AS tgl,
        COALESCE(SUM(detailtransaksi.jumlah_obat*obat.harga),0) AS total_harga
        FROM transaksiobat LEFT JOIN detailtransaksi ON transaksiobat.id_transaksi = detailtransaksi.id_transaksi
        LEFT JOIN regristrasi ON transaksiobat.id_regristrasi = regristrasi.id_regristrasi
        LEFT JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien
        GROUP BY transaksiobat.id_transaksi";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}
