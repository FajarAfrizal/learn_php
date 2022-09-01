<?php
$nilai = [80, 78, 72, 84, 92, 88];
$br = "<br>";

// implode untuk menggabungkan array dengan string
$imp = implode (",", $nilai);
echo "Nilai saya : $imp $br";

// mencari nilai terbesar
$max  = max($nilai);
echo "Nilai tinggi : $max $br";

// mencari nilai terkecil
$min = min($nilai);
echo "Nilai kecil : $min $br";

$nilai1 = array();
foreach($nilai as $nilaibaru){
    array_push($nilai1, $nilaibaru);
}

asort($nilai);
$no = implode(",", $nilai);
echo "Urutan dari terkecil ke terbesar : $no $br";

arsort($nilai);
$no = implode(",", $nilai);
echo "urutan dari besar ke terkecil : $no $br";

// array_sum untuk menentukan jumlah semua nilai dalam array
$rata = array_sum($nilai) / count($nilai);
echo "Rata - Rata : $rata $br";

// ceil untuk di bulatkan ke bawah
$bulatkan = round($rata);
echo "di bulatkan ke atas: $bulatkan $br";

// array_splice menghapus nilai array dan menggantikan yang baru di dalam array
$ganti = [75];
array_splice($nilai1, 2, 1, $ganti);
$no = implode(",", $nilai1);
echo "ganti nilai : $no $br";

$urutanganti = arsort($nilai1);
$no = implode(",", $nilai1);
echo "nilai saya : $no $br";
?> 