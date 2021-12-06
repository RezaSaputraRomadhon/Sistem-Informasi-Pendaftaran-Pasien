<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Data Obat</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>


    <?php if ($_SESSION['pesan'] == 'berhasil') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Selamat Anda <strong>Berhasil</strong> Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php elseif ($_SESSION['pesan'] == 'Menambahkan' || $_SESSION['pesan'] == 'Mengupdate') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil <strong><?= $_SESSION['pesan'] ?></strong> Obat
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Data Obat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Obat</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['obat'] ?></td>
                                <td><?= $row['stock'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['kategori'] ?></td>
                                <td><?= $row['jenis'] ?></td>
                                <td>
                                    <a href="index.php?page=obat&aksi=update&id=<?= $row['id'] ?>" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>