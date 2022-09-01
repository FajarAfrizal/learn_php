<?php
$nama ="";
session_start();
$data = [
    $nama => $_POST['nama']
];
$_SESSION ['array'] =$data;

array_push($_SESSION['array'],$data);

if (isset($_SESSION['array'])){
    $nama = $_SESSION['array'];
}else{
    $nama =[];
};

if (isset($_POST['nama'])) {
    $name[] = $_POST['nama'];
};
?>

<form method="POST" action="">
    Name : <input type="text" name="nama"><br>
    
    <input type="submit" value="Submit">
    <br>

    <?php
    $num = 0;
    foreach ($nama as $key => $value) {
        $num++;
        echo "<br>. <br> Nama: $nama[$key]<br>";
    };
    ?>
    <br>


