<?php 
$mtk = $_POST['mtk'];
$bindo = $_POST['bindo'];
$bing = $_POST['bing'];

//kalau 55 ada 2 tidak kompeten
if ($mtk >= 75 && $bindo >= 75 && $bing >= 75 || $mtk >= 75 && $bindo >= 75 && $bing <= 75 ||  $mtk >= 75 && $bindo <= 75 && $bing >= 75 ||  $mtk <= 75 && $bindo >= 75 && $bing >= 75) {
    echo "Kompeten";
} else {
    echo "Tidak Kompeten";
}
?>