<?php
$q = "DELETE FROM `ibu_kandung` WHERE ibu_kandung='$_GET[ibu_kandung]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=ibu&hal=1';</script>";
	
?>
