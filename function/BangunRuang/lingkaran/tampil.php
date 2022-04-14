<?php
$jari = $_POST['jari'];

function luas_lingkaran($jari)
{
    $luas = 3.14 * $jari * $jari;
    return $luas;
}
echo "luasnya adalah ",luas_lingkaran($jari);
