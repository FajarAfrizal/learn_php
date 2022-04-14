<?php
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];

function luas_segitiga($alas, $tinggi)
{
    $luas = $alas * $tinggi / 2;
    return $luas;
}
echo "luasnya adalah ", luas_segitiga($alas, $tinggi);