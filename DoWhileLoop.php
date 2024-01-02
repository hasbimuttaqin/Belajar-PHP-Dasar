<?php

// Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
// Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true

$counter = 1;
do {
    echo "ini adalah ke-$counter". PHP_EOL;
    $counter++;
} while ($counter <= 10);


// Cocok Untuk Melakukan Tanya Jawab

?>