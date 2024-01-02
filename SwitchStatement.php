<?php 

// Switch statement digunakan untuk memeriksa nilai suatu variabel dan menjalankan kode tertentu berdasarkan nilai variabel tersebut
// Switch adalah statement percabangan yang sama dengan if, namun  lebih sederhana cara pembuatannya
// Kondisi di switch statement hanya untuk perbandingan ==

$nilai = "D";
switch ($nilai) {
    case "A":
        echo "Anda Lulus". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Lumayan". PHP_EOL;
        break;
    case "D":
        echo "Anda Gagal". PHP_EOL;
        break;
    default:
    echo "Anda Salah Jurusan";            
}

$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Hari Kerja". PHP_EOL;
        break;
    case "Selasa":
        echo "Hari Produktif". PHP_EOL;
        break;
    case "Sabtu":
        echo "Wekend". PHP_EOL;
        break;
    default:
    echo "Tidak ada jadwal". PHP_EOL;
}



$angka = -10;
switch ($angka) {
    case $angka > 0:
        echo "Bilangan Positif". PHP_EOL;
        break;
    case $angka < 0;
        echo "BIlangan Negatif";
        break;
    default:
    echo "Nol";    
}

?>