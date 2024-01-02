<?php 

// Constant adalah Variable yang Bersifat Immutable yang artinya tidak bisa dirubah
// Function Constant adalah define


define("AUTHOR", "Hasbi Muttaqin");
define("APP_VERSION", 1.00);

echo "Author :";
echo AUTHOR;
echo "\n";

echo "App Version :";
echo APP_VERSION. PHP_EOL;


define("PHI", 3.14);
$jari_jari = 7;

$luas = PHI * pow($jari_jari, 2); // pow digunakan untuk mencari pangkat dari sebuah bilangan
echo "$luas". PHP_EOL;




?>