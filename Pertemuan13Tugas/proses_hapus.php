<?php
include 'koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus relasi dari detail_pesanan terlebih dahulu
    $stmt1 = $conn->prepare("DELETE FROM detail_pesanan WHERE Buku_ID = ?");
    $stmt1->bind_param("i", $id);
    $stmt1->execute();
    $stmt1->close();

    // Kemudian hapus dari tabel buku
    $stmt2 = $conn->prepare("DELETE FROM buku WHERE ID = ?");
    $stmt2->bind_param("i", $id);

    if ($stmt2->execute()) {
        echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . addslashes($stmt2->error) . "'); window.location='index.php';</script>";
    }

    $stmt2->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='index.php';</script>";
}

$conn->close();
?>
