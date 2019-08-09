<?php
session_start();

if (isset($_SESSION['id_admin']) && isset($_SESSION['pass_admin'])) {

 define('pamotan', true);
 echo "<script>document.location.href='admin/index.php?view=home';</script>";
  
}

elseif (isset($_SESSION['id_guru']) && isset($_SESSION['pass_guru'])) {
	# code...
	define('pamotan', true);
 	echo "<script>document.location.href='guru/index.php?view=home';</script>";
}

elseif (isset($_SESSION['id_siswa']) && isset($_SESSION['pass_siswa'])) {
	# code...
	define('pamotan', true);
 	echo "<script>document.location.href='siswa/index.php?view=home';</script>";
}

else {
  echo "<script>document.location.href='admin/landing.php?view=start';</script>";
}


?>