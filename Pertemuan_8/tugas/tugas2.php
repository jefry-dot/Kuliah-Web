<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Form Diskon UKT Mahasiswa</h2>

<form method="post" action="">
    NPM: <input type="text" name="npm"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Prodi: <input type="text" name="prodi"><br><br>
    Semester: <input type="number" name="semester"><br><br>
    Biaya UKT : <input type="number" name="ukt"><br><br>
    <input type="submit" value="Hitung Diskon">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $npm = htmlspecialchars($_POST['npm']);
    $nama = htmlspecialchars($_POST['nama']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $semester = (int)$_POST['semester'];
    $ukt = (int)$_POST['ukt'];

  
    $diskon = 0;
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5;
        }
    }

  
    $potongan = ($ukt * $diskon) / 100;
    $bayar = $ukt - $potongan;

   
    function format_rupiah($angka) {
        return "Rp. " . number_format($angka, 0, ',', '.');
    }

 
    echo "<h3>Hasil Perhitungan:</h3>";
    echo "NPM : $npm<br>";
    echo "NAMA : $nama<br>";
    echo "PRODI : $prodi<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : " . format_rupiah($ukt) . "<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : " . format_rupiah($bayar) . "<br>";
}
?>

</body>
</html>
