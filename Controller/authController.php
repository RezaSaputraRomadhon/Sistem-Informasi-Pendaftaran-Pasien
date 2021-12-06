<?php
class authController
{
    private $model;

    public function __construct()
    {
        $this->model = new authModel();
    }

    public function authAdmin()
    {
        $no_induk = $_POST['no_induk'];
        $nama = $_POST['nama'];
        $data = $this->model->prosesAuthAdminRegristrasi($nama, $no_induk);
        $data2 = $this->model->prosesAuthAdminObat($nama, $no_induk);
        if ($data) {
            $_SESSION['role'] = 'admin regristrasi';
            $_SESSION['admin'] = $data;
            $_SESSION['pesan'] = 'berhasil';
            header("location: index.php?page=pasien&aksi=view");
        } else if ($data2) {
            $_SESSION['role'] = 'admin obat';
            $_SESSION['admin'] = $data2;
            $_SESSION['pesan'] = 'berhasil';
            header("location: index.php?page=obat&aksi=view");
        } else {
            $_SESSION['pesan'] = 'gagal';
            header("location: index.php?page=auth&aksi=login");
        }
    }

    public function logout()
    {
        session_destroy();
        require_once('view/auth/index.php');
    }

    public function login()
    {
        require_once('view/auth/index.php');
    }
}
