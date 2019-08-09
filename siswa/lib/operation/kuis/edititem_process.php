<?php

	defined('pamotan') or die('Tidak Boleh akses Langsung');


		$id = $_GET['id_kuis'];
        //$id_d = $_GET['id_kuis_detail'];
        $id_g = addslashes(strip_tags ($_POST['id_guru']));
        $id_m = addslashes(strip_tags ($_POST['id_mengajar']));
        $nama_kuis = addslashes(strip_tags ($_POST['nama_kuis']));
        $waktu = addslashes(strip_tags ($_POST['expired']));



        $tanya = addslashes(strip_tags ($_POST['pertanyaan']));
        $jawabana = addslashes(strip_tags ($_POST['jawabana']));
        $jawabanb = addslashes(strip_tags ($_POST['jawabanb']));
        $jawabanc = addslashes(strip_tags ($_POST['jawabanc']));
        $jawaband = addslashes(strip_tags ($_POST['jawaband']));
        $jawabane = addslashes(strip_tags ($_POST['jawabane']));
        $kunci = addslashes(strip_tags ($_POST['kunci']));

   

	if(trim($nama_kuis) && trim($tanya) && trim($jawabana) && trim($jawabanb) && trim($jawabanc) && trim($jawaband) && trim($jawabane) && trim($kunci) == "&nbsp;") {
		echo "<script>alert('Semua harus diisi');</script>";
		echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
	}
	
	else {
				$sql = "update kuis set nama_kuis = '$nama_kuis', expired='$waktu' where id_kuis = '$id'";
				$qry = mysql_query($sql);
				$id_pertanyaan =$_GET['id_pertanyaan'];


					if ($qry) {
						$qry1 = "update kuis_detail set 
						pertanyaan = '$tanya', 
						jawabana ='$jawabana',
						jawabanb ='$jawabanb',
						jawabanc ='$jawabanc',
						jawaband ='$jawaband',
						jawabane ='$jawabane',
						kunci = '$kunci'
						where id_pertanyaan = '$id_pertanyaan' ";
	                    $qry3 = mysql_query($qry1);

	                    if ($qry3) {
	                        # code...
	                            echo "<script>alert('Data was changed both');</script>";
	                            echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
	                        }
	                        else {
	                            echo "<script>alert('Regitration failed 1');</script>";
	                            echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
	                        }
	                    }

		                else {
		                    echo "<script>alert('Regitration failed 2');</script>";
		                    echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
		                }

				echo "<script>alert('Failed to change data');</script>";
				echo "<script>document.location.href='index.php?view=view_soal_kuis&hal=1';</script>";
			}
	
?>