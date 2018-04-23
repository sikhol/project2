<?php 
require 'functions.php';

$id = $_GET["id"];
if (hapuspasien($id) > 0 ) {
	echo "
		<script>

			alert('data berhasil dihapus');
			document.location.href ='pasien.php';


		</script>



		";
	}else{
		echo "<script>

			alert('data gagal dihapus');

		</script>";
	}


 ?>