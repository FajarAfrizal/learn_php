<?php
$bilA = $_POST['bilA'];
$bilB = $_POST['bilB'];
if ($bilA > $bilB) {
    echo "Nilai tertinggi adalah $bilA";
} else {
    echo "Nilai tertinggi adalah $bilB";
}
