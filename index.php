<?php

session_start();

// força o login caso não exista sessão
if($_SESSION['user_db_stats_logado'] != true){
	echo "<script>window.location.href='https://mysql.withy.com.br/db_admin/login/';</script>";
}

include('config/routes.php');

include('config/constants.php');

include('app/Helpers/helper.php');

include('app/Model/Model.php');

include('static/rules.php');

include('static/core.php');

?>
