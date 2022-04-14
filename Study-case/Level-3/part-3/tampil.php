<?php
$bilA = $_POST['bilA'];
$bilB = $_POST['bilB'];
$bilC = $_POST['bilC'];
if ($bilA === $bilB && $bilA === $bilC) {
    echo "SAMA SISI";
} elseif ($bilA === $bilB || $bilA === $bilC || $bilB === $bilC) {
    echo "SAMA KAKI";
} else {
    echo "SEMBARANG";
}
