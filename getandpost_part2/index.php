<html>

<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="style.scss">
</head>

<body>
	<h2>Form Pendaftaran</h2>
	<form method="post" action="tampil.php">
		<div class="form">
			<div class="main">
				<label for="NoSeleksi">No Seleksi</label>
				<input type="text" name="no_seleksi">
			</div>
			<div class="main">
				<label for="Nama">Nama</label>
				<input type="text" name="nama">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label for="JenisKelamin">Jenis Kelamin</label>
				<select name="jenis_kelamin">
					<option value="Laki - laki">Laki - laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="main">
				<label for="AnakKe">Anak Ke</label>
				<input type="number" name="anak_ke">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label for="NISN">NISN</label>
				<input type="text" name="nisn">
			</div>
			<div class="main">
				<label for="NIK">NIK</label>
				<input type="text" name="nik">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label for="TempatLahir">Tempat Lahir</label>
				<input type="text" name="tempat_lahir">
			</div>
			<div class="main">
				<label for="TanggalLahir">Tanggal Lahir</label>
				<input type="date" name="tanggal_lahir">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label for="Agama">Agama</label>
				<select name="agama">
					<option value="atheis">Atheis</option>
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="buddha">Buddha</option>
					<option value="hindu">Hindu</option>
					<option value="konghucu">Konghucu</option>
				</select>
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label>Asal Sekolah</label>
				<input type="text" name="sekolah">
			</div>
			<div class="main">
				<label>Tahun Lulus</label>
				<input type="number" name="tahun_lulus">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label>Nomer Handphone</label>
				<input type="text" name="nomer_handphone">
			</div>
			<div class="main">
				<label>E-mail</label>
				<input type="text" name="email">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label>Pilihan Bidang</label>
				<input type="text" name="pilihan_bidang">
			</div>
		</div>
		<div class="form">
			<div class="main">
				<label>Jurusan</label>
				<input type="text" name="jurusan">
			</div>
		</div>
		<input class="button" type="submit" value="Daftar">
	</form>

</body>

</html>