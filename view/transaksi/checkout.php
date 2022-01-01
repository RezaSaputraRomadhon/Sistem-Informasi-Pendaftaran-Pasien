<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>


    <?php if ($_SESSION['pesan'] == 'Gagal') : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda <strong><?= $_SESSION['pesan'] ?></strong> Melakukan Transaksi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php $_SESSION['pesan'] = 'start'; ?>
    <?php endif; ?>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Checkout Transaksi Obat</h6>
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
                        foreach ($obat as $row) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $row['obat'] ?></td>
                                <td><?= $row['kategori'] ?></td>
                                <td><?= $row['jenis'] ?></td>
                                <td><?= $row['jumlah_obat'] ?></td>
                                <td><?= number_format($row['jumlah_harga'], 0, ',', '.')  ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="float-left m-0 font-weight-bold text-dark-blue">Pembayaran</h5>
            <h6 class="float-right font-italic text-warning m-0 font-weight-bold text-dark-blue"><b>Total Harga : Rp. <?= number_format($pasien['total_harga'], 0, ',', '.') ?></b></h6>
        </div>
        <div class="card-body ml-2 mr-2">
            <form action="index.php?page=transaksi&aksi=transaksi" method="POST">
                <input type="hidden" id="total" class="form-control" name="total_harga" value="<?= $pasien['total_harga'] ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tunai</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp.</div>
                            </div>
                            <input type="text" id="tunai" class="form-control" name="tunai" required>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kembalian</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp.</div>
                            </div>
                            <input type="text" id="kembalian" class="form-control" name="kembalian" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark-blue">Bayar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>








    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#tunai,#kembalian').keyup(function() {
                var total = parseInt($('#total').val());
                var tunai = parseInt($('#tunai').val());
                var hitung = tunai - total;
                $('#kembalian').val(hitung);
            })
        });
    </script>
</body>

</html>