<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
        <title>Login</title>
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
                            <form class="user" action="prosesregister.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="role">Role</label>
                                        <select id="role" name="role" class="form-control">
                                            <option value="1">Admin</option>
                                            <option value="2">Peternak</option>
                                            <option value="3">Pengepul</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="cars">Id Role User</label>
                                        <input type="text" class="form-control" name="id_role_user" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password-check" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="btn btn-primary btn-user btn-block">
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