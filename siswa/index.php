<?php
session_start();

if (isset($_SESSION['id_siswa']) && isset($_SESSION['email'])) {

	define('pamotan', true);

	require_once 'config/connect.php';
	require_once 'inc/page.php';
}

else {
	echo "<script>document.location.href='../admin/landing.php';</script>";
}


?>