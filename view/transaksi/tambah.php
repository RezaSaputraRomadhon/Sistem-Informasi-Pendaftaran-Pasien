<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Data Poliklinik</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

    <?php if ($_SESSION['pesan'] == 'Menambahkan' || $_SESSION['pesan'] == 'Mengupdate' || $_SESSION['pesan'] == 'Menghapus') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil <strong><?= $_SESSION['pesan'] ?></strong> Obat
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php elseif ($_SESSION['pesan'] == 'Gagal Menambahkan' || $_SESSION['pesan'] == 'Gagal Mengupdate') : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda <strong> <?= $_SESSION['pesan'] ?> </strong> Obat, Karena Jumlah Yang Diinginkan Melebihi Stock
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue float-left">Detail Transaksi Obat</h6>
            <a class="m-0 font-weight-bold btn btn-dark-blue float-right" href="index.php?page=transaksi&aksi=checkout">Next</a>
        </div>
        <div class="card-body">
            <form action="index.php?page=transaksi&aksi=storeDetailTransaksi" method="POST" onsubmit="return cekFormDetailTransaksi();">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Obat</label>
                            <select class="form-control" name="obat" id="obat">
                                <?php foreach ($obat as $row) : ?>
                                    <option value=" <?= $row['id_obat'] ?> "><?= $row['nama_obat'] . " (" . $row['stock'] . ")" ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Obat</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark-blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Keranjang <?= $LastData['nama'] ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Jumlah Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($keranjang as $row) : ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['obat']  ?></td>
                                <td><?= $row['jumlah_obat'] ?></td>
                                <td><?= $row['jumlah_harga'] ?></td>
                                <td>
                                    <a href="index.php?page=transaksi&aksi=update&id=<?= $row['id'] ?>&jumlah=<?= $row['jumlah_obat'] ?>&obat=<?= $row['id_obat'] ?>" class="btn btn-success">Update</a>
                                    <a href="index.php?page=transaksi&aksi=delete&id=<?= $row['id'] ?>&jumlah=<?= $row['jumlah_obat'] ?>&obat=<?= $row['id_obat'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>