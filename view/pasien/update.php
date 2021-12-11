<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data Pasien</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark-blue">Update Data Pasien</h6>
                </div>
                <div class="card-body">
                    <form action="index.php?page=pasien&aksi=edit" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id_pasien'] ?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="number" class="form-control" id="noHp" name="noHp" value="<?= $data['no_telp'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat'] ?>">
                        </div>
                        <button type="submit" class="btn btn-dark-blue">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>