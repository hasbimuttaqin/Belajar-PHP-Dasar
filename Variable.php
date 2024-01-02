<?php 

// Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
// Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
// Penamaan variable tidak boleh mengandung spasi

$name = "Hasbi";
$age = "19";

echo "Nama :";
echo $name;
echo "\n";

echo "Umur :";
echo $age;
echo "\n";
echo "\n";

// LATIHAN

// VARIABLE STRING
$kota = "Bekasi";
echo "Kota : $kota" ;
echo "\n";

// VARIABLE NUMERIK
$panjang = 10;
$lebar = 5;

$luas = $panjang * $lebar;
echo "Luas Persegi Panjang $luas". PHP_EOL;

echo "\n";

$harga_barang = 20000;
$jumlah_barang = 5;

$total = $harga_barang * $jumlah_barang;

echo "Total Harga : $total";
echo "\n";

// VARIABLE GABUNGAN
$nama = "Muttaqin";
$umur = 19;

echo "Nama Saya $nama, Saya Berumur $umur tahun";
echo "\n";

// VARIABLE ARRAY
$buah = ["Mangga", "Pisang", "Semangka", "Jambu"];
echo "Nama Buah : $buah[2]";
echo "\n";
echo "\n";

// LATIHAN LANJUTAN
$angka1 = 20;
$angka2 = 5;

$penjumlahan = $angka1 + $angka2;
$perkalian = $angka1 * $angka2;
$pengurangan = $angka1 - $angka2;
$pembagian = $angka1 / $angka2;

echo "Jumlah : $penjumlahan \n Kurang : $pengurangan \n Kali : $perkalian \n Bagi : $pembagian";

echo "\n";
echo "\n";

// Soal Concatenation dan Escape Character
$nama_depan = "Muhamad";
$nama_belakang = "Hasbi";

$nama_lengkap = $nama_depan. " " .$nama_belakang;
echo "Nama Syah : $nama_lengkap";

echo "\n";
echo "\n";

// KONVERSI TIPE DATA
$angka_string = "100";
$angka_int = 5;

$hasil = $angka_string + $angka_int;
echo "Hasil : $hasil";

echo "\n";
echo "\n";

// Menggunakan Array Tampilkan Buah Satu Satu Gunakan Loop
$buah = ["pisang", "anggur", "mangga"];
foreach ($buah as $b) {
    echo "Ini Buah $b". PHP_EOL;
}

echo "\n";
echo "\n";


?>