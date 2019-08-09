<?php
$q = "DELETE FROM `nilai` WHERE id_nilai='$_GET[id_nilai]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=nilai&hal=1';</script>";
	
?>
