<?php
$id_guru=$_POST['id_guru'];
$nama_guru=$_POST['nama_guru'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$password=$_POST['password'];
$id_mapel=$_POST['id_mapel'];
$id_mengajar=$_POST['id_mengajar'];

$cekemail=mysql_query("select email from guru where email='".$email."'");
if (mysql_num_rows($cekemail) >0) {
	# code...
	if ($cekemail) {
		# code...
		echo "<script>alert('email sudah digunakan')</script>";
		echo "<script>document.location.href='index.php?view=belajar_guru&status=duplikasi'</script>";
	}
}

else {

$insertguru=mysql_query("insert into guru values ('$id_guru','$nama_guru','$alamat','$jenis_kelamin','$agama','$email','$password','$id_mapel','guru')");
	
	if ($insertguru) {
		# code...
		$insertdetail=mysql_query("insert into mengajar values ('$id_mengajar','$id_mapel','$id_guru')");
		
		if ($insertdetail) {
			# code...
			echo "<script>alert('data sudah masuk')</script>";
			echo "<script>document.location.href='index.php?view=belajar_guru&status=datasudahada'</script>";

		}
		else{

			echo "<script>alert('data gagal masukk tengah')</script>";
			echo "<script>document.location.href='index.php?view=belajar_guru&status=datagagal'</script>";
		}

	}

	else{
		echo "<script>alert('data gagal masukk bawah')</script>";
		echo "<script>document.location.href='index.php?view=belajar_guru&status=datagagal'</script>";
	}
}
?>