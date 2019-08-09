<?php
$id_guru=$_GET['id_guru'];
$delete=mysql_query("delete from guru where id_guru='$id_guru'");
if ($delete) {
	# code...
	echo "<script>alert('data berhasil di delete')</script>";
	echo "<script>document.location.href='index.php?view=belajar_guru&status=terhapus'</script>";
}
?>