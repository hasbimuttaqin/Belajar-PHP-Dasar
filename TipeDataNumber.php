<?php 

echo "Decimal :";
var_dump(1234);

echo "Octal :";
var_dump(01234);

echo "Hexadecimal :";
var_dump(0x1A);

echo "Binary :";
var_dump(0b111111);

echo "Floating Point :";
var_dump(1.234);

echo "Floating Point dengan E Notation Plus: (1.7 x 1000)";
var_dump(1.7e3);

echo "Floating Point dengan E Notation Minus : (1.7 x 0.001)";
var_dump(1.7e-3);

// Latihan
$angka1 = 10;
$angka2 =5;

$jumlah = $angka1 + $angka2;
echo "Jumlah : $jumlah";
echo "\n";
echo "\n";

// Bulatkan Nilai
// CEIL berfungsi Untuk Membulatkan Bilangan Desimal Naik.
// FLOOR berfungsi Untuk Membulatkan Bilangan Desimal Kebawah.
$desimal = 8.75;
$bulat_naik = ceil($desimal);
$bulat_turun = floor($desimal);

echo "Bulat Naik : $bulat_naik \n";
echo "Bulat Turun : $bulat_turun \n \n";

// Pembandingan Angka
// Tentukan Nilai Pertama Lebih Besar, Lebih Kecil, atau Sama Dengan.
$nilai1 = 15;
$nilai2 = 20;

if ($nilai1 > $nilai2) {
    echo "$nilai1 Lebih Kecil $nilai2 \n";
} elseif ($nilai2 > $nilai1) {
    echo "$nilai2 Lebih Besar $nilai1 \n";
} else {
    echo "$nilai1 Sama Dengan $nilai2";
}


// Operasi Increment dan Decrement
$counter = 5;

// Increment
$counter++;
echo "Nilai Tambah $counter \n";

// Decrement
$counter--;
echo "Nilai Kurang $counter \n \n";


// Konversi Tipe Data
$angka_int = 10;
$angka_float = 3.5;

$hasil = $angka_int + $angka_float;
echo "$hasil". PHP_EOL;



?>