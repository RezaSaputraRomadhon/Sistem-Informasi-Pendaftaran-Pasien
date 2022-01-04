<?php

class pasienController
{
    private $model;

    public function __construct()
    {
        $this->model = new pasienModel();
    }

    public function index()
    {
        $data = $this->model->get();
        extract($data);
        require_once('view/pasien/index.php');
    }

    public function store()
    {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $noHp = htmlspecialchars($_POST['noHp']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
        $alamat = htmlspecialchars($_POST['alamat']);
        if ($this->model->prosesStore($nama, $email, $noHp, $pekerjaan, $alamat)) {
            $_SESSION['pesan'] = 'Menambahkan';
            header("location: index.php?page=pasien&aksi=view");
        } else {
            header("location: index.php?page=pasien&aksi=tambah");
        }
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = $this->model->getDataById($id);
        extract($data);
        require_once('view/pasien/update.php');
    }

    public function edit()
    {
        $id = htmlspecialchars($_POST['id']);
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $noHp = htmlspecialchars($_POST['noHp']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $namaPoliklinik = htmlspecialchars($_POST['namaPoliklinik']);
        if ($this->model->prosesEdit($id, $nama, $email, $noHp, $pekerjaan, $alamat)) {
            $_SESSION['pesan'] = 'Mengupdate';
            header("location: index.php?page=pasien&aksi=view");
        } else {
            header("location: index.php?page=pasien&aksi=update&id=$id");
        }
    }

    public function delete()
    {
        $id = htmlspecialchars($_GET['id']);
        if ($this->model->prosesDelete($id)) {
            $_SESSION['pesan'] = 'Menghapus';
            header("location: index.php?page=pasien&aksi=view");
        } else {
            $_SESSION['pesan'] = 'gagal';
            header("location: index.php?page=pasien&aksi=view");
        }
    }

    public function print()
    {
        $id = htmlspecialchars_decode($_GET['id']);
        $pasien = $this->model->getDataById($id);
        extract($pasien);
        require_once('view/pasien/kartuberobat.php');
    }
}
