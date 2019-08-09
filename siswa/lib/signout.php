<?php

//unset guru
unset($_SESSION['id_guru']);
unset($_SESSION['email_guru']);
unset($_SESSION['pass_guru']);

echo "<script>document.location.href='../admin/landing.php';</script>";
 
?>
