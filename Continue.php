<?php

// Melakukan continue digunakan untuk menghentikan perulangan saat ini, 
// lalu melanjutkan ke perulangan selanjutnya

for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }
    echo "Counter + $counter". PHP_EOL;
}


// Hitung Total Bilangan Genap
$total = 0;
for ($i = 2; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    $total += $i;

    echo $total. PHP_EOL;
}

?>