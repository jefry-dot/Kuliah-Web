<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 10</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $nilai = 75;
    if ($nilai >= 80) {
        echo "Nilai A";
    } elseif ($nilai >= 70) {
        echo "Nilai B";
    } else {
        echo "Nilai C";
    }
    ?>
</body>
</html>
