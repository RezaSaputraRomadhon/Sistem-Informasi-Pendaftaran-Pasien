<?php

require_once("koneksi.php");

require_once("Model/authModel.php");
require_once("Model/obatModel.php");
require_once("Model/jenisObatModel.php");
require_once("Model/kategoriObatModel.php");
require_once("Model/poliklinikModel.php");
require_once("Model/pasienModel.php");
//require_once("Model/regristrasiModel.php");

require_once("Controller/authController.php");
require_once("Controller/obatController.php");
require_once("Controller/jenisObatController.php");
require_once("Controller/kategoriObatController.php");
require_once("Controller/poliklinikController.php");
require_once("Controller/pasienController.php");
//require_once("Controller/regristrasiController.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $aksi = $_GET['aksi'];
    $page = $_GET['page'];

    if ($page == 'pasien') {
        $pasien = new pasienController();
        require_once('view/menu/headerRegristrasi.php');
        if ($_SESSION['role'] == 'admin regristrasi') {
            if ($aksi == 'view') {
                $pasien->index();
            } else if ($aksi == 'tambah') {
                require_once('view/pasien/tambah.php');
            } else if ($aksi == 'update') {
                require_once('view/pasien/update.php');
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == 'poliklinik') {
        $poliklinik = new poliklinikController();
        require_once('view/menu/headerRegristrasi.php');
        if ($_SESSION['role'] == 'admin regristrasi') {
            if ($aksi == 'view') {
                $poliklinik->index();
            } else if ($aksi == 'tambah') {
                require_once('view/poliklinik/tambah.php');
            } else if ($aksi == 'update') {
                require_once('view/poliklinik/update.php');
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == 'regristrasi') {
        //$regristrasi = new regristrasiController();
        require_once('view/menu/headerRegristrasi.php');
        if ($_SESSION['role'] == 'admin regristrasi') {
            if ($aksi == 'view') {
                require_once('view/regristrasi/index.php');
            } else if ($aksi == 'tambah') {
                require_once('view/regristrasi/tambah.php');
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == 'obat') {
        $obat = new obatController();
        require_once('view/menu/headerObat.php');
        if ($_SESSION['role'] == 'admin obat') {
            if ($aksi == 'view') {
                $obat->index();
            } else if ($aksi == 'tambah') {
                $obat->tambah();
            } else if ($aksi == 'store') {
                $obat->store();
            } else if ($aksi == 'update') {
                $obat->update();
            } else if ($aksi == 'edit') {
                $obat->edit();
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }
        require_once('view/menu/footer.php');
    } else if ($page == 'transaksi') {
        require_once('view/menu/headerObat.php');
        if ($_SESSION['role'] == 'admin obat') {
            if ($aksi == 'view') {
                require_once('view/transaksi/index.php');
            } else if ($aksi == 'tambah') {
                require_once('view/transaksi/tambah.php');
            } else if ($aksi == 'update') {
                require_once('view/transaksi/update.php');
            } else if ($aksi == 'checkout') {
                require_once('view/transaksi/checkout.php');
            } else if ($aksi == 'detail') {
                require_once('view/transaksi/detail.php');
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == 'jenisobat') {
        $jenisobat = new jenisObatController();
        require_once('view/menu/headerObat.php');
        if ($_SESSION['role'] == 'admin obat') {
            if ($aksi == 'view') {
                $jenisobat->index();
            } else if ($aksi == 'tambah') {
                require_once('view/jenis_obat/tambah.php');
            } else if ($aksi == 'store') {
                $jenisobat->store();
            } else if ($aksi == 'update') {
                $jenisobat->update();
            } else if ($aksi == 'edit') {
                $jenisobat->edit();
            } else if ($aksi == 'delete') {
                $jenisobat->delete();
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == 'kategoriobat') {
        $kategoriobat = new kategoriObatController();
        require_once('view/menu/headerObat.php');
        if ($_SESSION['role'] == 'admin obat') {
            if ($aksi == 'view') {
                $kategoriobat->index();
            } else if ($aksi == 'tambah') {
                require_once('view/kategori_obat/tambah.php');
            } else if ($aksi == 'store') {
                $kategoriobat->store();
            } else if ($aksi == 'update') {
                $kategoriobat->update();
            } else if ($aksi == 'edit') {
                $kategoriobat->edit();
            } else if ($aksi == 'delete') {
                $kategoriobat->delete();
            }
        } else {
            header("location: index.php?page=auth&aksi=login");
        }

        require_once('view/menu/footer.php');
    } else if ($page == "auth") {
        $auth = new authController();
        if ($aksi == "login") {
            $auth->login();
        } else if ($aksi == 'authAdmin') {
            $auth->authAdmin();
        } else if ($aksi == 'logout') {
            $auth->logout();
        }
    }
} else {
    header('location:index.php?page=auth&aksi=login');
}