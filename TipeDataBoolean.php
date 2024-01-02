<?php 

// Tipe data boolean adalah tipe data paling sederhana di PHP
// Tipe data boolean adalah tipe data dengan nilai kebenaran (benar atau salah)
// Nilai benar direpresentasikan dengan true (case insensitive)
// Nilai salah direpresentasikan dengan false (case insensitive)

// Penggunaan:
// Pengambilan Keputusan: Untuk mengontrol alur program berdasarkan kondisi tertentu.
// Penetapan Status: Untuk menyimpan status atau kondisi tertentu dalam program.
// Operasi Logika: Digunakan dalam operasi-operasi logika seperti AND, OR, dan NOT

echo "Benar :";
var_dump(true);

echo "Salah :";
var_dump(false);
echo "\n";

// Latihan
// Pengkondisian Dengan Boolean
$nilai = 50;

if ($nilai >= 80) {
    echo "Nilai A". PHP_EOL;
} elseif ($nilai >= 50) {
    echo "Nilai B". PHP_EOL;
} else {
    echo "Nilai C". PHP_EOL;
}

// Operasi Logika
$sesuai_umur = true;
$izin_ortu = true;

if ($sesuai_umur && $izin_ortu) {
    echo "Anda Memilik Izin \n";
} else {
    echo "Anda Tidak Memiliki Izin \n";
}

// Penyimpanan Keputusan
$nilai1 = 20;
$nilai2 = 10;

$nilai_lebih_besar = ($nilai1 > $nilai2);
echo "Apakah Nilai1 Lebih Besar dari Nilai2" . ($nilai_lebih_besar ? 'Ya' : 'Tidak'). PHP_EOL;

$pendaftaran = true;
if ($pendaftaran) {
    echo "Daftar Berhasil". PHP_EOL;
} else {
    echo "Daftar Gagal";
}


$pesanan_dikirim = false;
if ($pesanan_dikirim) {
    echo "Sudah Di Kirim". PHP_EOL;
} else {
    echo "Belum Di Kirim". PHP_EOL;
}

$hasil = 70;
if ($hasil >= 70) {
    echo "Kamu Lulus". PHP_EOL;
} else {
    echo "Tidak Lulus". PHP_EOL;
}


?>