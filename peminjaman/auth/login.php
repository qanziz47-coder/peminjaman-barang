<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class='bg-light'>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Aplikasi Peminjaman Alat</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center mb-4">Login Sistem</h5>
                    <form action="proses_login.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" autofocus required placeholder="Masukan Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center"><small>Login in PHP - 2026</small></div>
            </div>
        </div>
    </div>
    <div class="container"></div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html> 