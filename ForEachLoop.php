<?php

// perulangan For Each, yang bisa digunakan
// untuk mengakses seluruh data di Array secara otomatis

// Tanpa For Each
$names = ["Eko", "Kurniawan", "Khanedy"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]". PHP_EOL;
}

echo "\n";
echo "\n";

// Menggunaakan For Each
foreach ($names as $name) {
    echo "Data $name". PHP_EOL;
}

echo "\n";
echo "\n";

// For Each Maping Array 
$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khanedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value". PHP_EOL;
}

?>