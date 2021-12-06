<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-image: url('img/circle-blues.png');
            background-size: cover;
            background-position: center;
        }

        .container .col-md-4 {
            border-top: 4px solid #1053EF;
        }

        h2 {
            color: grey;
        }
    </style>

</head>

<body>

    <?php if (!$_SESSION['pesan']) :
        $_SESSION['pesan'] = 'start';
    ?>
    <?php else : ?>
        <?php if ($_SESSION['pesan'] == 'gagal') : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nama atau No induk Salah',
                })
            </script>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container mt-5">
        <div class="col-12 mt-5">
            <div class="row mt-5">
                <div class="col-12">

                    <center>
                        <h2 class="text-primary">LOGIN ADMIN</h2>
                    </center>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-9 col-md-4 bg-white mt-4 p-5" style="border-radius: 10px;">
                    <form action="index.php?page=auth&aksi=authAdmin" method="POST" onsubmit="return cekFormLogin()">
                        <div class="form-group">
                            <label>No Induk</label>
                            <input type="number" class="form-control" name="no_induk" id="no_induk">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </form>
                </div>
            </div>


        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>