<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	// INCLUDE KONEKSI KE DATABASE
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$umur = $_POST['umur'];
		$email = $_POST['email'];

		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($nama) || empty($umur) || empty($email)) {

			if (empty($nama)) {
				echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
			}

			if (empty($umur)) {
				echo "<font color='red'>Kolom Umur tidak boleh kosong.</font><br/>";
			}

			if (empty($email)) {
				echo "<font color='red'>Kolom Email tidak boleh kosong.</font><br/>";
			}

			// KEMBALI KE HALAMAN SEBELUMNYA
			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {

			// MEMASUKAN DATA DATA
			$result = mysqli_query($mysqli, "INSERT INTO users(nama,umur,email) VALUES('$nama', '$umur', '$email')");

			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='index.php'>Lihat Hasilnya</a>";
		}
	}
	?>
</body>

</html>
