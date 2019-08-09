<?php
$q = "DELETE FROM `nilai_tugas` WHERE id_nilai_tugas='$_GET[id_nilai_tugas]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql)
echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
	
?>
