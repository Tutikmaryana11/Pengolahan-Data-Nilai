<?php
$q = "DELETE FROM `berita` WHERE id_berita='$_GET[id_berita]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=berita&hal=1';</script>";
	
?>
