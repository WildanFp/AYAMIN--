<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
        <title>Register</title>
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
		<div class="col-lg-5 d-none d-lg-block"><img src="assets/img/logo.png" alt="" width="60%" style="margin-bottom:25px;" class="mx-auto d-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="op.php?op=ins-user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="grup">Role</label>
                                        <select name="grup" id="grup" class="form-control">
                                            <option value="Peternak">Peternak</option>
                                            <option value="Penjual">Penjual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password-check" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
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