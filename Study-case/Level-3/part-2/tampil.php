<?php
$a = $_POST['A'];
$b = $_POST['B'];
$c = $_POST['C'];
function middleOfThree($a, $b, $c){
    $x = $a - $b;
    $y = $b - $c;
    $z = $a - $c;
    if ($x * $y > 0)
        return "Nilai tengah adalah $b";
    else if ($x * $z > 0)
        return "Nilai tengah adalah $c";
    else
        return "Nilai tengah adalah $a";
}
echo middleOfThree($a, $b, $c);
