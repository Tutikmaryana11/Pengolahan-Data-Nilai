<?php


		$id = addslashes(strip_tags ($_POST['id_berita']));
        $nama = addslashes(strip_tags ($_POST['nama_berita']));
        $isi = addslashes(strip_tags ($_POST['isi_berita']));
        $guru = addslashes(strip_tags ($_POST['id_guru']));

				$sql = "update berita set nama_berita = '$nama', isi_berita ='$isi', id_guru ='$guru' where id_berita = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=berita&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data');</script>";
						echo "<script>document.location.href='index.php?view=berita&hal=1';</script>";
					}
				
			
?>