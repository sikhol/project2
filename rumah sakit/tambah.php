<?php 
require 'functions.php'; 

if (isset($_POST["submit"])) {


// cek apakah tombol sudah ditekan
	if( tambah($_POST) > 0 ){

		echo "
		<script>

			alert('data berhasil ditambahkan');
			document.location.href ='index.php';


		</script>



		";
	}else{
		echo "<script>

			alert('data gagal ditambahkan');

		</script>";
	}


	
	// ambil data dari setiap elemen

	// $nim=$_POST["nim"];
	// $nama=$_POST["nama"];
	// $alamat=$_POST["alamat"];
	// $gambar=$_POST["gambar"];

	// query insert data

	// $query= "INSERT INTO anggota VALUES ('','$nim','$nama','$alamat','$gambar')";
	// mysqli_query($link,$query);

	// // cek apakah data berhasil ditambahkan

	// if (mysqli_affected_rows($link) > 0 ) {
	// 	echo "data berhasil ditambahkan";
	// }


}






 ?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah data mahasiswa</title>
	<style >
		
		li{
			margin-bottom: 3px;
		}
	</style>
</head>
<body>
<h1>Tambah data mahasiswa</h1>
	<form action="" method="POST" ">

		<ul><li><label for="nama">kode dokter 	: </label><input type="text" name="kode_dokter" id="nama" required ></li>
			<li><label for="nama">Nama dokter 	: </label><input type="text" name="nama_dokter" id="nama" required ></li>
			<li><label for="alamat">Alamat 	: </label><input type="text" name="alamat" id="alamat" required ></li>
			<li><label for="spesialis">Spesialis 	: </label><input type="text" name="spesialis" id="spesialis" required ></li>
			
			<li>
				<button type="submit" name="submit">tambah data!</button>
			</li>

		</ul>



	</form>

</body>
</html>