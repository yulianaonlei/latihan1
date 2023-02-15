<?php
// untuk buat konstanta
define ("nama","Yuliana");
#buat variabel
$mata_kuliah = "Pemrograman Web";
$sks = 4;
$sarapan = true;
$ipk = 4;
$makanan = ["Tiwul","Gudeg","Pempek"];
echo "Assalamu'alaikum";
// menghubungkan string & konstanta
echo "<br />";
echo "Assalamu'alaikum, namaku ".nama;
// menghubungkan string & variable
echo "<br />";
echo "Sekarang belajar {$mata_kuliah} ".$sks." sks";
/* menghubungkan string & variable array
penghitungan urutan dimulai dari 0
*/
echo "<br />";
echo "Saya pernah makan ".$makanan[2];
/* bisa ditulis disini
hasil variabelnya
*/
?>