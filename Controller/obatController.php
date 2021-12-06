<?php
class obatController
{
    private $model;

    public function __construct()
    {
        $this->model = new obatModel();
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once('view/obat/index.php');
    }

    public function tambah()
    {
        $jenis = $this->model->getJenis();
        $kategori = $this->model->getKategori();
        extract($jenis);
        extract($kategori);
        require_once('view/obat/tambah.php');
    }

    public function store()
    {
        $obat = htmlspecialchars($_POST['namaObat']);
        $stock = htmlspecialchars($_POST['stock']);
        $harga = htmlspecialchars($_POST['harga']);
        $id_jenis = htmlspecialchars($_POST['jenisObat']);
        $id_kategori = htmlspecialchars($_POST['kategoriObat']);
        if ($this->model->prosesStore($obat, $stock, $harga, $id_jenis, $id_kategori)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=obat&aksi=view");
        } else {
            header("location: index.php?page=obat&aksi=tambah");
        }
    }

    public function update()
    {
        $id = htmlspecialchars($_GET['id']);
        $data = $this->model->getDataById($id);
        extract($data);
        $jenis = $this->model->getJenis();
        $kategori = $this->model->getKategori();
        extract($kategori);
        extract($jenis);
        require_once('view/obat/update.php');
    }

    public function edit()
    {
        $id = htmlspecialchars($_POST['id']);
        $obat = htmlspecialchars($_POST['namaObat']);
        $stock = htmlspecialchars($_POST['stock']);
        $harga = htmlspecialchars($_POST['harga']);
        $id_jenis = htmlspecialchars($_POST['jenisObat']);
        $id_kategori = htmlspecialchars($_POST['kategoriObat']);
        if ($this->model->prosesEdit($id, $obat, $stock, $harga, $id_jenis, $id_kategori)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location: index.php?page=obat&aksi=view");
        } else {
            header("location: index.php?page=obat&aksi=update&id=$id");
        }
    }
}
