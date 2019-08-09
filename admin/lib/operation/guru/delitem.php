<?php
$q = "DELETE FROM `guru` WHERE id_guru='$_GET[id_guru]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
	
?>
