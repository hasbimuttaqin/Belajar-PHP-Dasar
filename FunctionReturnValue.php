<?php

// Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
// Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
// Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(20, 40);
var_dump($result);


function getFinalValue(int $value)
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }

    echo "Ups". PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(65);
var_dump($score);

echo "\n";
echo "\n";


// Return Type Declarations
// Hal ini mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
// Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya

function sumS(int $first, int $second) : int // Pengembalian Data
{
    $total = $first + $second;
    return $total;
}

$result = sumS(100, 100);
var_dump($result);

$result = sumS(25, 40);
var_dump($result);


function getFinalValues(int $value) : string // Pengembalian Data
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }

    echo "Ups". PHP_EOL;
}

$score = getFinalValues(80);
var_dump($score);

$score = getFinalValues(75);
var_dump($score);





?>