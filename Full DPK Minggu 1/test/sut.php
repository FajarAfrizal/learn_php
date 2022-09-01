<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $nis = $_SESSION['nis'];
    $rombel = $_SESSION['rombel'];
    $np = $_SESSION['np'];
    $nk = $_SESSION['nk'];
} else {
    $name = [];
    $nis = [];
    $rombel = [];
    $np = [];
    $nk = [];
}


if (isset($_POST['name'])) {
    $name[] = $_POST["name"];
    $nis[] = $_POST["nis"];
    $rombel[] = $_POST['rombel'];
    $np[] = $_POST['np'];
    $nk[] = $_POST['nk'];  
}


$_SESSION["name"] = $name;
$_SESSION["nis"] = $nis;
$_SESSION['rombel'] = $rombel;
$_SESSION["np"] = $np;
$_SESSION["nk"] = $nk;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<form class="w-30 container form-control" method="post" action="" >
    Name : <input type="text" name="name" class="form-control"><br>
    Nis : <input type="text" name="nis" class="form-control"><br>
    rombel : <input type="text" name="rombel" class="form-control"><br><br>
    np : <input type="number" name="np" class="form-control"> <br><br>
    nk : <input type="number" name="nk" class="form-control"><br><br>

    <input type="submit" value="Submit">
    <br>

    <?php
    $num = 0;
    foreach ($name as $key => $value) {
        $num++;
        echo "<td>$num. <br> Nama: $name[$key]</td> ";
    }
    ?>
    <br>

    <button><a href="destroy.php">clear</a></button>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
