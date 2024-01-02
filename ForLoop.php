<?php

// For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
// Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi

//for(init statement; kondisi; post statement){
    // block perulangan}

 // Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
 // Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
 // Post statement akan dieksekusi setiap kali diakhir perulangan
 // Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true
 
 // For Loop Dengan Kondisi
 $counter = 1;
 for (; $counter <= 10 ;) {
    echo " Ini For Loop Ke-$counter". PHP_EOL;
    $counter++;
 }

 // For Loop Dengan Init Statement
for ($counter = 1 ; $counter <= 10 ;) {
    echo "Ini Init ke-$counter". PHP_EOL;
    echo $counter++;
}

// For Loop Dengan  Post Statement 
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini Ke Berapa-$counter". PHP_EOL;
}


for ($nilai = 0; $nilai <= 10; $nilai+=3) {
    echo $nilai;
}

for ($i = 5; $i <= 10; $i++) {
    for ($j =10; $j <= 10; $j++) {
        echo $i * $j. PHP_EOL;
    }
}


// Gunakan for loop untuk mencetak deret Fibonacci hingga suku ke-10.
$a = 0;
$b = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $a. " ";
    $temp = $a +$b;
    $a = $b;
    $b = $temp;
}


// Gunakan for loop untuk menghitung faktorial dari suatu angka.
$number = 5;
$faktorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $faktorial *= $i;
    echo "$faktorial \n";
}


?>