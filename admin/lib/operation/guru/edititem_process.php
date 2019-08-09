<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_guru'];
        $nama = addslashes(strip_tags ($_POST['nama_guru']));
        $alamat = addslashes(strip_tags ($_POST['alamat']));
        $jk = addslashes(strip_tags ($_POST['jenis_kelamin']));
        $agama = addslashes(strip_tags ($_POST['agama']));
        $email = addslashes(strip_tags ($_POST['email']));
        $pass = addslashes(strip_tags ($_POST['password']));
        $id_m = addslashes(strip_tags ($_POST['id_mapel']));
        $id_mengajar = $_GET['id_mengajar'];

    $dup = mysql_query("SELECT email FROM guru WHERE email='".$_POST['email']."'");

    if(mysql_num_rows($dup) > 0){

            if ($dup) {

            	$sql = "update guru set  nama_guru = '$nama', alamat = '$alamat', jenis_kelamin = '$jk', agama = '$agama', password = '$pass', id_mapel ='$id_m', level='guru' where id_guru = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {

                    $qry3 = "update mengajar set id_mapel = '$id_m' where id_mengajar = '$id_mengajar'";
                    $qry4 = mysql_query($qry3);

	                    if ($qry4) {
	                        # code...
	                        echo "<script>alert('Data was changed');</script>";
	                        echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
	                    }
	                    else {
	                    echo "<script>alert('Regitration failed atas');</script>";
	                    echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
	                }
                                    
                }

            }


            else {
                
                    echo "<script>alert('email telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
                }
            }

	elseif(trim($nama) && trim($pass) && trim($email) == "&nbsp;") {
		echo "<script>alert('Semua harus diisi');</script>";
		echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
	}
	
	else {
				$sql = "update guru set email = '$email' where id_guru = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {

                    $qry3 = "update mengajar set id_mapel = '$id_m' where id_mengajar = '$id_mengajar')";
                    $qry4 = mysql_query($qry3);

                    if ($qry4) {
                        # code...
                        echo "<script>alert('Data was changed');</script>";
                        echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
                    }
                    else {
                    echo "<script>alert('Regitration failed bawah');</script>";
                    echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
                }
                                    
                }

				echo "<script>alert('Failed to change data');</script>";
				echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
			}
	
?>