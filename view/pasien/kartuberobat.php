<?php

use Mpdf\Mpdf;

require_once("vendor/autoload.php");


$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A5',
    'orientation' => 'L'
]);
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Berobat</title>
    <style>
        p {
            font-size: 25px;
        }
        .table{
          padding: 10px;
          margin: auto;
          border: 1px solid black;
        }
        
    </style>
</head>
<body style="background-color: aquamarine;">
    <header style="text-align: center; padding: 10px; border: 1px solid black; border-radius: 30px;">


        <h1 style="line-height: 15px;">Rumah Sakit Siti Khadijah</h1>
        <h3 style="line-height: 14px;">Jl. Raya Bebekan, Bebekan, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257</h3>
    </header>
    <div style="text-align: center; background-color: black;">
        <h3 style="color: white; letter-spacing: 5px;">KARTU BEROBAT</h3>
    </div>
   
        
    <br><br>
        <table border="1px">
            <tr>
                <td>
                    <p>Nama </p>
                </td>
                <td><p> :</p></td>';
$html .=   '<td><p>' . $pasien['nama'] . '</p></td>
            </tr>
            <tr>
                <td><p>Pekerjaan</p></td>
                <td><p> :</p></td>
                <td><p>' . $pasien['pekerjaan'] . '</p></td>
            </tr>
            <tr>
                <td><p>Alamat</p></td>
                <td><p> :</p></td>
                <td><p>' . $pasien['alamat'] . '</p></td>
            </tr>
        </table>
        <br><br>
        <table class="table">
        <tr>
        <td><p>PERHATIAN</p></td>
        <td><p> :</p></td>
        <td>
        <p>- Kartu Ini Tidak Boleh Hilang</p>
        <p>- Setiap Berobat Harus Dibawa</p>
        </td>
        </tr>
        </table>
       

</body>
</html>';
$mpdf->WriteHTML($html);

$mpdf->Output('Kartu Berobat.pdf' .  $pasien['nama'], \Mpdf\Output\Destination::INLINE);
