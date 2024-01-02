<?php

// Function adalah block kode program yang akan berjalan saat kita panggil
// Sebelumnya kita sudah menggunakan function isset(), count() dan lain-lain.
// Untuk membuat function di PHP, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung () dan diakhiri dengan block 
// Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
// Di bahasa pemrograman lain, function juga disebut dengan method

function sayHello() {
    echo "Hello Function". PHP_EOL;
}

sayHello();


// LOKASI FUNCTION
// Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
// Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan

$buat = true;

if($buat) {
    function hi() {
        echo "Hi Function". PHP_EOL;
    }
}

hi();



?>