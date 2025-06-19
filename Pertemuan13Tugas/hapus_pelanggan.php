<?php
include 'koneksi_db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "ID tidak ditemukan."; exit;
}

$stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: data_pelanggan.php?success=" . urlencode("Pelanggan berhasil dihapus."));
} else {
    echo "Gagal menghapus data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
