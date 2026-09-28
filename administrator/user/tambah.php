<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

if ($_SESSION['level'] != 'Administrator') {
    header('location: ../../auth/login.php');
    exit();
}

$title = 'Tambah User';

require_once '../../layouts/header.php';
require_once '../../layouts/navbar.php';
require_once '../../layouts/sidebar.php';
?>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3><i class="bi bi-person-plus-fill"></i>Tambah user</h3>
            <p class="text-muted mb-0">form untuk menambahkan pengguna baru</p>
        </div>
        <a href="index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>

    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            form Data User
        </div>
        <div class="card-body">
            <form action="simpan.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" maxlength="100" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" maxlength="100" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" minlength="6" required>
                    <small class="text-muted">password minimal 6 karakter</small>
                </div>
                <div class="mb-3">
                    <label class="form-label">level</label>
                    <select name="level" class="form-select" required>
                        <option value="">--pilihana level</option>
                        <option value="Administrator">Administrator</option>
                        <option value="petugas">petugas</option>
                        <option value="peminjam">peminjam</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">status</label>
                    <select name="status" class="form-select" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>