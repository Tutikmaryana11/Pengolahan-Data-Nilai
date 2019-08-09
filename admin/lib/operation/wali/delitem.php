<?php
$q = "DELETE FROM `wali_siswa` WHERE wali_id='$_GET[wali_id]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=wali&hal=1';</script>";
	
?>
