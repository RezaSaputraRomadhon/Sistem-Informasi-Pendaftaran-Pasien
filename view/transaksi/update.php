<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Detail Transaksi Obat</title>

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
            <form action="index.php?page=transaksi&aksi=edit" method="POST" onsubmit="return cekFormDetailTransaksi()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Obat</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id'] ?>">
                            <input type="hidden" class="form-control" id="obatLama" name="obatLama" value="<?= $data['id_obat'] ?>">
                            <input type="hidden" class="form-control" id="jumlahLama" name="jumlahLama" value="<?= $data['jumlah_obat'] ?>">
                            <select class="form-control" name="obat" id="obat">
                                <?php foreach ($obat as $row) : ?>
                                    <?php if ($data['id_obat'] == $row['id_obat']) : ?>
                                        <option value="<?= $row['id_obat'] ?>" selected><?= $row['nama_obat'] . " (" . $row['stock'] . ")" ?></option>
                                    <?php else : ?>
                                        <option value="<?= $row['id_obat'] ?>"><?= $row['nama_obat'] . " (" . $row['stock'] . ")" ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Obat</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?= $data['jumlah_obat'] ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark-blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>