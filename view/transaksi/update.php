<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data Kategori Obat</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue float-left">Update Detail Transaksi Obat</h6>
            <a href="index.php?page=transaksi&aksi=tambah" class="m-0 font-weight-bold text-white btn btn-success float-right">Kembali</a>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Obat</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="1">
                            <select class="form-control" name="obat" id="obat">
                                <option value="Paracetamol (20 Pcs)">Paracetamol (20 Pcs)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Obat</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" value="2">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-dark-blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>