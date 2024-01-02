<?php

// Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
// Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
// Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

$sayHello = function (string $name) 
{
    echo "Hello $name". PHP_EOL;
};

$sayHello("Muttaqin");
$sayHello("Hasbi");


// Anonymous Function Sebagai Argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName". PHP_EOL;
}

sayGoodBye("Eko", function(string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Eko", $filterFunction);



// Mengakses Variable di Luar Closure
// Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
// Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita gunakan

$firstName = "Eko";
$lastName = "Kurniawan";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName". PHP_EOL;
};
$sayHelloEko();


?>