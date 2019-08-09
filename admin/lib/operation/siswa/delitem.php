<?php
$q = "DELETE FROM `siswa` WHERE id_siswa='$_GET[id_siswa]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
	
?>
