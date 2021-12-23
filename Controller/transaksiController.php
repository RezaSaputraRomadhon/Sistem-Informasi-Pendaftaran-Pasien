<?php

class transaksiController
{
    private $model;

    public function __construct()
    {
        $this->model = new transaksiModel();
    }

    public function view()
    {
        $data = $this->model->index();
        $data1 = $this->model->getNamaRegristrasi();
        extract($data);
        extract($data1);
        require_once('view/transaksi/index.php');
    }

    public function detail()
    {
        $id = htmlspecialchars($_GET['id']);
        $pasien = $this->model->getDataPasien($id);
        $data = $this->model->getDataObatPasien($id);
        extract($pasien);
        extract($data);
        require_once('view/transaksi/detail.php');
    }

    public function storeTransaksi()
    {
        $pasien = htmlspecialchars($_POST['pasien']);
        $no_induk = $_SESSION['admin']['no_induk'];
        $tgl = date('Y-m-d');
        $status = 0;
        if ($this->model->prosesStoreTransaksi($pasien, $no_induk, $tgl, $status)) {
            header("location: index.php?page=transaksi&aksi=tambah");
        } else {
            header("location: index.php?page=transaksi&aksi=view");
        }
    }

    public function tambah()
    {
        $LastData = $this->model->getLastData();
        $keranjang = $this->model->getDataObatPasien($LastData['id']);
        $obat = $this->model->getObat();
        extract($LastData);
        extract($keranjang);
        extract($obat);
        require_once('view/transaksi/tambah.php');
    }

    public function storeDetailTransaksi()
    {
        $lastData = $this->model->getLastData();
        $idObat = htmlspecialchars($_POST['obat']);
        $jumlah = htmlspecialchars($_POST['jumlah']);
        $stock = $this->model->getStock1($jumlah, $idObat);
        if ($stock['stock'] < 0) {
            $stock['stock'] = null;
        }
        if ($this->model->updateStock($stock['stock'], $idObat) && $this->model->prosesStoreDetailTransaksi($lastData['id'], $idObat, $jumlah)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=transaksi&aksi=tambah");
        } else {
            $_SESSION['pesan'] = 'Gagal Menambahkan';
            header("location: index.php?page=transaksi&aksi=tambah");
        }
    }

    public function delete()
    {
        $idTransaksi = htmlspecialchars($_GET['id']);
        $idObat = htmlspecialchars($_GET['obat']);
        $jumlah = htmlspecialchars($_GET['jumlah']);
        $stock = $this->model->getStock2($jumlah, $idObat);
        if ($this->model->prosesDelete($idTransaksi, $idObat, $jumlah) && $this->model->updateStock($stock['stock'], $idObat)) {
            $_SESSION['pesan'] = 'Menghapus';
            header("location: index.php?page=transaksi&aksi=tambah");
        } else {
            $_SESSION['pesan'] = 'Gagal Menghapus';
            header("location: index.php?page=transaksi&aksi=tambah");
        }
    }

    public function update()
    {
        $idTransaksi = htmlspecialchars($_GET['id']);
        $idObat = htmlspecialchars($_GET['obat']);
        $jumlah = htmlspecialchars($_GET['jumlah']);
        $obat = $this->model->getObat();
        $data = $this->model->getDetailTransaksi($idTransaksi, $idObat, $jumlah);
        require_once('view/transaksi/update.php');
        extract($data, EXTR_SKIP);
        extract($obat, EXTR_SKIP);
    }

    public function edit()
    {
        $idTransaksi = htmlspecialchars($_POST['id']);
        $idObatLama = htmlspecialchars($_POST['obatLama']);
        $idObatBaru = htmlspecialchars($_POST['obat']);
        $jumlahLama = htmlspecialchars($_POST['jumlahLama']);
        $jumlahBaru = htmlspecialchars($_POST['jumlah']);
        $stok = [];
        if ($idObatBaru == $idObatLama) {
            if ($jumlahBaru > $jumlahLama) {
                $stok = $this->model->getStock3($jumlahBaru, $jumlahLama, $idObatBaru);
                if ($stok['stock'] < 0) {
                    $stok['stock'] = null;
                }
            } else {
                $stok = $this->model->getStock4($jumlahBaru, $jumlahLama, $idObatLama);
            }
        } else {

            $stok = $this->model->getStock1($jumlahBaru, $idObatBaru);
            if ($stok['stock'] < 0) {
                $stok['stock'] = null;
            } else {
                $stok1 = $this->model->getStock2($jumlahLama, $idObatLama);
                $this->model->updateStock($stok1['stock'], $idObatLama);
            }
        }

        if ($this->model->updateStock($stok['stock'], $idObatBaru) && $this->model->prosesUpdate($idTransaksi, $idObatBaru, $idObatLama, $jumlahBaru, $jumlahLama)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location: index.php?page=transaksi&aksi=tambah");
        } else {
            $_SESSION['pesan'] = 'Gagal Mengupdate';
            header("location: index.php?page=transaksi&aksi=tambah");
        }
    }
}
// $tes = new transaksiModel();
// var_export($tes->getStock4(5, 4, 1));
// die();
