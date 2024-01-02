<?php 

// Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string 
// dengan data lain (bisa string atau tipe data lainnya)
$name = "Hasbi";

echo "Nama : " . $name. PHP_EOL;
echo "Nilai : ". 100 . PHP_EOL;


// Konversi Number dan Sebaliknya
// Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
// Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung ( tipe data )
$valueString = (string)100;
var_dump($valueString); 

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"10.1";
var_dump($valueFloat);


// String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
// Sama seperti di array, index pertama dimulai dari 0
// Jika kita mengakses index melebihi karakter di string, maka akan terjadi error
$name = "Hasbi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;


// Variable Parsing
// Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
// Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
// Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.
$nama = "Muttaqin";
echo "Hello $name, Selamat Belajar PHP". PHP_EOL;


// Curly Brace
// Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
// Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
$var = "var";
echo "This is {$var}s" . PHP_EOL;


$kota = "Tasikmalaya";
$negara = "Indonesia";
echo "Saya berasal dari $kota". " ". "dan berada di negara $negara". PHP_EOL;


// Ubah Kalimat
$kalimat = "Hari ini adalah hari yang cerah";
$new = str_replace("cerah", "mendung", $kalimat);
echo "$new". PHP_EOL;

// Cari Posisi Substring
$teks = "Belajar PHP sangat menyenangkan";
$posisi = strrpos($teks, "PHP");
echo "Posisi : $posisi". PHP_EOL;

// Ubah Menjadi Huruf Besar
$kata = "pemrograman";
$upper = strtoupper($kata);
echo "$upper";


?>