<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
        <a href="#" class="navbar-brand fw-bold">Aplikasi peminjaman Alat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
        
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item me-3">
                    <span class="text-white">
                        <i class="bi bi-person-circle"></i>
                        <?= $_SESSION['nama_lengkap']; ?> | <?= $_SESSION['level']; ?>
                    </span>
                </li>
                <li class="nav-item">
                    <a href="../auth/logout.php" class="btn btn-danger btn-sm"><i class="bi bi-box-arrow-right"></i>logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>