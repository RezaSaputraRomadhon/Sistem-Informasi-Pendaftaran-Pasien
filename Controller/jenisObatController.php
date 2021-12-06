<?php

class jenisObatController
{
    private $model;

    public function __construct()
    {
        $this->model = new jenisObatModel();
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once('view/jenis_obat/index.php');
    }

    public function store()
    {
        $jenis = htmlspecialchars($_POST['jenisObat']);
        if ($this->model->prosesStore($jenis)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=jenisobat&aksi=view");
        } else {
            header("location: index.php?page=jenisobat&aksi=tambah");
        }
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once('view/jenis_obat/update.php');
    }

    public function edit()
    {
        $id = htmlspecialchars($_POST['id']);
        $jenis = htmlspecialchars($_POST['jenisObat']);
        if ($this->model->prosesEdit($id, $jenis)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location: index.php?page=jenisobat&aksi=view");
        } else {
            header("location: index.php?page=jenisobat&aksi=update&id=$id");
        }
    }

    public function delete()
    {
        $id = htmlspecialchars($_GET['id']);
        $this->model->prosesDelete($id);
        $_SESSION['pesan'] = 'Menghapus';
        header("location: index.php?page=jenisobat&aksi=view");
    }
}
