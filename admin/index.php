<?php
session_start();

if (isset($_SESSION['id_admin']) && isset($_SESSION['pass_admin'])) {

	define('pamotan', true);

	require_once 'config/connect.php';
	require_once 'inc/page.php';
}

else {
	echo "<script>document.location.href='landing.php';</script>";
}


?>