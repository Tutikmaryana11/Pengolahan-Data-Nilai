<?php
$q = "DELETE FROM `admin` WHERE id_admin='$_GET[id_admin]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
	
?>
