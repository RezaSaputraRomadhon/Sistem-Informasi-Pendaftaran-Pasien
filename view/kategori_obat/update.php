<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Data Kategori Obat</title>

    <!-- Custom fonts for this template-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Update Data Kategori Obat</h6>
        </div>
        <div class="card-body">
            <form action="index.php?page=kategoriobat&aksi=edit" method="POST" onsubmit="return cekFormKategori()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id_kategori'] ?>">
                            <input type="text" class="form-control" id="kategoriObat" name="kategoriObat" value="<?= $data['kategori_obat'] ?>">
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