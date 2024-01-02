<?php 

// Tipe data string adalah tipe data representasi dari teks
// String bisa mengandung kosong atau banyak karakter

echo 'Name : ';
echo 'Hasbi Muttaqin';
echo "\n";

echo "Nama :";
echo " Hasbi\t Muttaqin\n";

echo <<<TEXT
 selamat belajar PHP
 sekarang, kita belajar tipe data string
 ini adalah cara ke-3 membuat string 
 bisa menggunakan HEREDOC
 TEXT;

 echo "\n";
 echo "\n";

 echo <<<'EKO'
 selamat belajar PHP
 sekarang, kita belajar tipe data string
 ini adalah cara ke-4 membuat string 
 bisa menggunakan NOWDOC
 EKO;
 echo "\n";
 echo "\n";


 // Latihan 
 $nama_depan = "Hasbi";
 $nama_belakang = "Muttaqin";

 $nama = $nama_depan. " ".$nama_belakang;
 echo "$nama";
 echo "\n";

 $panjang = strlen($nama);
 echo "Panjang Nama : $panjang";
 echo "\n";


$nama_pengguna = "Yoriko Sayakori";
$sambutan = "HI Selamat $nama_pengguna";
echo $sambutan. PHP_EOL;

$teks = "Ini adalah contoh kalimat";
$panjang_teks = strlen($teks);
$to_upper = strtoupper($teks);
$to_lower = strtolower($teks);

echo "Panjang Teks $panjang_teks". PHP_EOL;
echo $to_upper. PHP_EOL;
echo $to_lower. PHP_EOL;


$kata ="Kenali Baja Ringan: Jenis, Kegunaan, dan Pemasangan Efisien. Baca informasi lengkapnya sekarang!";
$a = strlen($kata);
echo $a;
?>