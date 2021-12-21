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
        LEFT JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien
        GROUP BY transaksiobat.id_transaksi";
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

    public function getDataObatPasien($id)
    {
        $sql = "SELECT detailtransaksi.id_transaksi AS id, detailtransaksi.jumlah_obat AS jumlah_obat, obat.nama_obat AS obat, obat.id_obat AS id_obat, obat.stock AS stock, kategori.kategori_obat AS kategori, jenis.jenis_obat AS jenis, COALESCE(detailtransaksi.jumlah_obat*obat.harga) AS jumlah_harga FROM detailtransaksi JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        JOIN kategori ON obat.id_kategori = kategori.id_kategori
        JOIN jenis ON obat.id_jenis = jenis.id_jenis 
        WHERE detailtransaksi.id_transaksi = $id";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStoreTransaksi($pasien, $no_induk, $tgl, $status)
    {
        $sql = "INSERT INTO transaksiobat(id_regristrasi,no_induk,tgl_transaksi,status_transaksi) VALUES($pasien,$no_induk,'$tgl',$status)";
        return koneksi()->query($sql);
    }

    public function getLastData()
    {
        $sql = "SELECT transaksiobat.id_transaksi AS id, pasien.nama AS nama FROM transaksiobat
        JOIN regristrasi ON transaksiobat.id_regristrasi = regristrasi.id_regristrasi
        JOIN pasien ON regristrasi.id_pasien = pasien.id_pasien
        ORDER BY id_transaksi DESC LIMIT 1";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getObat()
    {
        $sql = "SELECT * FROM  obat";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getStock1($jumlahObat, $idObat)
    {
        $sql = "SELECT SUM(stock - $jumlahObat) AS stock FROM obat WHERE id_obat = $idObat";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getStock2($jumlahObat, $idObat)
    {
        $sql = "SELECT SUM(stock + $jumlahObat) AS stock FROM obat WHERE id_obat = $idObat";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getStock3($jumlahObatBaru, $jumlahObatLama, $idObat)
    {
        $sql = "SELECT SUM(stock - ($jumlahObatBaru - $jumlahObatLama)) AS stock FROM obat WHERE id_obat = $idObat";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getStock4($jumlahObatBaru, $jumlahObatLama, $idObat)
    {
        $sql = "SELECT SUM(stock + ($jumlahObatLama - $jumlahObatBaru)) AS stock FROM obat WHERE id_obat = $idObat";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function updateStock($stock, $idObat)
    {
        $sql = "UPDATE obat SET stock = $stock WHERE id_obat = $idObat";
        return koneksi()->query($sql);
    }

    public function prosesStoreDetailTransaksi($idTransaksi, $idObat, $jumlahObat)
    {
        $sql = "INSERT INTO detailtransaksi(id_transaksi,id_obat,jumlah_obat) VALUES($idTransaksi,$idObat,$jumlahObat)";
        return koneksi()->query($sql);
    }

    public function prosesDelete($idTransaksi, $idObat, $jumlahObat)
    {
        $sql = "DELETE FROM detailtransaksi WHERE id_transaksi = $idTransaksi AND id_obat = $idObat AND jumlah_obat = $jumlahObat
        LIMIT 1";
        return koneksi()->query($sql);
    }

    public function getDetailTransaksi($idTransaksi, $idObat, $jumlah)
    {
        $sql = "SELECT detailtransaksi.id_transaksi AS id, detailtransaksi.jumlah_obat AS jumlah_obat, obat.nama_obat AS obat, obat.id_obat AS id_obat, obat.stock AS stock, kategori.kategori_obat AS kategori, jenis.jenis_obat AS jenis, COALESCE(detailtransaksi.jumlah_obat*obat.harga) AS jumlah_harga FROM detailtransaksi JOIN obat ON detailtransaksi.id_obat = obat.id_obat
        JOIN kategori ON obat.id_kategori = kategori.id_kategori
        JOIN jenis ON obat.id_jenis = jenis.id_jenis 
        WHERE detailtransaksi.id_transaksi = $idTransaksi AND obat.id_obat = $idObat AND detailtransaksi.jumlah_obat = $jumlah";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesUpdate($idTransaksi, $idObatBaru, $idObatLama, $jumlahBaru, $jumlahLama)
    {
        $sql = "UPDATE detailtransaksi SET jumlah_obat = $jumlahBaru, id_obat = $idObatBaru WHERE id_transaksi = $idTransaksi AND 
        jumlah_obat = $jumlahLama AND id_obat = $idObatLama LIMIT 1";
        return koneksi()->query($sql);
    }
}
