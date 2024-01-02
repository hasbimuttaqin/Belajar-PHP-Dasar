<?php

// Contoh Array Function

//      FUNCTION                          KETERANGAN
//    array_keys()              Mengambil semua keys milik array
//    array_values()            Mengambil semua values milik array
//    array_map()               Mengubah semua data array dengan callback
//    sort()                    Mengurutkan array
//    rsort()                   Mengurutkan array terbalik
//    shuffle()                 Mengubah posisi data di array secara random

// Contoh Array Map
$data = [1,2,3,4,5,6,7,8,9,10];

$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

$person = [
    "first_name" => "Eko",
    "last_name" => "Kurniawan"
];
var_dump(array_keys($person));
var_dump(array_values($person));

?>