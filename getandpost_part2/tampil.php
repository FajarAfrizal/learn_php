<html>

<head>
    <title>Terimakasih Telah Mendaftar</title>
    <link rel="stylesheet" href="styles.scss">
</head>

<body>
    <?php
    // get data from form
    $no_seleksi = $_POST['no_seleksi'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $anak_ke = $_POST['anak_ke'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $nomer_handphone = $_POST['nomer_handphone'];
    $email = $_POST['email'];
    $pilihan_bidang = $_POST['pilihan_bidang'];
    $jurusan = $_POST['jurusan'];
    $conn = new mysqli('localhost', 'root', '', 'data');

    $sql = "INSERT INTO form (no_seleksi, nama, jenis_kelamin, anak_ke, nisn, nik, tempat_lahir, tanggal_lahir, agama, sekolah, tahun_lulus, nomer_handphone, email, pilihan_bidang, jurusan) VALUES ('$no_seleksi', '$nama', '$jenis_kelamin', '$anak_ke', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$sekolah', '$tahun_lulus', '$nomer_handphone', '$email', '$pilihan_bidang', '$jurusan')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Data Berhasil Ditambahkan</h3>";
        echo "<hr>";
        echo "<p>Dengan nomor seleksi : $no_seleksi</p>";
        echo "<p>Nama : $nama</p>";
        echo "<p>Jenis Kelamin : $jenis_kelamin</p>";
        echo "<p>Anak Ke : $anak_ke</p>";
        echo "<p>NISN : $nisn</p>";
        echo "<p>NIK : $nik</p>";
        echo "<p>Tempat Lahir : $tempat_lahir</p>";
        echo "<p>Tanggal Lahir : $tanggal_lahir</p>";
        echo "<p>Agama : $agama</p>";
        echo "<p>Sekolah : $sekolah</p>";
        echo "<p>Tahun Lulus : $tahun_lulus</p>";
        echo "<p>Nomer Handphone : $nomer_handphone</p>";
        echo "<p>Email : $email</p>";
        echo "<p>Pilihan Bidang : $pilihan_bidang</p>";
        echo "<p>Jurusan : $jurusan</p>";
        echo "<a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
</body>

</html>
