<?php
include 'vendor/autoload.php';

use Nim4n\SimpleDate;

class dashboardController
{

    private $model;

    public function __construct()
    {
        $this->model = new dashboardModel();
    }

    public function view()
    {
        $obat = $this->model->getJumlahObat();
        $kategori = $this->model->getJumlahKategori();
        $jenis = $this->model->getJumlahJenis();
        $earning = $this->model->getTransaksi();
        $bulanSekarang = date('m');
        $tahunSekarang = date('Y');
        $totalUang = 0;
        $januari = 0; //1
        $februari = 0; //2
        $maret = 0; //3
        $april = 0; //4
        $mei = 0; //5
        $juni = 0; //6
        $juli = 0; //7
        $agustus = 0; //8
        $september = 0; //9
        $oktober = 0; //10
        $november = 0; //11
        $desember = 0; //12
        foreach ($earning as $data) {
            if ($tahunSekarang == date('Y', strtotime($data['tgl']))) {
                if ($bulanSekarang == date('m', strtotime($data['tgl']))) {
                    $totalUang = $totalUang + $data['total_harga'];
                }
            }
        }
        foreach ($earning as $data) {
            if ($tahunSekarang == date('Y', strtotime($data['tgl']))) {
                if ('01' == date('m', strtotime($data['tgl']))) {
                    $januari = $januari + $data['total_harga'];
                } else if ('02' == date('m', strtotime($data['tgl']))) {
                    $februari = $februari + $data['total_harga'];
                } else if ('03' == date('m', strtotime($data['tgl']))) {
                    $maret = $maret + $data['total_harga'];
                } else if ('04' == date('m', strtotime($data['tgl']))) {
                    $april = $april + $data['total_harga'];
                } else if ('05' == date('m', strtotime($data['tgl']))) {
                    $mei = $mei + $data['total_harga'];
                } else if ('06' == date('m', strtotime($data['tgl']))) {
                    $juni = $juni + $data['total_harga'];
                } else if ('07' == date('m', strtotime($data['tgl']))) {
                    $juli = $juli + $data['total_harga'];
                } else if ('08' == date('m', strtotime($data['tgl']))) {
                    $agustus = $agustus + $data['total_harga'];
                } else if ('09' == date('m', strtotime($data['tgl']))) {
                    $september = $september + $data['total_harga'];
                } else if ('10' == date('m', strtotime($data['tgl']))) {
                    $oktober = $oktober + $data['total_harga'];
                } else if ('11' == date('m', strtotime($data['tgl']))) {
                    $november = $november + $data['total_harga'];
                } else if ('12' == date('m', strtotime($data['tgl']))) {
                    $desember = $desember + $data['total_harga'];
                }
            }
        }


        $data = array(
            'januari' => $januari,
            'februari' => $februari,
            'maret' => $maret,
            'april' => $april,
            'mei' => $mei,
            'juni' => $juni,
            'juli' => $juli,
            'agustus' => $agustus,
            'september' => $september,
            'oktober' => $oktober,
            'november' => $november,
            'desember' => $desember
        );
        $bulan = SimpleDate::createFormat("MMMM", date('F'));
        extract($obat, EXTR_SKIP);
        extract($kategori, EXTR_SKIP);
        extract($jenis, EXTR_SKIP);
        extract((array)$totalUang, EXTR_SKIP);
        extract((array)$bulan, EXTR_SKIP);
        extract($data, EXTR_SKIP);
        require_once('view/dashboard/adminobat.php');
    }

    public function view2()
    {
        $pasien = $this->model->getPasien();
        $poliklinik = $this->model->getPoliklinik();
        $regis = $this->model->getDataRegristrasi();
        $bulanSekarang = date('m');
        $tahunSekarang = date('Y');
        $total = 0;
        $regristrasi = 0;
        $januari = 0; //1
        $februari = 0; //2
        $maret = 0; //3
        $april = 0; //4
        $mei = 0; //5
        $juni = 0; //6
        $juli = 0; //7
        $agustus = 0; //8
        $september = 0; //9
        $oktober = 0; //10
        $november = 0; //11
        $desember = 0; //12
        foreach ($regis as $data) {
            if ($tahunSekarang == date('Y', strtotime($data['tgl_regristrasi']))) {
                if ($bulanSekarang == date('m', strtotime($data['tgl_regristrasi']))) {
                    $total++;
                }
            }
        }
        foreach ($regis as $data) {
            if ($tahunSekarang == date('Y', strtotime($data['tgl_regristrasi']))) {
                $regristrasi++;
            }
        }

        foreach ($regis as $data) {
            if ($tahunSekarang == date('Y', strtotime($data['tgl_regristrasi']))) {
                if ('01' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $januari++;
                } else if ('02' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $februari++;
                } else if ('03' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $maret++;
                } else if ('04' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $april++;
                } else if ('05' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $mei++;
                } else if ('06' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $juni++;
                } else if ('07' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $juli++;
                } else if ('08' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $agustus++;
                } else if ('09' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $september++;
                } else if ('10' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $oktober++;
                } else if ('11' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $november++;
                } else if ('12' == date('m', strtotime($data['tgl_regristrasi']))) {
                    $desember++;
                }
            }
        }

        $data = array(
            'januari' => $januari,
            'februari' => $februari,
            'maret' => $maret,
            'april' => $april,
            'mei' => $mei,
            'juni' => $juni,
            'juli' => $juli,
            'agustus' => $agustus,
            'september' => $september,
            'oktober' => $oktober,
            'november' => $november,
            'desember' => $desember
        );
        $bulan = SimpleDate::createFormat("MMMM", date('F'));
        extract($pasien, EXTR_SKIP);
        extract($data, EXTR_SKIP);
        extract((array)$total, EXTR_SKIP);
        extract((array)$bulan, EXTR_SKIP);
        extract($poliklinik, EXTR_SKIP);
        extract((array)$regristrasi, EXTR_SKIP);
        require_once('view/dashboard/adminregristrasi.php');
    }
}
