<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rayon = $_SESSION['rayon'];
    $rombel = $_SESSION['rombel'];
    $np = $_SESSION['np'];
    $nk = $_SESSION['nk'];
} else {
    $name = [];
    $nis = [];
    $rayon = [];
    $rombel = [];
    $np = [];
    $nk = [];
}


if (isset($_POST['name'])) {
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"];
    $rayon[] = $_POST['rayon'];
    $rombel[] = $_POST["rombel"];
    $np [] = $_POST["np"];
    $nk [] = $_POST["nk"];
}


$_SESSION["name"] = $name;
$_SESSION["nis"] = $nis;
$_SESSION["rayon"] = $rayon;
$_SESSION["rombel"] = $rombel;
$_SESSION["np"] = $np;
$_SESSION["nk"] = $nk;

$rombel = ["PPLG XI-1", "PPLG XI-2", "PPLG XI-3", "PPLG XI-4", "PPLG XI-5"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>    
    <h1 class = "text-center py-5">Form Nilai Siswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class = "mx-auto w-50">
        
    
        <form action="" method="POST" class="form-group">
            <div class="kotak-input">
                <label for="namasiswa" class="form-label">Nama</label>
                <input type="text" class="form-control" id="namasiswa" name="nama" required placeholder="Isi disini">
                
            </div>
            <br>
            <div class="kotak-input">
                <label for="namanis" class="form-label">NIS</label>
                <input type="number" class="form-control" id="namanis" name="nis" required placeholder="Isi disini">
            </div>
            <br>
            <div class="kotak-input">
                <label for="nilaipengetahuan" class="form-label">Nilai Pengetahuan</label>
                <input type="number" class="form-control" id="nilaipengetahuan" name="nilai_p" required placeholder="Isi disini">
            </div>
            <br>
            <div class="kotak-input">
                <label for="nilaiketerampilan" class="form-label">Nilai Keterampilan</label>
                <input type="number" class="form-control" id="nilaiketerampilan" name="nilai_k" required placeholder="Isi disini">
            </div>
            <br>
            <div class="kotak-input">
            <select class="form-select" name="rombel">
                <option hidden>Pilih Rombel</option>

                <?php
                foreach($rombel as $r){
                    echo   '<option value="">'.$r.'</option>';
                }
                ?>
            
            </select>
            </div>
            <br> 
            <input type="submit" value="Submit" class="btn btn-success mt-3">
            <?php
    $num = 0;
    foreach ($name as $key => $value) {
        $num++;
        echo "<br>$num. <br> Nama: $name[$key]<br> Nis: $nis[$key]<br> Rayon : $rayon[$key]";
    }
    ?>
        </form>
        <br>
        <br>