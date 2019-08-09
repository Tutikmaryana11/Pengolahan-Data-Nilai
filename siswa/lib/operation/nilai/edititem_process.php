<?php

	defined('palimo') or die('Tidak Boleh akses Langsung');


		$id = addslashes(strip_tags ($_POST['id_client']));
        $nama_ceo = addslashes(strip_tags ($_POST['nama_ceo']));
        $nama_client = addslashes(strip_tags ($_POST['nama_client']));
        $uname = addslashes(strip_tags ($_POST['username']));
        $pass = addslashes(strip_tags ($_POST['password']));
        $alamat = addslashes(strip_tags ($_POST['alamat']));
        $nope = addslashes(strip_tags ($_POST['no_hp']));
        $jperusahaan = addslashes(strip_tags ($_POST['jenis']));




			if(trim($nama_ceo) && trim($nama_client) && trim($uname) && trim($pass) && trim($alamat) && trim($jperusahaan) == "&nbsp;") {
				echo "<script>alert('Semua harus diisi');</script>";
				echo "<script>document.location.href='index.php?view=client&hal=1';</script>";
			}
			else {
				$sql = "update client set nama_ceo = '$nama_ceo', nama_client ='$nama_client', username ='$uname', password='$pass',
						alamat='$alamat', no_hp ='$nope', jenis='$jperusahaan' where id_client = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=client&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data');</script>";
						echo "<script>document.location.href='index.php?view=client&hal=1';</script>";
					}
				
			}
?>