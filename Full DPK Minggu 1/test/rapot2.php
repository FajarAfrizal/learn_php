<?php
session_start();
if (isset($_SESSION['nama'])) {
    $nama = $_SESSION["nama"];
    $nis = $_SESSION['nis'];
    $rombel = $_SESSION['rombel'];
    $nilai_p = $_SESSION['nilai_p'];
    $nilai_k = $_SESSION['nilai_k'];
} else {
    $nama = [];
    $nis = [];
    $rombel = [];
    $nilai_p = [];
    $nilai_k = [];
}


$nama = [
    $nama = $_POST["nama"],
    $nis = $_POST['nis'],
    $nilai_p = $_POST['nilai_p'],
    $nilai_k = $_POST['nilai_k'],
    $new_rombel = $_POST['rombel'],
];
// $nis = "";
// $nilai_p = "";
// $nilai_k = "";
$nilai_akhir = "";
$keterangan = "";
$gagal = "";
$rombel = ["PPLG XI-1", "PPLG XI-2", "PPLG XI-3", "PPLG XI-4", "PPLG XI-5"];
if (isset($_POST['nama'])) {
    $nama = $_POST["nama"];
    $nis = $_POST['nis'];
    $nilai_p = $_POST['nilai_p'];
    $nilai_k = $_POST['nilai_k'];
    $new_rombel = $_POST['rombel'];

    if ($nilai_p > 100 || $nilai_k > 100) {
        $gagal = true;
        $error = "Nilai tidak boleh lebih dari 100, anjing, silahkan isi ulang kembali kontol";
    } else {
        $gagal = false;
        $nilai_akhir = ($nilai_k + $nilai_p) / 2;
        if ($nilai_akhir >= 85) {
            $keterangan = "A";
        } else if ($nilai_akhir < 85 && $nilai_akhir >= 75) {
            $keterangan = "B";
        } else {
            $keterangan = "C";
        }
    }
}
$_SESSION["nama"] = $nama;
$_SESSION["nis"] = $nis;
$_SESSION['rombel'] = $rombel;
$_SESSION["nilai_p"] = $nilai_p;
$_SESSION["nilai_k"] = $nilai_k;
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
    <h1 class="text-center py-5">Form Nilai Siswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="mx-auto w-50">

        <?php if ($gagal == true) { ?>
            <div class="alert alert-dark">
                <?= $error ?>
            </div>
        <?php } ?>
        <form action="" method="POST" class="form-group">
            <div class="kotak-input">
                <label for="namasiswa" class="form-label">Nama</label>
                <input type="text" class="form-control" id="namasiswa" name="nama" required placeholder="Isi Disini">

            </div>
            <br>
            <div class="kotak-input">
                <label for="namanis" class="form-label">NIS</label>
                <input type="number" class="form-control" id="namanis" name="nis" required placeholder="Isi Disini">
            </div>
            <br>
            <div class="kotak-input">
                <label for="nilaipengetahuan" class="form-label">Nilai Pengetahuan</label>
                <input type="number" class="form-control" id="nilaipengetahuan" name="nilai_p" required placeholder="Isi Disini">
            </div>
            <br>
            <div class="kotak-input">
                <label for="nilaiketerampilan" class="form-label">Nilai Keterampilan</label>
                <input type="number" class="form-control" id="nilaiketerampilan" name="nilai_k" required placeholder="Isi Disini">
            </div>
            <br>
            <div class="kotak-input">
                <select class="form-select" name="rombel">
                    <option hidden>Pilih Rombel</option>

                    <!-- <?php
               //     foreach ($rombel as $r) {
                 //       echo   '<option value="">' . $r . '</option>';
                   // }

                    ?> -->

                </select>
            </div>
            <input type="submit" value="Submit" class="btn btn-success mt-3">
        </form>
        <br>
        <br>

        <?php if ($nilai_akhir != "") { ?>
        <?php } ?>
        <?php
        foreach ($nama as $key => $value) {
            echo '<div class="table">
        <h4>LIHAT DISINI !</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">nama</th>
                    <th scope="col">nis</th>
                    <th scope="col">rombel</th>
                    <th scope="col">nilai pengetahuan</th>
                    <th scope="col">nilai keterampilan</th>
                    <th scope="col">keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>' . $nama[$key]   . '<./td>
                    <td>' . $nis[$key] . '</td>
                    <td>' . $r[$key] . '</td>
                    <td>' . $nilai_p[$key] . '</td>
                    <td>' . $nilai_k[$key] . '</td>
                    <td>' . $keterangan[$key] . '</td>

                </tr>
            </tbody>
        </table>
    </div>';
        }


        ?>


    </div>
</body>

</html>