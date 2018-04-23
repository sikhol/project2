<?php
require 'functions.php';

if (isset($_POST["submit"])) {
	if (registrasi($_POST)>0) {
		echo "<script> alert('user baru telah ditambahkan')</script>";
		
		header('Location: index.php');
		echo "<script> alert('silahkan login terlebih dahulu')</script>";
	}else{
		echo mysqli_error($link);
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

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


<body style="background-image: url(image/dokter.jpg);">




	

	<div class="container">
		
		<!-- <div class="row">
			<div class="col-sm-4">
				
			</div> -->
			        <div class="card card-container ">

			            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
			            <h2>Pendaftaran Admin</h2>
			            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" style="margin-top: 30px; text-align: center;" />
			            <?php if (isset($error)) :?>
							<p style="color:red; font-style: italic;">username/password anda salah</p>
						<?php endif; ?>
			            <p id="profile-name" class="profile-name-card"></p>
			            <form class="form-signin" action="" method="POST">
			                <span id="reauth-email" class="reauth-email"></span>
			                <input type="text" name="username"   class="form-control" placeholder="username" required autofocus>
			                <input type="password" name="password"  class="form-control" placeholder="password" required>
			                <input type="password2" name="password2"  class="form-control" placeholder="konfirmasi password" required>
			                
			                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Daftar</button>
			            </form><!-- /form -->
			            <a href="#" class="forgot-password">
			                Forgot the password?
			            </a>
			        </div><!-- /card-container -->
		<!-- </div> -->
    </div><!-- /container -->
	

</body>
</html>





