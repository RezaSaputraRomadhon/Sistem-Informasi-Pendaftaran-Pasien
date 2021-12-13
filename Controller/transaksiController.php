<?php

class transaksiController{
private $model;

public function __construct()
{
    $this->model = new transaksiModel();
}

public function view()
{
    $data = $this->model->index();
    extract($data);
    require_once('view/transaksi/index.php');
}

}





?>