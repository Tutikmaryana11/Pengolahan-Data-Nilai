<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_admin'];
        $nama = addslashes(strip_tags ($_POST['nama']));
        $email = addslashes(strip_tags ($_POST['email']));
        $pass = addslashes(strip_tags ($_POST['password']));

    $dup = mysql_query("SELECT email FROM admin WHERE email='".$_POST['email']."'");

    if(mysql_num_rows($dup) > 0){

            if ($dup) {

            	$sql = "update admin set password = '$pass', nama = '$nama' where id_admin = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data');</script>";
						echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
					}
            }


            else {
                
                    echo "<script>alert('email telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
                }
            }

	elseif(trim($nama) && trim($pass) && trim($email) == "&nbsp;") {
		echo "<script>alert('Semua harus diisi');</script>";
		echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
	}
	
	else {
				$sql = "update admin set email = '$email' where id_admin = '$id'";
				$qry = mysql_query($sql);


					if ($qry) {
					echo "<script>alert('Data was changed');</script>";
					echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
					}
					else {
						echo "<script>alert('Failed to change data');</script>";
						echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
					}

				echo "<script>alert('Failed to change data');</script>";
				echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
			}
	
?>