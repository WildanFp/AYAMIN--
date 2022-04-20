<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
        <title>input data</title>
        <style>
            body {
                background-image : url('assets/img/weather.png');
                background-repeat : repeat;
            }
        </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <h5 class="card-header">Input data peternak</h5>
                        <div class="card-body">
                            <form action="op.php?op=ins-user" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan username">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" value="">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" value="">
                                </div>
                                <div class="form-group">
                                    <label for="kota">Kota:</label>
                                    <input type="text" class="form-control" name="kota" placeholder="Masukkan kota" value="">
                                </div>
                                <div class="form-group">
                                    <label for="telepon">No Telepon:</label>
                                    <input type="text" class="form-control" name="telepon" placeholder="Masukkan no telepon" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok:</label>
                                    <input type="text" class="form-control" name="stok" placeholder="Masukkan jumlah stok" value="">
                                </div>
                                <div class="form-group">
                                    <label for="text">Harga per ekor:</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Masukkan harga per ekor" value="">
                                </div>
                                <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>