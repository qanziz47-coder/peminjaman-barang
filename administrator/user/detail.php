<?php
require_once '../../config/session.php';
require_once '../../config/database.php';

if ($_SESSION['level'] != 'Administrator') {
    header('Location: ../../auth/login.php');
    exit();
}

$title = 'Detail User';

require_once '../../layouts/header.php';
require_once '../../layouts/navbar.php';
require_once '../../layouts/sidebar.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$id_user = (int) $_GET['id'];

$stmt = $conn->prepare("SELECT id_user, nama_lengkap, username, level, status, created_at, updated_at from users where id_user = ? ");
$stmt->bind_param('i', $id_user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    header('Location: index.php');
    exit();
}

$user = $result->fetch_assoc();

?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3><i class="bi bi-person-vcard-fill"></i>Detail User</h3>
            <p class="text-muted mb-0">Informasi lengkap data pengguna</p>
        </div>
        <a href="index.php" class="btn btn-secondary"><i class="bi bi-arrow-left">Kembali</i></a>
    </div>
      <div class="card shadow-sm">
         <div class="card-header bg-primary text-white">
            Informasi User
         </div>
         <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="250">Id user</th>
                    <td><?= htmlspecialchars($user['id_user'])?></td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?= htmlspecialchars($user['nama_lengkap'])?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><?= htmlspecialchars($user['username'])?></td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td><?= htmlspecialchars($user['level'])?></td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td>
                        <?php
                        switch($user['level']){
                            case 'Administrator' :
                                echo '<span class="badge bg-danger">Administrator</span>';
                                break;
                            case 'Petugas' :
                                echo '<span class="badge bg-primary">Petugas</span>';
                                break;
                            default:
                                echo '<span class="badge bg-success">Peminjaman</span>';    
                        }
                        ?>
                    </td>
                    <tr>
                        <th>Status</th>
                        <td>
                            <?php if($user['status'] == "Aktif") { ?>
                             <span class="badge bg-success">Aktif</span> 
                             <?php
                            } else{ ?> 
                            <span class="badge bg-secondary">Tidak Aktif</span>
                            <?php    
                        } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Dibuat pada</th>
                        <td><?= htmlspecialchars($user['created_at']) ?></td>
                    </tr>
                    <tr>
                        <th>Terakhir diubah</th>
                        <td><?= htmlspecialchars($user['updated_at']) ?></td>
                    </tr>
                 </tr>
            </table>
         </div>
         <div class="card-footer">
            <a href="edit.php?id=<?= $user['id_user'] ?>"class="btn btn-warning">Edit</a>
            <a href="edit.php" class="btn btn-secondary">Kembali</a>
         </div>
      </div>
</div>