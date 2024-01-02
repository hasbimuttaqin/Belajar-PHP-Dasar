<?php

// Pada REQUIRE, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
// Pada INCLUDE, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

require "Lib/MyFunction.php";
echo sayHello("Eko", "Kurniawan"). PHP_EOL;

include "Lib/MyFunction2.php";
echo sayHi("Muhamad", "Hasbi");

?>