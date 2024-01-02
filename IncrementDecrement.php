<?php 

// POST Increment
$a = 10;
$a++;
var_dump($a);

// PRE Increment
$b = ++$a;
var_dump($b);

// Gunakan loop untuk mencetak nilai 
// $counter dari 1 hingga 5 dengan menggunakan operator increment.
$counter = 1;
for ($counter = 1; $counter <= 5; $counter++) {
    echo "$counter \n \n";
}

// Gunakan loop untuk mencetak nilai $
// decre dari 5 hingga 1 dengan menggunakan operator decrement.
$count = 5;
while ($count > 0) {
    echo "$count \n";
    $count--;
}

// Gunakan operator increment untuk menambah nilai $nilai dengan 3.
$nilai = 10;
$nilai += 3;
echo "$nilai". PHP_EOL;

// Gunakan loop untuk mengakses setiap elemen array dan tambahkan nilai 
// tersebut dengan 1 menggunakan operator increment.
$bilangan = [1, 2, 3, 4, 5];
foreach ($bilangan as $b) {
    echo "nilai ke-$b \n";
    $b++;
}

?>