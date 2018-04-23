<?php 



require ('functions.php');

if (isset($_POST['login'])) {
	$username=$_POST["user"];
	$password=$_POST["pass"];

	$result=mysqli_query($link, "SELECT * FROM login WHERE username='$username'");

	if (mysqli_num_rows($result)=== 1) {
		$row= mysqli_fetch_assoc($result);


	 if(password_verify($password, $row["password"])){

	 	header('Location: admin.php');
	 }
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




	
	<?php if (isset($error)) :?>
		<p>eror</p>
	<?php endif; ?>
	<div class="container">
		<!-- <div class="row">
			<div class="col-sm-4">
				
			</div> -->
			        <div class="card card-container ">
			            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
			            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" style="margin-top: 30px; text-align: center;" />
			            <p id="profile-name" class="profile-name-card"></p>
			            <form class="form-signin" action="" method="POST">
			                <span id="reauth-email" class="reauth-email"></span>
			                <input type="text" name="user"   class="form-control" placeholder="username" required autofocus>
			                <input type="password" name="pass"  class="form-control" placeholder="password" required>
			                <div id="remember" class="checkbox">
			                    <label>
			                        <input type="checkbox" value="remember-me"> Remember me
			                    </label>
			                </div>
			                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
			            </form><!-- /form -->
			            <a href="#" class="forgot-password">
			                Forgot the password?
			            </a>
			        </div><!-- /card-container -->
		<!-- </div> -->
    </div><!-- /container -->
	

</body>
</html>