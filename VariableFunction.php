<?php

// PHP mendukung konsep yang bernama variable function
// Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
// Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)

function foo()
{
    echo "Foo". PHP_EOL;
}

function bar()
{
    echo "Bar". PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

// Kegunaannyah bisa bikin sebuah argumen di sebuah function yang dimana bisa memasukan function yang lain

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

function sampleFunction(string $name) : string
{
    return "Sample $name";
}

sayHello("Muttaqin", "sampleFunction");
sayHello("Muttaqin", "strtoupper");
sayHello("Muttaqin", "strtolower");


?>