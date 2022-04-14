<?php 
$angka = $_POST['angka'];

if ($angka % 2 == 0) {
    echo "$angka Bilangan genap";
} else {
    echo "$angka Bilangan ganjil";
}
?>