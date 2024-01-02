<?php 

// Operator Perbandingan, digunakan untuk membandingkan dua buah value yang bernilai True atau False.
// Hasil dari Operator Perbandingan adalah Boolean.
// $a == $b (SAMA DENGAN), true jika $a sama dengan $b 
// $a === $b (IDENTIK), true jika memiliki tipe data yang sama
// $a != $b (TIDAK SAMA DENGAN), true jika $a tidak sama dengan $b
// $a !== $b (TIDAK IDENTIK), true jika $a dan $b tidak sama tipe data
// $a < $b (KURANG DARI),  true jika $a kurang dari $b
// $a <= $b (KURANG DARI SAMA DENGAN)
// $a > $b, true jika $a lebih dari $b
// $a >= $b, true jika $a lebih dari sama dengan $b

var_dump("10" == 10);
var_dump(10 !== 10);

$kata1 = "Makan";
$kata2 = "Menari";
var_dump($kata1 < $kata2);

// Buat variabel $nilai dengan nilai tertentu.
// Gunakan struktur pengkondisian untuk menampilkan pesan "Lulus" jika nilai lebih dari atau sama dengan 60, dan "Tidak Lulus" jika sebaliknya.
$nilai = 60;

if ($nilai >= 60) {
    echo "Lulus \n";
} else {
    echo "Tidak Lulus \n";
}


$angka1 = 20;
$angka2 = 30;
if ($angka1 == $angka2) {
    echo "apakah nilai sama";
} else {
    echo "nilai tidak sama";
}


?>