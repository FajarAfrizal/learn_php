<!-- make a get and post -->
<?php 
// get data from form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$sekolah = $_POST['sekolah'];
$telpon = $_POST['telpon'];
$br = "<br />";
$hr = "<hr />";
// return data
echo "Selamat <b>$nama</b>, Pendafataran Berhasil!";
echo $br;
echo $br;
echo "Biodata Anda";
echo $hr;
echo "Nama : $nama $br";
echo "Jenis Kelamin : $jenis_kelamin $br";
echo "Asal SMP : $sekolah $br";
echo "No. Telp : $telpon $br";
echo $br;
echo "Terima Kasih Telah Mendaftar $br";
echo "<a href='index.php'>Kembali</a>";
?>