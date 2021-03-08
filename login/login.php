<?php

$user = 'devs';
$pass = 'fvJcUJavnvGA';
session_start();
if($user == $_POST['user'] && $pass == $_POST['pass']){
	$_SESSION['user_db_stats_logado'] = true;
	echo "<script>window.location.href = 'https://mysql.withy.com.br/db_admin/';</script>";
}else{
	$_SESSION['user_db_stats_logado'] = false;
	echo "<script>alert('Login not Permited');window.location.href = 'https://mysql.withy.com.br/db_admin/login/';</script>";
}




?>
