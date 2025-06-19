<?php
include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $stmt = $conn->prepare("UPDATE pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID=?");
    $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);

    if ($stmt->execute()) {
        header("Location: data_pelanggan.php?success=" . urlencode("Data berhasil diperbarui."));
    } else {
        echo "Gagal mengupdate data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
