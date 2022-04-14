<?php
$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
for ($i = 0; $i <= 100; $i++) {
    if ($i == $a && $a > $b && $a > $c) {
        echo "Nilai terbesar adalah $i <br>";
    } elseif ($i == $b && $b > $a && $b > $c) {
        echo "Nilai terbesar adalah $i <br>";
    } elseif ($i == $c && $c > $a && $c > $b) {
        echo "Nilai terbesar adalah $i <br>";
    } else {
        echo "$i <br>";
    }
}
