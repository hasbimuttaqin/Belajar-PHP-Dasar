<?php 

// Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
// Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
// Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

$counter = 1;

while (true) {
   echo "Ini adalah ke-$counter". PHP_EOL;
   $counter++;

   if ($counter > 10) {
       break;
   }
}



?>