<?php 

// Nilai NULL merepresentasikan sebuah variable tanpa nilai.
// Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)

$name = "Hasbi";
$name = null;

$age = null;

echo "Nama :";
echo $name;
echo $age;


// Untuk Mengecek Data Bernilai Null atau Tidak bisa menggunakan is_null($variabel)

echo "Is Name Null : ";
var_dump(is_null($name));



// Untuk Menghapus Variable Bisa Menggunakan Function unset($variable)

$contoh = "Makan";
unset($contoh);

// Untuk Mengecek Sebuah Variable Memiliki Nilai atau Tidak Kita Bisa Menggunakan Function isset($variable)
var_dump(isset($contoh));



?>