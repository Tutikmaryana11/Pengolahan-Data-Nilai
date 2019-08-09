<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_siswa'];
        $nama = addslashes(strip_tags ($_POST['nama_siswa']));
        $alamat = addslashes(strip_tags ($_POST['alamat']));
        $jk = addslashes(strip_tags ($_POST['jenis_kelamin']));
        $agama = addslashes(strip_tags ($_POST['agama']));
        $kelas = addslashes(strip_tags ($_POST['id_kelas']));
        $jurusan = addslashes(strip_tags ($_POST['id_jurusan']));
        $nama_ortu = addslashes(strip_tags ($_POST['nama_ortu']));
        $email = addslashes(strip_tags ($_POST['email']));
        $pass = addslashes(strip_tags ($_POST['password']));

    $dup = mysql_query("SELECT email FROM siswa WHERE email='".$_POST['email']."'");

    if(mysql_num_rows($dup) > 0){

            if ($dup) {

            	$sql = "update siswa set nama_siswa = '$nama', alamat ='$alamat', jenis_kelamin = '$jk' , agama='$agama' , id_kelas='$kelas' , id_jurusan='$jurusan' , nama_ortu='$nama_ortu' , password = '$pass' , level='siswa'
            	where id_siswa = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data 1');</script>";
						echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
					}
            }


            else {
                
                    echo "<script>alert('email telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
                }
            }

	elseif(trim($nama) && trim($pass) && trim($email) == "&nbsp;") {
		echo "<script>alert('Semua harus diisi');</script>";
		echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
	}
	
	else {
				$sql = "update siswa set email = '$email' where id_siswa = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data 2');</script>";
						echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
					}
			}
	
?>