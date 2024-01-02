<?php

// Operator penugasan digunakan untuk memberikan nilai kepada variabel. 
// Dengan kata lain, operator ini "menugaskan" nilai dari suatu ekspresi ke dalam variabel.
// Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan)
//    Penugasan  
//    $a += $b

//    $a -= $b

//    $a *= $b

//    $a /= $b

//    $a %= $b

$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 12000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

$usia = 25;
$usia += 5;
var_dump($usia);

?>