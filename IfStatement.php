<?php 

// Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
// Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
// Hampir di semua bahasa pemrograman mendukung if expression
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Gagal". PHP_EOL;
}


// Else If Statement
// Kadang dalam If, kita butuh membuat beberapa kondisi
// Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
// Else if di PHP bisa lebih dari satu
// Kode Else if di php bisa menggunakan “else if” atau “elseif” (digabung)
if ($nilai >= 80 && $absen >= 80) {
    echo "Niali Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C". PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D". PHP_EOL;
} else {
    echo "Anda Tidak Lulus";
}


// Gunakan if statement untuk menentukan apakah angka tersebut genap atau ganjil.
$angka = 3;
if ($angka % 2 == 0) {
    echo "bilangan genap". PHP_EOL;
} else {
    echo "bilangan ganjil". PHP_EOL;
}


// Gunakan if statement untuk mengecek apakah login berhasil atau gagal.
$username = "hasbi";
$password = "123";

$input_username = "hasbi";
$input_password = "23";

if ($input_username == $username && $input_password == $password) {
    echo "login berhasil". PHP_EOL;
} else {
    echo "login gagal". PHP_EOL;
}

// Penentuan Harga Diskon
$total_pembelian = 20;
if ($total_pembelian >= 80) {
    echo "diskon 50%". PHP_EOL;
} elseif ($total_pembelian >= 50) {
    echo "diskon 30%". PHP_EOL;
} elseif ($total_pembelian >= 20) {
    echo "diskon 10%". PHP_EOL;
} else {
    echo "tidak ada diskon";
}


$usia = 20;
if ($usia >= 25) {
    echo "Dewasa". PHP_EOL;
} elseif ($usia >= 15) {
    echo "Remaja". PHP_EOL;
} else {
    echo "Anak-anak". PHP_EOL;
}


// Menentukan Segitiga
$sisi1 = 20;
$sisi2 = 20;
$sisi3 = 30;

if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
    echo "Segitiga Sama Kaki". PHP_EOL;
} elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
    echo "Segitiga Sama Kaki". PHP_EOL;
} else {
    echo "Segitiga Sembarang". PHP_EOL;
}

$harga = 100.000;
if ($harga <= 50.000) {
    echo "Murah". PHP_EOL;
} elseif ($harga <= 100.000) {
    echo "Sedang". PHP_EOL;
} else {
    echo "Mahal". PHP_EOL;
}

?>