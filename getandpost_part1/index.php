<html>

<head>
	<title>PHP get and post</title>
</head>

<body>
	<!-- penanganan form dengan method POST -->
	<form method="post" action="tampil.php">
		<label>Nama Siswa</label>
		<input type="text" name="nama">
		<label>Jenis Kelamin</label>
		<select name="jenis kelamin">
			<option value="Laki - laki">Laki - laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		<br/>
		<br/>
		<label>Asal Sekolah</label>
		<input type="text" name="sekolah">
		<label>No. Telpon</label>
		<input type="text" name="telpon">
		<br />
		<br />
		<input type="submit" value="Daftar">
	</form>

</body>

</html>