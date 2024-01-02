<?php 

// Array adalah tipe data yang berisikan kosong atau banyak data
// Array di PHP bisa berisikan data dengan jenis berbeda-beda
// Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasitasnya

$values = [10, 9, 8, 7.5];
var_dump($values);

$name = ["Muhamad", "Hasbi", "Muttaqin"];
var_dump($name);


// OPERASI ARRAY
var_dump($name[0]); // MENGAKSES DATA ARRAY PADA NOMOR INDEX

$name[0] = "Makima"; // MENGUBAH DATA ARRAY PADA NOMOR INDEX DENGAN VALUE
var_dump($name);

$name[] = "Ekanon"; // MENAMBAH DATA DI ARRAY PADA POSISI PALING BELAKANG
var_dump($name);

unset($name[1]); // MENGHAPUS ARRAY, INDEX OTOMATIS HILANG
var_dump($name);

var_dump(count($name)); // MENGAMBIL TOTAL DATA DI ARRAY 



// ARRAY MAP Key dan Value
$muttaqin = [
    "id" => "Muhamad",
    "name" => "Hasbi",
    "age" => 30
];
var_dump($muttaqin);
var_dump($muttaqin["age"]);



// ARRAY DI DALAM ARRAY
$muttaqin = [
    "id" => "Muhamad",
    "name" => "Hasbi",
    "age" => 30,
    "addres" => [
        "city" => "bekasi",
        "country" => "indonesia"
    ]
];

var_dump($muttaqin["addres"]["city"]);



?>