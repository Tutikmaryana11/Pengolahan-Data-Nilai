<?php
$q = "DELETE FROM `tugas` WHERE id_tugas='$_GET[id_tugas]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=tugas&hal=1';</script>";
	
?>
