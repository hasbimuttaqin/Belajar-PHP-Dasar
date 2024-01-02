<?php

// Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
// Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan
// Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
// Namun untungnya di php ada null coalescing operator menggunakan tanda ??

$data = [];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action. PHP_EOL;


// Syntak Null Coalescing Opeartor Lebih Simple
$data = ["action" => "create"];
$action = $data["action"] ?? "nothing";
echo $action. PHP_EOL;


$nama = [];
$orang = $nama["nama"] ?? "Tamu";
echo $orang. PHP_EOL;

$email = [];
$surat = $email["ada"] ?? "nothing";
echo $surat. PHP_EOL;

?>