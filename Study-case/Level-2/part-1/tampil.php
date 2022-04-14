<?php
$highest = $_POST['highest'];
for ($i = 0; $i <= $highest; $i++) {
    echo "$i <br>";
    // return the highest number
    if ($i == $highest) {
        echo "Nilai tertinggi adalah $i";
    }
}
