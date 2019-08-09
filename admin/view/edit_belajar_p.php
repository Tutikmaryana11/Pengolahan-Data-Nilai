<?php
$id=$_GET ['id_kelas'];
$jurusan=$_POST['id_jurusan'];
$kelas=$_POST['nama_kelas'];

$cek="select nama_kelas from kelas where nama_kelas='".$kelas."' ";
$info=mysql_query($cek);

if (mysql_num_rows($info) > 0) {
	if ($info) {
		# code...
		echo "<script>alert('data sudah ada');</script>";
	echo "<script>document.location.href='index.php?view=belajar&status=berhasil'</script>";
	}
	# code...
	
}

else {
	$qery="update kelas SET nama_kelas='$kelas' where id_kelas='$id' ";
$nama_kelas=mysql_query($qery);
if ($nama_kelas) {
	echo "<script>alert('data berubah');</script>";

	echo "<script>document.location.href='index.php?view=belajar&status=berhasil'</script>";
	# code...
}
}

?>