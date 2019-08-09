<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_kelas'];
        $nama = addslashes(strip_tags ($_POST['nama_kelas']));
        // $id_j = addslashes(strip_tags ($_POST['id_jurusan']));

	    $dup = mysql_query("SELECT nama_kelas FROM kelas_rombel WHERE nama_kelas='".$_POST['nama_kelas']."'");

	    if(mysql_num_rows($dup) > 0){

	            if ($dup) {
	                
	                    echo "<script>alert('Nama Kelas telah digunakan');</script>";
	                    echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
	                }
	            }

		elseif(trim($nama) && trim($nama) == "&nbsp;") {
			echo "<script>alert('Semua harus diisi');</script>";
			echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
		}
		else {
			$sql = "update kelas_rombel set nama_kelas = '$nama' where id_kelas = '$id'";
			$qry = mysql_query($sql);


				if ($qry) {
				echo "<script>alert('Data was changed');</script>";
				echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
				}
				else {
					echo "<script>alert('Failed to change data');</script>";
					echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
				}
			
		}
?>