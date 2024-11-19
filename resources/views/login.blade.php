<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/app/css/style.css">
    <link rel="stylesheet" href="assets/app/css/main.css">

    <style>
        body {
            .login-container {
                max-width: 900px;
                width: 100%;
                background: rgba(255, 255, 255, 0.9);
                border-radius: 8px;
                overflow: hidden;
                display: flex;
                height: 100vh;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            }

            .login-left {
                flex: 1;
                color: #fff;
                text-align: center;
                padding: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .login-left img {
                max-width: 900px;
                width: 98%;
                height: 100vh;
                display: flex;
                margin-bottom: 20px;
            }

            .login-right h4 {
                margin-bottom: 20px;
            }

            .login-right .form-control {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .login-right .btn {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: none;
                border-radius: 4px;
                font-size: 16px;
            }

            .btn-primary {
                background: #0047AB;
                color: #fff;
            }

            .btn-secondary {
                background: #6c757d;
                color: #fff;
            }

            .btn-info {
                background: #17a2b8;
                color: #fff;
            }

            .btn:hover {
                opacity: 0.9;
            }

            .login-right a {
                color: #0047AB;
                text-decoration: none;
            }

            .login-right a:hover {
                text-decoration: underline;
            }

            .text-muted {
                font-size: 12px;
                color: #666;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Bagian Kiri -->
        <div class="login-left">
            <img src="{{ asset('images\BCA_disisi_anda.png') }}" alt="BCA Logo">
        </div>

        <!-- Bagian Kanan -->
        <div class="login-right">
            <h4>Masuk</h4>
            <form action="/postlogin" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="ingat" name="ingat">
                    <label for="ingat">Ingat saya</label>

                </div>
                <button type="submit" class="btn btn-info">Log In</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/popperjs/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
