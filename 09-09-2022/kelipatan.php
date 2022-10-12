<?php
$angka = 15;

// if ($angka % 5 == 0){
//     echo "kelipatan lima";
// }else{
//     echo "bukan kelipatan 5";
// }
?>
<h2 style="color: <?= $angka %5 ==0? "green":"red";?>;">
<?php echo $angka % 5 == 0 ?'kelipatan 5':
'bukan kelipatan 5';?>
</h2>