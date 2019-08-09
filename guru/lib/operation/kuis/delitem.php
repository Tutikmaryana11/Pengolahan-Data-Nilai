<?php
$q = "DELETE FROM `kuis_detail` 
WHERE id_kuis='$_GET[id_kuis]' and id_pertanyaan='$_GET[id_pertanyaan]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
	
?>
