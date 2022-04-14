<?php
$air = $_POST['air'];
if ($air >= 100000) {
    echo "Kiamat";
} elseif ($air >= 10) {
    echo "Banjir";
} elseif ($air >= 8) {
    echo "Rawan banjir";
} elseif ($air >= 7) {
    echo "Bahaya";
} elseif ($air >= 2) {
    echo "siaga";
} else {
    echo "aman";
}
