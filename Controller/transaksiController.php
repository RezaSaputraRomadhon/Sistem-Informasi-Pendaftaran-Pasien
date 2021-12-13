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
        $data = $this->model->getDataObat($id);
        extract($pasien);
        extract($data);
        require_once('view/transaksi/detail.php');
    }
}
