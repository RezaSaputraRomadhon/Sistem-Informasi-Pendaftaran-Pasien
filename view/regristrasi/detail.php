<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Regristrasi</title>
</head>

<body>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue float-left">Detail Regristrasi</h6>
            <a href="index.php?page=regristrasi&aksi=view" class="m-0 font-weight-bold text-white float-right btn btn-success">Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Poliklinik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['pekerjaan'] ?></td>
                            <td><?= $data['tgl']  ?></td>
                            <td><?= $data['poliklinik'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>