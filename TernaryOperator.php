<?php 

// Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
// Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
// Ternary operator menggunakan kata kunci ? dan :
$gender = "Nona";
$hi = $gender == "Pria" ? "Hi, Bro" : "Hi, Nona". PHP_EOL;
echo $hi;

$hari ="Senin";
$work = $hari == "Senin" ? "Hari Kerja". PHP_EOL: "Hari Libur". PHP_EOL;
echo $work;


$harga = 30.000;
$harga_produk = $harga == 20.000 ? "Harga Produk Murah". PHP_EOL : "Harga Produk Mahal". PHP_EOL;
echo $harga_produk;


$bilangan = 20;
$banding = $bilangan % 2 == 0 ? "positif". PHP_EOL : "negatif". PHP_EOL;
echo $banding;

?>