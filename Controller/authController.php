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
        $password = $_POST['password'];
        $data = $this->model->prosesAuthAdminRegristrasi($no_induk, $password);
        $data2 = $this->model->prosesAuthAdminObat($no_induk, $password);
        if ($data) {
            $_SESSION['role'] = 'admin regristrasi';
            $_SESSION['admin'] = $data;
            $_SESSION['pesan'] = 'berhasil';
            header("location: index.php?page=dashboard regristrasi&aksi=view");
        } else if ($data2) {
            $_SESSION['role'] = 'admin obat';
            $_SESSION['admin'] = $data2;
            $_SESSION['pesan'] = 'berhasil';
            header("location: index.php?page=dashboard obat&aksi=view");
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
