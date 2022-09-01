<?php
    session_start();
    $nama = "";
    $nis = "";
    $nilai_p = "";
    $nilai_k = "";
    $nilai_akhir = "";
    $keterangan = "";
    $action = "";
    $gagal = "";
    $data=[];
    $rombel = ["PPLG XI-1", "PPLG XI-2", "PPLG XI-3", "PPLG XI-4", "PPLG XI-5"];

    if(isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['nilai_p']) && isset($_POST['nilai_k'])){
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $nilai_p = $_POST['nilai_p'];
        $nilai_k = $_POST['nilai_k'];   
        $new_rombel = $_POST['rombel'];
        
        
        if($nilai_p >100 || $nilai_k >100){
            $gagal = true;
            $error = "Mana ada nilai lebih dari 100, tolong isi ulang ya !";
            
            
        }
        else {
            $gagal = false;
            $nilai_akhir = round(($nilai_k + $nilai_p) / 2);
            if ($nilai_akhir >= 85) {
                $keterangan = "A";
                
                
            } else if ($nilai_akhir < 85 && $nilai_akhir >= 75) {
                $keterangan = "B";
            } else {
                $keterangan = "C";
            }
            
            $_SESSION['data'][$nis] = array('nis'=>$nis,'nama'=>$nama,'rombel'=>$new_rombel,'nilai_p'=> $nilai_p, 'nilai_k'=>$nilai_k, 'nilai_akhir'=>$nilai_akhir,'keterangan'=> $keterangan);

            
        }

    }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class = "mx-auto w-75">
        
    <?php if ($gagal == true) { ?>
                    <div class="alert alert-dark">
                        <?= $error ?>
                    </div>
                <?php } ?>
        <div class="shadow-lg p-4 mb-6 bg-body rounded">
            <h1 class = "text-center text-warning py-5">Form Nilai Siswa</h1>
            <form action="" method="POST" class="form-group">
                <div class="kotak-input">
                    <label for="namasiswa" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namasiswa" name="nama" required placeholder="Isi di sini">
                    
                </div>
                <br>
                <div class="kotak-input">
                    <label for="namanis" class="form-label">NIS</label>
                    <input type="number" class="form-control" id="namanis" name="nis" required placeholder="Isi di sini">
                </div>
                <br>
                <div class="kotak-input">
                    <label for="nilaipengetahuan" class="form-label">Nilai Pengetahuan</label>
                    <input type="number" class="form-control" id="nilaipengetahuan" name="nilai_p" required placeholder="Isi di sini">
                </div>
                <br>
                <div class="kotak-input">
                    <label for="nilaiketerampilan" class="form-label">Nilai Keterampilan</label>
                    <input type="number" class="form-control" id="nilaiketerampilan" name="nilai_k" required placeholder="Isi di sini">
                </div>
                <br>
                <div class="kotak-input">
                <select class="form-select" name="rombel" required>
                    <option value="" hidden>Pilih Rombel</option>
                


                    <?php
                    foreach($rombel as $r){
                        echo   "<option value='$r'>".$r."</option>";
                    }
                    ?>
                
                </select>
                
                </div>
                <br> 
                <input type="submit" value="Kirim" class="btn btn-success mt-3">
                
            </form>
            <br>
            <center>
                <form action="" method="post">
                    <input type="hidden" name="logout" value="true" />
                    <button class="btn btn-danger">Hapus Data</button>
                </form>
            </center>
                <?php 
            if(isset($_POST['logout'])) {
                unset($_SESSION['data']);
                session_destroy();
            }
            ?>
        </div>
        <br>
       
        
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <h4 class = text-center>DATA NILAI</h4>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Rombel</th>
                <th class= text-center scope="col">Nilai Pengetahuan</th>
                <th class= text-center scope="col">Nilai Keterampilan</th>
                <th class= text-center scope="col">Nilai Akhir</th>
                <th class= text-center scope="col">Keterangan</th>
                <th class= text-center scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_SESSION['data'])){
                    $data = $_SESSION['data'];
                    $no = 1;
                    foreach ($data as $d){
                    // print_r ($data);
                ?>
                <tr>
            
                    <td><?= $d['nis'] ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['rombel']; ?></td>
                    <td class= text-center><?= $d['nilai_p']; ?></td>
                    <td class= text-center><?= $d['nilai_k']; ?></td>
                    <td class= text-center><?= $d['nilai_akhir']; ?></td>
                    <td class= text-center><?= $d['keterangan']; ?></td>
                    <td class= text-center>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-secondary">Hapus</button>
                    </td>
                </tr>
                <?php }} ?>
                    
                
            </tbody>
        </table>
        <br>
        
        
        
            <!-- <?php if ($nilai_akhir != "") { ?>
            <div class="alert alert-warning">
                <h4>LIHAT DISINI !</h4>
                <br>
                <h5>Nama : <?= $nama ?></h5>
                <h5>NIS : <?= $nis ?></h5>
                <h5>Rombel : <?= $new_rombel ?></h5>
                <h5>Nilai Keterampilan : <?= $nilai_k ?></h5>
                <h5>Nilai Pengetahuan : <?= $nilai_p ?></h5>
                <h5>Nilai Akhir : <?= $nilai_akhir ?></h5>
                <h5>Kelompok Nilai : <?= $keterangan ?></h5>
            </div>
        <?php } ?> -->

        
    </div>
    </body>
    </html>