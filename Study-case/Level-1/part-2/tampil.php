<?php
$bilA = $_POST['bilA'];
$bilB = $_POST['bilB'];
$bilC = $_POST['bilC'];
$highest_number = max($bilA, $bilB, $bilC);
echo "========with max function========";
echo "<br>";
echo "Nilai tertinggi adalah $highest_number";
echo "<br>";
echo "========with if else========";
echo "<br>";
if ($bilA > $bilB && $bilA > $bilC) {
    echo "Nilai tertinggi adalah $bilA";
} elseif ($bilB > $bilA && $bilB > $bilC) {
    echo "Nilai tertinggi adalah $bilB";
} else {
    echo "Nilai tertinggi adalah $bilC";
}
