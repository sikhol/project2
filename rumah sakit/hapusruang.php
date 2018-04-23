<?php 
require 'functions.php';

$id = $_GET["id"];
if (hapusruang($id) > 0 ) {
	echo "
		<script>

			alert('data berhasil dihapus');
			document.location.href ='ruang.php';


		</script>



		";
	}else{
		echo "<script>

			alert('data gagal dihapus');

		</script>";
	}


 ?>