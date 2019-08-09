<?php
$q = "DELETE FROM `ayah_kandung` WHERE siswa_id='$_GET[siswa_id]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=ayah&hal=1';</script>";
	
?>
