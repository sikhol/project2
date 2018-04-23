<?php 

session_start();
if (!isset($_SESSION["login"])) {
   header('Location: login.php');
}
require 'functions.php';
$client=query("SELECT * FROM dokter");





 ?>


<!DOCTYPE html>
<html>
<head>
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


</head>
<body style="background-color: #cfe0d7; ">

	<nav class="navbar" style="background-color: #f9fffe;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sistem Informasi Rumah Sakit</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
      <li><a href="index.php">Dokter</a></li>
      <li><a href="pasien.php">Pasien</a></li> 
      <li><a href="obat.php">Obat</a></li> 
      <li><a href="ruang.php">Ruang</a></li> 
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
   
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

	<div class="container" style="border: 0px;  background-color: #faffff;border-radius: 5px; opacity: .95; min-height: 600px;">
		<div class="row">
			<div class="col-sm-4"></div>
    		<div class="col-sm-4 col-offset-4 " style="background-color: #44b544; border-radius: 5px; margin-top: 30px; margin-bottom: 30px;">
            <h3 style="text-align: center; color:white; font-size: 35px; ">Data Dokter </h3>
        </div>
    
    </div>
    <div class="row">
      <div class="col-sm-5"></div>
        <!-- <div class="col-sm-2 col-offset-5 " style="background-color: #44b544; border-radius: 5px; margin-top: 5px; margin-bottom: 30px;">
            <a href="tambah.php"><h5 style="text-align: center; color:white;  ">Tambah Data Pasien</h5></a>
        </div> -->
      
    </div>
 <!--  <h2 style="text-align: center; margin-bottom: 70px;">Data Pasien Terdaftar</h2> -->
                                                                                        
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>action</th>
		<th>kode_dokter</th>
		<th>nama dokter</th>
		<th>alamat</th>
		<th>spesialis</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($client as $row ) : ?>
      <tr>
       <td>
				<a href="ubahdokter.php?id=<?= $row["kode_dokter"]; ?>">ubah</a> |
				<a href="hapusdokter.php?id=<?= $row["kode_dokter"]; ?>">hapus</a>
			</td>
			<td><?= $row["kode_dokter"];  ?></td>
			<td><?= $row["nama_dokter"];  ?></td>
			<td><?= $row["alamat"]; ?></td>
			<td><?= $row["spesialis"];  ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</div>

	

	


</body>
</html>