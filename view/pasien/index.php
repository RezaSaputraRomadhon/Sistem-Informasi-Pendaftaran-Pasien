<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Data Pasien</title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

    <?php if ($_SESSION['pesan'] == 'Menambahkan' || $_SESSION['pesan'] == 'Mengupdate' || $_SESSION['pesan'] == 'Menghapus') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda Berhasil <strong><?= $_SESSION['pesan'] ?></strong> Pasien
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php elseif ($_SESSION['pesan'] == 'berhasil') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Selamat Anda <strong>Berhasil</strong> Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php elseif ($_SESSION['pesan'] == 'gagal') : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Gagal <strong>Menghapus</strong> Pasien, Karena Pasien Tersebut Sedang Dipakai
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['no_telp'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['pekerjaan'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td>
                                    <a href="index.php?page=pasien&aksi=update&id=<?= $row['id_pasien'] ?>" class="btn btn-success">Update</a>
                                    <a href="index.php?page=pasien&aksi=delete&id=<?= $row['id_pasien'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>