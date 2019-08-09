<?php
session_start();

if (isset($_SESSION['id_guru']) && isset($_SESSION['pass_guru'])) {

	define('pamotan', true);

	require_once 'config/connect.php';
	require_once 'inc/page.php';
}

else {
	echo "<script>document.location.href='../admin/landing.php';</script>";
}


?>