<?php

// Contoh String Function

//         FUNCTION                              KETERANGAN
//    join() / implode()         Menggabungkan array menjadi string
//    explode()                  Memecah string menjadi array
//    strtolower()               Mengubah string menjadi lowercase
//    strtoupper()               Mengubah string menjadi uppercase
//    substr()                   Mengambil sebagian string
//    trim()                     Menghapus whitespace di depan dan belakang string

var_dump(join(",", [10, 11, 12, 13, 14, 15]));
echo "\n";

var_dump(explode(" ", "Eko Kurniawan Khanedy"));
echo "\n";

var_dump(strtolower("EKO KURNIAWAN"));
echo "\n";

var_dump(strtoupper("eko kurniawan"));
echo "\n";

var_dump(substr("Eko Kurniawan", 0, 3));
echo "\n";

var_dump(trim("     eko      "));



?>