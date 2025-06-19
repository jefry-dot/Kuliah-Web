<?php
include 'koneksi_db.php';
include 'nav.php';

// Ambil data semua buku
$query = "SELECT * FROM buku";
$result = $conn->query($query);
?>
<?php include 'cek_login.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Buku - Hapus</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th><th>Judul</th><th>Penulis</th><th>Tahun</th><th>Harga</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['ID'] ?></td>
                    <td><?= htmlspecialchars($row['Judul']) ?></td>
                    <td><?= htmlspecialchars($row['Penulis']) ?></td>
                    <td><?= $row['Tahun_Terbit'] ?></td>
                    <td>Rp<?= number_format($row['Harga'], 2) ?></td>
                    <td>
                        <a href="proses_hapus.php?id=<?= $row['ID'] ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
