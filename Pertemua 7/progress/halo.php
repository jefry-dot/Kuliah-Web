<?php
$nama = "Jefry";
$umur = 20;
define("PAJAK", 0.1);

echo "Halo $nama, umurmu $umur tahun </br>";


echo "Halo, selamat datang di dunia PHP!</br>";
class Mahasiswa {
   public $nama;
   public function sapa() {
       return "Halo, saya $this->nama";
   }
}
$mhs = new Mahasiswa();
$mhs->nama = "Mahasiswa";
echo $mhs->sapa();  
?>
