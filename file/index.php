<?php
session_start();

if (isset($_SESSION['id_karyawan'])) {

  define('apotek', true);
 echo "<script>document.location.href='../admin/index.php?view=home';</script>";
  
}

else {
  echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
}


?>