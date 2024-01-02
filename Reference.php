<?php

// Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
// Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi file nya, maka reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang sama
// Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
// Untuk membuat reference terhadap variable, kita bisa menggunakan karakter & 


// 1. Assign By Reference 
// PHP Reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke value yang sama
$name = "Hasbi";

$otherName = &$name; // reference keywoard
$otherName = "Yanto";

echo $name. PHP_EOL;



// 2. Pass By Reference 
// Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
function increment(int &$value) {
    $value++;
}
$counter = 1;
increment($counter);

echo $counter. PHP_EOL;



// 3. Returning References
// PHP juga bisa mengembalikan reference pada function
// Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;

?>