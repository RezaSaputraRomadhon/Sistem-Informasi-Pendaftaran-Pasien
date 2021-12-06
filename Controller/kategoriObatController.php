<?php
class kategoriObatController
{
    private $model;
    public function __construct()
    {
        $this->model = new kategoriObatModel();
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once('view/kategori_obat/index.php');
    }

    public function store()
    {
        $kategori = htmlspecialchars($_POST['kategoriObat']);
        if ($this->model->prosesStore($kategori)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location:index.php?page=kategoriobat&aksi=view");
        } else {
            header("location:index.php?page=kategoriobat&aksi=tambah");
        }
    }

    public function update()
    {
        $id = htmlspecialchars($_GET['id']);
        $data = $this->model->getDataById($id);
        extract($data);
        require_once('view/kategori_obat/update.php');
    }

    public function edit()
    {
        $id = htmlspecialchars($_POST['id']);
        $kategori = htmlspecialchars($_POST['kategoriObat']);
        if ($this->model->prosesEdit($id, $kategori)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location:index.php?page=kategoriobat&aksi=view");
        } else {
            header("location:index.php?page=kategoriobat&aksi=update&id=$id");
        }
    }

    public function delete()
    {
        $id = htmlspecialchars($_GET['id']);
        $_SESSION['pesan'] = 'Menghapus';
        $this->model->prosesDelete($id);
        header("location: index.php?page=kategoriobat&aksi=view");
    }
}
