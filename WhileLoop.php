<?php

// While loop adalah versi perulangan yang lebih sederhana dibanding for loop
// Di while loop, hanya terdapat kondisi perulangan
// Loop ini terus berjalan selama kondisi yang ditentukan tetap benar.

$counter = 1;

while ($counter <= 10) {
    echo "Ini adalah while ke=$counter". PHP_EOL;
    $counter++;
}

$angka = 1;
while ($angka <= 10) {
    echo "$angka". PHP_EOL ;
    $angka += 2;
}


// KATA "BELAJAR" DIbalik
$kata = "belajar";
$panjang = strlen($kata); // Panjang Kata
$i = $panjang - 1; // Inisialisasi variabel untuk indeks

while ($i >= 0) {
    echo $kata[$i]. "\n";
    $i--;
}


// Gunakan while loop untuk mencetak deret Fibonacci hingga suku ke-8.
$a = 0;
$b = 1;

while ($i <= 8) {
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
    $i++;

    echo "$temp \n";
}

$abc = 10;
while ($abc >= 1) {
    echo "ini-$abc". PHP_EOL;
    $abc--;
}


?>