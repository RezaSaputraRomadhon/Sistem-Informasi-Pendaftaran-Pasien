<?php

class poliklinikController
{
    private $model;

    public function __construct()
    {
        $this->model = new poliklinikModel();
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once('view/poliklinik/index.php');
    }

    public function store()
    {
        $poliklinik = htmlspecialchars($_POST['nama']);
        if ($this->model->prosesStore($poliklinik)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=poliklinik&aksi=view");
        } else {
            header("location: index.php?page=poliklinik&aksi=tambah");
        }
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once('view/poliklinik/update.php');
    }

    public function edit()
    {
        $id = htmlspecialchars($_POST['id']);
        $namaPoliklinik = htmlspecialchars($_POST['nama']);
        if ($this->model->prosesEdit($id, $namaPoliklinik)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location: index.php?page=poliklinik&aksi=view");
        } else {
            header("location: index.php?page=poliklinik&aksi=update&id=$id");
        }
    }

    public function delete()
    {
        $id = htmlspecialchars($_GET['id']);
        if ($this->model->prosesDelete($id)) {
            $_SESSION['pesan'] = 'Menghapus';
            header("location: index.php?page=poliklinik&aksi=view");
        } else {
            $_SESSION['pesan'] = 'gagal';
            header("location: index.php?page=poliklinik&aksi=view");
        }
    }
}
