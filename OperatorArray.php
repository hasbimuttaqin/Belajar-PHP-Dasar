<?php 

// Contoh        Nama                   Keterangan
// $a + $b      Union          Menggabungkan array $a dan $b
// $a == $b     Equality       true jika $a dan $b memiliki key-value sama
// $a === $b    Identity       true jika $a dan $b memiliki key-value sama dan posisi sama
// $a != $b     Inequality     true jika $a dan $b tidak sama
// $a !== $b    Nonidentity    true jika $a dan $b tidak identik

$first = [
    "first name" => "Hasbi"
];

$last = [
    "last name" => "Muttaqin"
];

$full = $first + $last;
var_dump($full);


// Equality
$a = [
    "first_name" => "eko",
    "last_name" => "maku"
];

$b = [
    "last_name" => "maku",
    "first_name" => "eko"
];

var_dump($a == $b);

// Idenitity
$c = [
    "first_name" => "eko",
    "last_name" => "maku"
];

$d = [
    "last_name" => "maku",
    "first_name" => "eko",
   
];

var_dump($c === $d);

// Inequality
$a1 = ["makan"];
$b2 = ["minum"];

var_dump($a1 != $b2);


// Tampilkan nama bulan pada indeks ke-3
$bulan = ["januari", "februari", "maret", "april"];
var_dump($bulan[3]);


// Tambahkan hobi baru, yaitu "Bersepeda".
$hobi = ["lari", "futsal"];
$hobi [] = "bersepeda";
var_dump($hobi);


// Gunakan loop for untuk menghitung total nilai dalam array.
$nilai = [80, 80, 50, 65];
$total = 0;

for ($i = 0; $i < (count($nilai)); $i++) {
    $total += $nilai[$i];
}

echo "$total";

?>