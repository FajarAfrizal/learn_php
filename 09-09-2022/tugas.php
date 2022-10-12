
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body, html {
            background-image: linear-gradient(800deg,red,blue);
        }
        .border{
            border: 10px solid black;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 25px;
            background-color: blue;
            border-radius: 4px;
            width: 50%;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    $alert = false;
    $berhasil = false;

    if ($alert == true) {
    ?>
        <h4 class="bg-danger text-white p-2">Data tidak boleh kosong</h4>
    <?php
    }
    ?>
    <?php
    if ($berhasil == true) {
    ?>
        <h4 class="bg-success text-white p-2">Data berhasil disimpan</h4>
    <?php
    }
    ?>
    <form class="form-group " action="" method="POST">
        <div class="inputForm m-5 w-75 mx-auto card  pt-0  text-light" style="background:#9e6b55; box-shadow:1px 1px 8px #9e6b55;">
            <div class="p-5">
                <div class="mb-3 mt-1">
                    <label class="form-label"> Angka</label>
                    <input type="number" name="angka" class="form-control" placeholder="Masukan Angka">
                </div>
            </div>
            <input type="submit" name="submit" value="submit" class="btn bg-success text-white">
        </div>
        <?php

$angka = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['angka'])) {
        $angka = $_POST['angka'];
        $berhasil = true;
    } else {
        $alert = true;
    }
    for ($i = 1; $i <= $angka; $i++) {
        if ($bagi = $i % 5 == 0) {
            echo '<div class="border">kelipatan 5 : ' . $i ."<br>".'</div>';
        }
    }
}

?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>