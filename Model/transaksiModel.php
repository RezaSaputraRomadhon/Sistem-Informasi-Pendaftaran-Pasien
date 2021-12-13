<?php

class transaksiModel{

    public function index()
    {
        $sql = "SELECT pasien.nama AS nama, transaksiobat.status_transaksi AS status, transaksiobat.tgl_transaksi AS tgl,
        COALESCE(SUM(detailtransaksi.jumlah_obat*obat.harga)) AS total_harga
        FROM transaksiobat LEFT JOIN detailtransaksi ON transaksiobat.id_transaksi = detailtransaksi.id_transaksi
        LEFT JOIN regristrasi ON transaksiobat.id_regristrasi = regristrasi.id_regristrasi
        LEFT JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien";
        $query = koneksi()->query($sql);
        $hasil = [];
        while($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }



}
