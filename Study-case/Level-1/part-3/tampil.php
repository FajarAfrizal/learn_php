<?php
$bilA = $_POST['bilA'];
$bilB = $_POST['bilB'];
$bilC = $_POST['bilC'];
$bilD = $_POST['bilD'];
echo "========with max function========";
$highest_numberTwo = max($bilA, $bilB, $bilC, $bilD);
echo "<br>";
echo "Nilai tertinggi adalah $highest_numberTwo";
echo "<br>";
echo "========with if else========";
echo "<br>";
if ($bilA > $bilB && $bilA > $bilC && $bilA > $bilD) {
    echo "Nilai tertinggi adalah $bilA";
} elseif ($bilB > $bilA && $bilB > $bilC && $bilB > $bilD) {
    echo "Nilai tertinggi adalah $bilB";
} elseif ($bilC > $bilA && $bilC > $bilB && $bilC > $bilD) {
    echo "Nilai tertinggi adalah $bilC";
} else {
    echo "Nilai tertinggi adalah $bilD";
}