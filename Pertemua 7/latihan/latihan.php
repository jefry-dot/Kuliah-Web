<?php 
define("PAJAK", 0.1);
$barang=["Keyboard" => 150000];
$jumlah_beli = 2;

$total = $barang["Keyboard"] * $jumlah_beli;
$pajak = $total * PAJAK;
$total = $total + $pajak;



echo '<div style="
    border: 2px solid #333;
    padding: 20px;
    margin: 15px 0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    background: #f8f9fa;
    max-width: 400px;
">';

echo "<h1>Perhitungan Total Pembelian (Dengan Array)</h1>";
echo '<hr style="margin: 10px 0; border-color: #ddd;">';
echo '<div style="line-height: 1.8; font-family: Arial, sans-serif;">';
echo "Nama Barang: Keyboard</br>";
echo "Harga Satuan: Rp$barang[Keyboard]</br>";
echo "Jumlah Beli: $jumlah_beli</br>";

echo "Total Harga (Sebelum Pajak):Rp$total</br>";
echo "Pajak (10%): Rp$pajak</br>";
echo '<div style="margin-top: 10px; color: #2c3e50; font-weight: bold;">';
echo "<b>Total Bayar: Rp$total</b>";
echo '</div>';
echo '</div>';
echo '</div>';
?>