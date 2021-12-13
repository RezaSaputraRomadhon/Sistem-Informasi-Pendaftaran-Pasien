<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Obat</title>
</head>

<body>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue float-left">Detail Transaksi Obat</h6>
            <a href="index.php?page=transaksi&aksi=view" class="m-0 font-weight-bold text-white float-right btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col">Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['kategori'] ?></td>
                                <td><?= $row['jenis'] ?></td>
                                <td><?= $row['jumlah_obat'] ?></td>
                                <td><?= $row['jumlah_harga'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th>
                            </th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total Harga</td>
                            <td><?= $pasien['total_harga'] ?></td>
                        </tr>
                        <h6 class="m-0 font-weight-bold text-dark float-left">Nama : <?= $pasien['nama'] ?></h6><br>
                        <h6 class="m-0 font-weight-bold text-dark float-left">Alamat : <?= $pasien['alamat'] ?></h6><br>
                        <h6 class="m-0 font-weight-bold text-dark float-left">Tanggal : <?= $pasien['tgl'] ?></h6>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>