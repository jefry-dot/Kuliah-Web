<?php
include 'koneksi_db.php'; // Pastikan file koneksi ini benar

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST['nama']);
    $katasandi = password_hash($_POST['katasandi'], PASSWORD_DEFAULT); // hash password

    // Cek apakah nama sudah ada
    $stmt_check = $conn->prepare("SELECT id FROM pengguna WHERE nama = ?");
    $stmt_check->bind_param("s", $nama);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        // Username sudah digunakan
        header("Location: form_tambah_pengguna.php?error=" . urlencode("Nama pengguna sudah digunakan."));
        exit;
    }

    $stmt_check->close();

    // Insert ke database
    $stmt = $conn->prepare("INSERT INTO pengguna (nama, katasandi) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $katasandi);

    if ($stmt->execute()) {
        header("Location: index.php"); // ganti dengan halaman tujuan setelah berhasil
    } else {
        header("Location: form_tambah_pengguna.php?error=" . urlencode("Gagal menambah pengguna."));
    }

    $stmt->close();
    $conn->close();
}
    