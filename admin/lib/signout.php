<?php
//unset admin
unset($_SESSION['id_admin']);
unset($_SESSION['email_admin']);
unset($_SESSION['pass_admin']);

echo "<script>document.location.href='landing.php';</script>";
 
?>
