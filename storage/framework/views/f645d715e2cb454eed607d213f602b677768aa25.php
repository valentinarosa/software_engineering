<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/app/css/style.css">
      <link rel="stylesheet" href="assets/app/css/main.css">

    <title>Halaman Login</title>
</head>
<body>

    <div class="container py-5">
        <h3 class="pb-md-5 text-center text-blue-dark">
            Portal Keuangan Mahasiswa <br>
            <small>[NAMA INSTITUSI]</small>
        </h3>
        <div class="row my-5 d-flex justify-content-around">
            <div class="col-lg-5 my-auto d-none d-lg-block">
                <img src="images/mobile_pay.svg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-6">

                <div class="card border-0 bg-blue-dark shadow">
                    <div class="card-body">

                        <form>
                            <h3 class="text-light">Login</h3>

                            <p>
                                <small class="text-light">Gunakan NIM dan Password SIAKAD</small>
                            </p>
                            <hr>

                            <div class="form-group">
                                <label class="text-light" for="username">NIM</label>
                                <input type="username" class="form-control" id="username" aria-describedby="usernameHelp" autofocus>
                            </div>
                            <div class="form-group">
                                <label class="text-light" for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-light" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-block btn-yellow">Masuk</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/popperjs/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\VendorManagement\resources\views/Login2.blade.php ENDPATH**/ ?>