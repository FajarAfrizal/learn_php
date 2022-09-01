<?php
$rombel = ["PPLG XI - 1", 'PPLG XI - 2', 'PPLG XI - 3', 'PPLG XI - 4', 'PPLG XI - 5'];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<form class="w-30 container form-control" method="post" action="">
    <h1>INFO INFO</h1>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required >
    </div>
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="number" name="nis" class="form-control" id="nis" required>
    </div>
    <div>
        <select name="rombel" class="form-control">
            <option hidden> Select Rombel </option>
                <?php
                foreach ($rombel as $data) {
                ?>
                <option value=""><?php echo $data ?></option>
                <?php
                }
                ?>
        </select>
    </div>
    <BR>
    <div class="mb-3">
        <label for="nilai_p" class="form-label">Nilai P</label>
        <input type="number" name="np" class="form-control" id="nilai_p" required >
    </div>
    <div class="mb-3">
        <label for="nilai_k" class="form-label">Nilai K</label>
        <input type="number" name="nk" class="form-control" id="niali_k" required>
    </div>

    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<?php

if (isset($_POST['name'])){
    $nama = $_POST ['name'];
    $nis = $_POST ['nis'];
    // $rombel = $_POST ['rombel'];
    $np = $_POST ['np'];
    $nk = $_POST ['nk'];
    $nilaiakhir = ($np + $nk) / 2;
}

if($np > 100 || $nk > 100){
    echo '<div class="alert alert-danger" role="alert">
    Nilai Tidak boleh Lebih dari 100 <a href="#" class="alert-link"></a>. 
  </div>';
}elseif($nilaiakhir >= 85){
    echo '
    Nama Kamu : <br>  ' . $nama . '<br><br>
    NIS  : <br>  ' . $nis . '<br><br>
    Nilai Pengetahuan : <br> ' . $np . '<br><br>
    Nilai Keterangan : <br> ' . $nk . '<br><br>
    Nilai Akhir   : <br>  ' . $nilaiakhir . " A" . '<br><br>';
}elseif($nilaiakhir < 85 && $nilaiakhir >=75){
    echo '
    Nama Kamu : <br>  ' . $nama . '<br><br>
    NIS  : <br>  ' . $nis . '<br><br>
    Nilai Pengetahuan : <br> ' . $np . '<br><br>
    Nilai Keterangan : <br> ' . $nk . '<br><br>
    Nilai Akhir   : <br>  ' . $nilaiakhir . " B" . '<br><br>';
}else{
    echo 
    '
    Nama Kamu : <br>  ' . $nama . '<br><br>
    NIS  : <br>  ' . $nis . '<br><br>
    Nilai Pengetahuan : <br> ' . $np . '<br><br>
    Nilai Keterangan : <br> ' . $nk . '<br><br>
    Nilai Akhir   : <br>  ' . $nilaiakhir . " B" . '<br><br>';;
}
// echo "Nama  : $nama $br";
// echo "Nis : $nis $br";
// echo "Nilai Pengetahuan : $np $br";
// echo "Nilai Keterampilan : $nk $br";
// echo "Nilai Akhir : $nilaiakhir $br"
?>
</html>
