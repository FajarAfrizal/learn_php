<?php
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];

function luas_persegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}
echo "luasnya adalah ", luas_persegi($panjang, $lebar);
