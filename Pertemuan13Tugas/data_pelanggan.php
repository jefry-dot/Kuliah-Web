<?php include 'koneksi_db.php'; ?>

<?php
$query = "SELECT * FROM pelanggan";
$result = $conn->query($query);
?>
<?php include 'cek_login.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'nav.php'; ?>

<div class="container mt-4">
    <h2>Daftar Pelanggan</h2>
    <a href="form_tambah_pengguna.php" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
               <?php while ($row = $result->fetch_assoc()): ?>
               <tr>
                   <td><?php echo $row['ID'] ?></td>
                   <td><?php echo htmlspecialchars($row['Nama'] ?? '') ?></td>
                   <td><?php echo htmlspecialchars($row['Alamat'] ?? '') ?></td>
                   <td><?php echo $row['Email'] ?></td>
                   <td><?php echo($row['Telepon']) ?></td>
                   <td>
                       <a href="form_edit_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       <a href="hapus_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                   </td>
               </tr>
               <?php endwhile; ?>
           </tbody>
    </table>
</div>
</body>
</html>
