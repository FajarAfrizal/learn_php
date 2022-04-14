<?php
// misal nya header 
$h1Open = "<h1>";
$h1Close = "</h1>"; 
echo $h1Open; echo "hellow World!"; echo $h1Close;?>
<?php echo "<hr>"; //yahahahahahahah hayun?>
<?php //misal body
//type data
$wow = false; //boolean
echo $wow;
$word = "Easy"; //string
echo $word ;
$br = "<br>";
echo $br;
$number = 43424211231231; // integer
echo $number;
// biasalah
echo $br;
$a = 70;
$b = 98;
// karna integer pasti di timbah pasti dia nambah lah
echo $a + $b ;
echo $br;
$c = "8080";
$d = "9090";
echo $c + $d;
// wowwwww di php gak string gak integer kalo di apain pasti itu hasilnya
// echo "mabar " + "melers";  
// kalo non number dia gak bisa di tambah coy jelek menurut ku
// ==================== operator coy kayak bisanya
// 1. Penjumlahan (+)
// 2. Pengurangan (-)
// 3. Perkalian (*)
// 4. Pemangkatan (**)
// 5. Pembagian (/)
// 6. Sisa Bagi (%)
echo "<hr>";
$sleep = false;
//ini bukan javascript pin hehhhhh
if($sleep === true){
    echo "zzzzzzzzzzzzzzz";
}else{
    echo "kurang tidur coy";
}
echo $br;
// short hand if else bilek coy 
$duit = 800; 
echo $duit > 1200 ? "ini minuman nya" : "kurang duit coy";
// study kasus katanya
echo "<hr>";
echo "===study kasus===";
// pringkat sekolah katanya 
echo $br;
$nilai = 75; 
if($nilai > 90){
    echo "A";
} elseif ($nilai > 80){
    echo "B";
} elseif ($nilai > 70){
    echo "C";
} else {
    echo "D";
}
// lagi lagi ini bukan javascript oi
echo "<hr>";
//pengulangan 
for ($i = 0; $i <= 50; $i++){
    echo "lfmao <br>";
}
// array php bilek coy 
echo $br;
$list =  ['kurang' , 'tau', 'idk']; //ini array
for ($i = 0; $i < count($list); $i++) {
    echo "{$list[$i]} <br>";
}

for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}
?> 
