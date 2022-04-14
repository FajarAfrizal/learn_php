<?php 
$angka = $_POST['angka'];
//nilai
if ($angka >= 0){
    echo "Nilai anda E";
} elseif ($angka >= 60 && $angka < 70){
    echo "Nilai anda D";
} elseif ($angka >= 70 && $angka < 80){
    echo "Nilai anda C";
} elseif ($angka >= 80 && $angka < 90){
    echo "Nilai anda B";
} elseif ($angka >= 90 && $angka <= 100){
    echo "Nilai anda A";
}
else {
    echo "Nilai tidak valid";
}
?>