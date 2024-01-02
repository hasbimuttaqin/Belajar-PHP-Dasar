<?php

// Recursive function adalah kemampuan function memanggil function dirinya sendiri
// Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

// Kode Factorial Loop
function factorialLoop(int $value) 
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));



// Kode Factorial Recursive
function factorialRecursive(int $value): int{
    if($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));



// Problem Dengan Recursive
// Jika recursive terlalu dalam, maka  akan ada kemungkinan  terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
// Ketika kita memanggil function, PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka akan terjadi error memory
function loop(int $value)
{
    if ($value == 0) {
        echo "Selesai". PHP_EOL;
    } else {
        echo "Loop-$value". PHP_EOL;
        loop($value - 1);
    }
}
loop(3000000);

?>