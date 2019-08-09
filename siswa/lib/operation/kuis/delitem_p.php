<?php
$q = "DELETE FROM `kuis` 
WHERE id_kuis='$_GET[id_kuis]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=view_kuis&hal=1';</script>";
	
?>
