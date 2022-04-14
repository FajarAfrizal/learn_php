<?php
$p = $_POST['p'];
$k = $_POST['k'];
$total = $p + $k % 2;
if ($p >= 60 && $k >= 60) {
    if ($total >= 90) {
        echo "Nilai Anda A+ keterangan lulus";
    } elseif ($total >= 80) {
        echo "Nilai Anda A keterangan lulus";
    } elseif ($total >= 70) {
        echo "Nilai Anda B keterangan lulus";
    } elseif ($total >= 60) {
        echo "Nilai Anda C keterangan lulus";
    } else {
        echo "Nilai Anda D keterangan tidak lulus";
    }
} else {
    echo "Tidak kompeten";
}
