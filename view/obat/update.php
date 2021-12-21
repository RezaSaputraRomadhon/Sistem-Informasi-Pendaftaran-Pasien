<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data Obat</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Update Data Obat</h6>
        </div>
        <div class="card-body">
            <form action="index.php?page=obat&aksi=edit" method="POST" onsubmit="return cekFormObat()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Obat</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id'] ?>">
                            <input type="text" class="form-control" id="namaObat" name="namaObat" value="<?= $data['obat'] ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" value="<?= $data['stock'] ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $data['harga'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Jenis Obat : </label>
                        <select name="jenisObat" class="form-control bg-white" readonly>
                            <?php foreach ($jenis as $row) : ?>
                                <?php if ($data['id_jenis'] == $row['id_jenis']) : ?>
                                    <option value="<?= $row["id_jenis"] ?>" selected><?= $row["jenis_obat"] ?></option>
                                <?php else : ?>
                                    <option value="<?= $row["id_jenis"] ?>"><?= $row["jenis_obat"] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Kategori Obat : </label>
                        <select name="kategoriObat" class="form-control bg-white" readonly>
                            <?php foreach ($kategori as $row) : ?>
                                <?php if ($data['id_kategori'] == $row['id_kategori']) : ?>
                                    <option value="<?= $row['id_kategori'] ?>" selected><?= $row['kategori_obat'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $row['id_kategori'] ?>"><?= $row['kategori_obat'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark-blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>