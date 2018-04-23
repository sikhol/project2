<?php 
require 'functions.php'; 

$id= $_GET["id"];

// query data mahasiswa berdasarkan id

$mhs= query("SELECT *FROM pasien WHERE id_pasien=$id")[0];



if (isset($_POST["submit"])) {

	if( ubahpasien($_POST) > 0 ){

		echo "
		<script>

			alert('data berhasil diubah');
			document.location.href ='pasien.php';


		</script>



		";
	}else{
		echo "<script>

			alert('data gagal diubah');

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
	<title>ubah data dokter</title>
	<title>halaman admin</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
   <script src="js/aos.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<style >
		
		li{
			margin-bottom: 3px;
		}
	</style>
</head>
<body style="background-color: #cfe0d7; ">
	<nav class="navbar" style="background-color: #f9fffe;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ubah Data pasien</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
   
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<div class="container" style="border: 0px;  background-color: #faffff;border-radius: 5px; opacity: .95; min-height: 600px;">

	<div class="row text-center">
		<h2>Ubah Data pasien</h2>
	

		<div class="col-sm-10 " style="margin-top: 60px;">

			<form class="form-horizontal" role="form" method="post">
				<input type="hidden" name="id" value="<?= $mhs["id_pasien"]; ?>">

		  <div class="form-group">
		    <label class="control-label col-sm-4" for="kode_dokter">kode Dokter:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="kode_dokter" name="kode_dokter" required value="<?= $mhs["kode_dokter"];?>" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-4" for="kode_obat">kode Obat:</label>
		    <div class="col-sm-8"> 
		      <input type="text" class="form-control" id="kode_obat" name="kode_obat" required value="<?= $mhs["kode_obat"]; ?>" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-4" for="nama_pasien">Nama Pasien:</label>
		    <div class="col-sm-8"> 
		      <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required value="<?= $mhs["nama_pasien"];?>" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-4" for="kode_ruang">ruangan:</label>
		    <div class="col-sm-8"> 
		      <input type="text" class="form-control" id="kode_ruang" name="kd_ruang" required value="<?= $mhs["kd_ruang"];?>" >
		    </div>
		  </div>

		  <div class="form-group"> 
		    <div class="col-sm-offset-4 ">
		      <button type="submit" name="submit" class="btn btn-default">Ubah Data!</button>
		    </div>
		  </div>
		</form>
		</div>




	</div>

</div>

</body>
</html>