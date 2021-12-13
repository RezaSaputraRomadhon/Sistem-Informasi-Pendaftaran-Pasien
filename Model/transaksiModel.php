<?php

class transaksiModel
{

    public function index()
    {
        $sql = "SELECT pasien.nama AS nama, transaksiobat.status_transaksi AS status, transaksiobat.id_transaksi AS id, transaksiobat.tgl_transaksi AS tgl,
        COALESCE(SUM(detailtransaksi.jumlah_obat*obat.harga),0) AS total_harga
        FROM transaksiobat LEFT JOIN detailtransaksi ON transaksiobat.id_transaksi = detailtransaksi.id_transaksi
        LEFT JOIN regristrasi ON transaksiobat.id_regristrasi = regristrasi.id_regristrasi
        LEFT JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getNamaRegristrasi()
    {
        $sql = "SELECT pasien.nama AS nama, regristrasi.id_regristrasi AS id FROM regristrasi JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien ORDER BY id_regristrasi DESC";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getDataPasien($id)
    {
        $sql = "SELECT pasien.nama AS nama, pasien.alamat AS alamat, transaksiobat.tgl_transaksi AS tgl, COALESCE(SUM(detailtransaksi.jumlah_obat*obat.harga),0) AS total_harga FROM detailtransaksi JOIN transaksiobat ON detailtransaksi.id_transaksi = transaksiobat.id_transaksi JOIN regristrasi ON transaksiobat.id_regristrasi = regristrasi.id_regristrasi JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien JOIN obat ON detailtransaksi.id_obat = obat.id_obat WHERE detailtransaksi.id_transaksi =$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getDataObat($id)
    {
        $sql = "SELECT detailtransaksi.jumlah_obat AS jumlah_obat, obat.nama_obat AS nama, kategori.kategori_obat AS kategori, jenis.jenis_obat AS jenis, COALESCE(detailtransaksi.jumlah_obat*obat.harga) AS jumlah_harga FROM detailtransaksi JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        JOIN kategori ON obat.id_kategori = kategori.id_kategori
        JOIN jenis ON obat.id_jenis = jenis.id_jenis 
        JOIN transaksiobat ON detailtransaksi.id_transaksi = transaksiobat.id_transaksi WHERE detailtransaksi.id_transaksi = $id";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }
}
