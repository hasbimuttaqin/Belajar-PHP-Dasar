<?php

// Di PHP, kita bisa membuat variable dimanapun yang kita mau
// Scope variable adalah dibagian mana saja sebuah variable bisa diakses
// PHP memiliki tiga jenis variable scope :
// 1. global
// 2. local
// 3. static


// 1. Global Scope
// Variable yang dibuat diluar function memiliki scope global
// Variable di scope global hanya bisa diakses dari luar function
// Artinya di dalam function, kita tidak bisa mengakses variable di global scope

$name = "eko"; // global scope
function sayName() {
    global $name; // global keywoard
    echo "Hello My Name is $name". PHP_EOL;

    echo $GLOBALS ["name"]. PHP_EOL; // $GLOBALS adalah tempat untuk menyimpan semua variable global scope
}
sayName();



// 2. Local Scope
// Variable yang dibuat di dalam function memiliki scope local
// Variable di scope local hanya bisa diakses dari dalam function itu sendiri
// Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
function sayHi() {
    $coy = "eko satria"; // LOCAL SCOPE
    echo "Hi $coy". PHP_EOL;
}
sayHi();



// 3. Static Scope
// Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
// Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
// PHP memiliki scope yang bernama static
// Static scope hanya bisa di set ke local variable
// Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
// Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
function increment() {
    static $counter = 1; // static scope
    echo "COunter : $counter". PHP_EOL;
    $counter++;
}

increment();
increment();
increment();

?>