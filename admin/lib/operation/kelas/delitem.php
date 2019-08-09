<?php
$q = "DELETE FROM `kelas_rombel` WHERE id_kelas='$_GET[id_kelas]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
	
?>
