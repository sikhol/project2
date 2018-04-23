<?php 
$link=mysqli_connect("localhost","root","","rumah sakit");

function query ($query) {

	global $link;

	$result= mysqli_query ($link, $query);

	$rows= [];


	// pengambilan data secara looping

	while( $row= mysqli_fetch_assoc($result) ){

		$rows[]= $row;
	}
	return $rows;
}
function hapusdokter($id){
	global $link;

	mysqli_query($link,"DELETE FROM dokter WHERE kode_dokter='$id'");
	return mysqli_affected_rows($link);
}

function hapuspasien($id){
	global $link;

	mysqli_query($link,"DELETE FROM pasien WHERE id_pasien='$id'");
	return mysqli_affected_rows($link);
}
function hapusruang($id){
	global $link;

	mysqli_query($link,"DELETE FROM ruang WHERE kd_ruang='$id'");
	return mysqli_affected_rows($link);
}

function ubahdokter($data){

	global $link;

	$id=$data["id"];
	$nama=htmlspecialchars($data["nama_dokter"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$spesialis=htmlspecialchars($data["spesialis"]);

	$query="UPDATE dokter SET
							nama_dokter='$nama',
							alamat='$alamat',
							spesialis='$spesialis'

							WHERE kode_dokter='$id'
							";

							mysqli_query($link,$query);

 	return mysqli_affected_rows($link);

}
function ubahpasien($data){

	global $link;

	$id=$data["id"];
	$kode_dokter=htmlspecialchars($data["kode_dokter"]);
	$kode_obat=htmlspecialchars($data["kode_obat"]);
	$nama=htmlspecialchars($data["nama_pasien"]);
	$ruang=htmlspecialchars($data["kd_ruang"]);

	$query="UPDATE pasien SET
							kode_dokter='$kode_dokter',
							kode_obat='$kode_obat',
							nama_pasien='$nama',
							kd_ruang='$ruang'

							WHERE id_pasien='$id'
							";

							mysqli_query($link,$query);

 	return mysqli_affected_rows($link);

}

function ubahruang($data){

	global $link;

	$id=$data["id"];
	
	$nama=htmlspecialchars($data["nama_ruang"]);
	$gedung=htmlspecialchars($data["nama_gedung"]);

	$query="UPDATE ruang SET
							
							nama_ruang='$nama',
							nama_gedung='$gedung'

							WHERE kd_ruang='$id'
							";

							mysqli_query($link,$query);

 	return mysqli_affected_rows($link);

}
// function tambah($data){

// 	global $link;
// 	$nama=htmlspecialchars($data["nama_dokter"]);
// 	$alamat=htmlspecialchars($data["alamat"]);
// 	$spesialis=htmlspecialchars($data["spesialis"]);

// 	$query="INSERT INTO dokter VALUES('kode_dokter','$nama','$alamat',$spesialis)";

// 	mysqli_query($link,$query);

// 	mysqli_affected_rows($link);


// }



function registrasi($data){

	global $link;


	// data kita simpen dalam variabel

	$username =strtolower(stripcslashes($data["username"]));

	$password = mysqli_real_escape_string($link, $data["password"]);
	$password2 = mysqli_real_escape_string($link ,$data["password2"]);

	// cek apakah username sudah ada atau belum

	$result=mysqli_query($link,"SELECT username FROM login WHERE username='$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script> alert('username sudah ada');

		</script>";
		return false;
		
	}


// cek konfirmasi password

	if ($password !== $password2) {
		echo "<script> alert('konfirmasi password tidak sesuai');

		</script>";
		return false;
	}

	// enkripsi password
	$password= password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru di tabase

	mysqli_query($link,"INSERT INTO login VALUES('','$username','$password')");

	return mysqli_affected_rows($link);



}


 ?>