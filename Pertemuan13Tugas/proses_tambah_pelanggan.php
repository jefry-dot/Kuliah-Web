<?php
include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $stmt = $conn->prepare("INSERT INTO pelanggan (Nama, Alamat, Email, Telepon) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);

    if ($stmt->execute()) {
        header("Location: data_pelanggan.php?success=" . urlencode("Pelanggan berhasil ditambahkan."));
    } else {
        header("Location: form_tambah_pelanggan.php?error=" . urlencode("Gagal menambah pelanggan: " . $stmt->error));
    }

    $stmt->close();
    $conn->close();
}
?>
