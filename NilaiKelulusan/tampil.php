<?php
$nilai = $_POST['nilai'];
if ($nilai >= 90 ) {
    echo "Nilai anda $nilai adalah A+ dan dinyatakan lulus";
} elseif ($nilai >= 80) {
    echo "Nilai anda $nilai adalah A dan dinyatakan lulus";
} elseif ($nilai >= 70) {
    echo "Nilai anda $nilai adalah B dan dinyatakan lulus";
} elseif ($nilai >= 60) {
    echo "Nilai anda $nilai adalah C dan dinyatakan lulus";
} elseif ($nilai <= 59) {
    echo "Nilai anda $nilai adalah D dan dinyatakan tidak lulus";
} else {
    echo "Nilai anda $nilai adalah tidak valid";
}
