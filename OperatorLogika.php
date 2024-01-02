<?php 

// Operator Logika adalah operator untuk membandingkan nilai boolean

// $a && $b, true jika $a dan $b keduanya true
// $a || $b, true ika $a dan $b salah satu atau kedunya true
// ! $a (NOT)  true jika $a atau $b bernilai false
// $a xor $b, true jika $a dan $b salah satu true, tapi tidak keduanya

var_dump(true && true);
var_dump(true && false);
echo "\n";

var_dump(true || false);
var_dump(true || true);
echo "\n";

var_dump(true xor false);
var_dump(true xor true);
echo "\n";

var_dump(!true);
var_dump(!false);
echo "\n";

// Latihan 
// Buat variabel $usia dan $mengemudi dengan nilai true dan false.
$usia = 18;
$mengemudi = false;

$boleh_mengemudi = ($usia > 17) || $mengemudi;

if ($boleh_mengemudi) {
    echo "Izin \n";
} else {
    echo "Tidak \n";
}

// Buat variabel $status_login dengan nilai false.
// Gunakan operator logika NOT (!) untuk menentukan apakah seseorang belum login.
$status_login = true;
if (!$status_login) {
    echo "anda sudah login". PHP_EOL;
} else {
    echo "belum login". PHP_EOL;
}

// Buat variabel $nilai dengan nilai 80 dan $kehadiran dengan nilai true.
// Gunakan struktur pengkondisian untuk menentukan apakah seseorang lulus (nilai di atas 70 dan kehadiran true)
$nilai = 70;
$kehadiran = true;

if ($nilai >= 70 && $kehadiran) {
    echo "Lulus";
} else {
    echo "Tidak";
}

?>