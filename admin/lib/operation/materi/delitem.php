<?php
$q = "DELETE FROM `materi` WHERE id_materi='$_GET[id_materi]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=materi&hal=1';</script>";
	
?>
