<?php
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$rayon = $_POST['rayon'];
//
$nis2 = $_POST['nis2'];
$nama2 = $_POST['nama2'];
$rayon2 = $_POST['rayon2'];
//
$nis3 = $_POST['nis3'];
$nama3 = $_POST['nama3'];
$rayon3 = $_POST['rayon3'];

function ingfo($a, $b, $c)
{
    echo "NIS: $a<br>";
    echo "Nama: $b<br>";
    echo "Rayon: $c<br>";
}
function siswa($a){
    echo "<h4>Siswa $a</h4>";
}
siswa(1);
ingfo($nis, $nama, $rayon);
siswa(2);
ingfo($nis2, $nama2, $rayon2);
siswa(3);
ingfo($nis3, $nama3, $rayon3);