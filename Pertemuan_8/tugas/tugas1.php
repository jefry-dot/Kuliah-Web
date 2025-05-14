<!DOCTYPE html>
<html>
<head>
    <title>Proses Nilai</title>
</head>
<body>

<h2>Form Input Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = htmlspecialchars($_POST['nama']);
    $nilai = $_POST['nilai'];

   
    if (empty($nama) || $nilai === "") {
        echo "<p style='color:red;'>Nama dan nilai tidak boleh kosong!</p>";
    } else {
      
        if ($nilai >= 85) {
            $predikat = "A";
        } elseif ($nilai >= 75) {
            $predikat = "B";
        } elseif ($nilai >= 65) {
            $predikat = "C";
        } elseif ($nilai >= 50) {
            $predikat = "D";
        } else {
            $predikat = "E";
        }

   
        $status = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";

      
        echo "<h3>Hasil:</h3>";
        echo "Nama : " . $nama . "<br>";
        echo "Nilai : " . $nilai . "<br>";
        echo "Predikat : " . $predikat . "<br>";
        echo "Status : " . $status . "<br>";
    }
}
?>

</body>
</html>
