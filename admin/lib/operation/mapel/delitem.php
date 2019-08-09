<?php
$q = "DELETE FROM `mapel` WHERE id_mapel='$_GET[id_mapel]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
	
?>
