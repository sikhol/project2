<?php 
session_start();

session_destroy();
session_unset();
$_SESSION=[];

setcookie('id','', time() -3600);
setcookie('keys','', time()- 3600);

header('Location: utama.php');


 ?>