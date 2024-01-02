<?php

// Cara membuat argument sama seperti cara membuat variabel
// Argument ditempatkan di dalam kurung () di deklarasi function
// Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma

function sayHello($name) {
    echo "Hello $name". PHP_EOL;
}

sayHello("Budi");
sayHello("Eko");



// Default Argument Value
// PHP mendukung default argument value
// Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data default nya apa
function sayHi($name = "Anonymous") 
{
    echo "Hello Bro $name". PHP_EOL;
}

sayHi();
sayHi("Hasbi");



// Kesalahan Default Argument Value
// Default argument value bisa disimpan argument manapun
// Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna
// Lebih baik kita menyimpan Parameternya di bagian akhir
function sayHallo($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName". PHP_EOL;
}

sayHallo("Kurniawan");
sayHallo("Kurniawan", "Muttaqin");



// Type Declaration
// Kadang kita ingin membuat Function dengan menggunakan tipe data tertentu
// Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
// Jika tipe data value tidak sesuai, maka akan terjadi error
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total". PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);



// Variable-length Argument List
// Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
// Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
// Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali) sebelum nama argument
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total ". implode(",", $values). "= $total". PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(20, 20, 40, 45, 55);
sumAll(...$values);

?>