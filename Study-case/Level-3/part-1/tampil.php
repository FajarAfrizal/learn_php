<?php
$bilA = $_POST['bilA'];
$bilB = $_POST['bilB'];
$bilC = $_POST['bilC'];
$bil = array($bilA, $bilB, $bilC);
natsort($bil);
echo implode(',', $bil);
echo "<br>";
if ($bilA > $bilB && $bilA > $bilC) {
    echo "Nilai tertinggi adalah $bilA";
} elseif ($bilB > $bilA && $bilB > $bilC) {
    echo "Nilai tertinggi adalah $bilB";
} else {
    echo "Nilai tertinggi adalah $bilC";
}
