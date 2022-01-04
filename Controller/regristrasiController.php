<?php

class regristrasiController
{
    private $model;

    public function __construct()
    {
        $this->model = new regristrasiModel();
    }

    public function view()
    {
        $data = $this->model->index();
        extract($data);
        require_once('view/regristrasi/index.php');
    }

    public function tambah()
    {
        $data1 = $this->model->getNamaRegristrasi();
        $data2 = $this->model->getNamaPoliklinik();
        extract($data1);
        extract($data2);
        require_once('view/regristrasi/tambah.php');
    }

    public function store()
    {
        $id_poliklinik = htmlspecialchars($_POST['poliklinik']);
        $no_induk = $_SESSION['admin']['no_induk'];
        $id_pasien = htmlspecialchars($_POST['pasien']);
        $tgl_regristrasi = date('Y-m-d');
        if ($this->model->prosesStore($id_poliklinik, $no_induk, $id_pasien, $tgl_regristrasi)) {
            $this->model->prosesEdit($id_pasien);
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=regristrasi&aksi=view");
        } else {
            header("location: index.php?page=regristrasi&aksi=tambah");
        }
    }

    public function detail()
    {
        $id = htmlspecialchars($_GET['id']);
        $data = $this->model->getDataById($id);
        extract($data);
        require_once('view/regristrasi/detail.php');
    }
}
// $tes = new transaksiModel();
// var_export($tes->getStock4(5, 4, 1));
// die();
