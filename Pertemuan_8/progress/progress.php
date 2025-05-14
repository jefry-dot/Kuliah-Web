<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>

    Hobi:<br>
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
    <input type="checkbox" name="hobi[]" value="Menulis"> Menulis<br>
    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br><br>

    Jenis Kelamin:<br>
    <input type="radio" name="jk" value="Laki-laki"> Laki-laki<br>
    <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

    Jurusan:
    <select name="jurusan">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
    </select><br><br>

    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nama'])) {
        echo "<p style='color:red;'>Nama harus diisi!</p>";
    } else {
        $nama = htmlspecialchars($_POST['nama']);
        $jk = $_POST['jk'] ?? 'Belum dipilih';
        $jurusan = $_POST['jurusan'] ?? '-';
        $hobi = $_POST['hobi'] ?? [];

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: $nama<br>";
        echo "Jenis Kelamin: $jk<br>";
        echo "Jurusan: $jurusan<br>";
        echo "Hobi:<br>";
        foreach ($hobi as $h) {
            echo "- " . htmlspecialchars($h) . "<br>";
        }
    }
}
?>

</body>
</html>
