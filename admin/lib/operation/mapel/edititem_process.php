<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_mapel'];
        $nama = addslashes(strip_tags ($_POST['nama_mapel']));

    $dup = mysql_query("SELECT nama_mapel FROM mapel WHERE nama_mapel='".$_POST['nama_mapel']."'");

    if(mysql_num_rows($dup) > 0){

            if ($dup) {
                
                    echo "<script>alert('Nama Mata Kuliah telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
                }
            }

	elseif(trim($nama) == "&nbsp;") {
		echo "<script>alert('Semua harus diisi');</script>";
		echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
	}
	else {
		$sql = "update mapel set nama_mapel = '$nama' where id_mapel = '$id'";
		$qry = mysql_query($sql);


			if ($qry) {
			echo "<script>alert('Data Berhasil Di Ubah');</script>";
			echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
			}
			else {
				echo "<script>alert('Data Gagal Diubah');</script>";
				echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
			}
		
	}
?>