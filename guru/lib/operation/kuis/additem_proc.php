<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    include '../../../config/connect.php';
}


//queri simpan ke database
if($_POST['aksi']=='simpan'){
		//error_reporting(0);
		$id = addslashes(strip_tags ($_POST['id_kuis']));
        $id_map = addslashes(strip_tags ($_POST['id_mapel']));
        $id_g = addslashes(strip_tags ($_POST['id_guru']));
        $id_m = addslashes(strip_tags ($_POST['id_mengajar']));
        $nama_kuis = addslashes(strip_tags ($_POST['nama_kuis']));
        $waktu = addslashes(strip_tags ($_POST['expired']));
        //$tanya = addslashes(strip_tags ($_POST['pertanyaan']));
        //$score = addslashes(strip_tags ($_POST['score']));


			$a = mysql_query("insert into kuis values ('$id', '$nama_kuis', '$id_g','$id_m','$id_map','0','$waktu')");	

			if($a){
				for ($i=0; $i < $_SESSION['index']; $i++) { 
					$tanya = $_SESSION['pertanyaan'][$i];
					$jwba = $_SESSION['jawabana'][$i];
					$jwbb = $_SESSION['jawabanb'][$i];
					$jwbc = $_SESSION['jawabanc'][$i];
					$jwbd = $_SESSION['jawaband'][$i];
					$jwbe = $_SESSION['jawabane'][$i];
					$kunci = $_SESSION['kunci'][$i];
					$q_detail = "insert into kuis_detail values ('','$id', 
								'$tanya',
								'$jwba',
								'$jwbb',
								'$jwbc',
								'$jwbd',
								'$jwbe',
								'$kunci'
								)";
					
					$sql_detail = mysql_query($q_detail);
					}

				unset($_SESSION['index']);
				unset($_SESSION['pertanyaan']);
				unset($_SESSION['jawabana']);
				unset($_SESSION['jawabanb']);
				unset($_SESSION['jawabanc']);
				unset($_SESSION['jawaband']);
				unset($_SESSION['jawabane']);
				unset($_SESSION['kunci']);
			}
			echo "<script>alert('Data was added');</script>";
            echo "<script>document.location.href='index.php?view=soal_kuis&hal=1';</script>";

	}


elseif($_POST['aksi']=='add'){
	if (!isset($_SESSION['index'])) {
		# code...
		$_SESSION['index']=0;
	}
	
	$_SESSION['no'] = $_SESSION['index']+1;
	$_SESSION['pertanyaan'][$_SESSION['index']] = $_POST['pertanyaan'];
	$_SESSION['jawabana'][$_SESSION['index']] = $_POST['jawabana'];
	$_SESSION['jawabanb'][$_SESSION['index']] = $_POST['jawabanb'];
	$_SESSION['jawabanc'][$_SESSION['index']] = $_POST['jawabanc'];
	$_SESSION['jawaband'][$_SESSION['index']] = $_POST['jawaband'];
	$_SESSION['jawabane'][$_SESSION['index']] = $_POST['jawabane'];
	$_SESSION['kunci'][$_SESSION['index']] = $_POST['kunci'];

	$_SESSION['index']++;

	echo 'Success';
	
}

elseif($_POST['aksi']=='show'){
	//error_reporting(0);	
	$data = array();

			for ($i=0; $i < $_SESSION['index']; $i++) { 

				$data[] = array('pertanyaan' => $_SESSION['pertanyaan'][$i],
						'jawabana' => $_SESSION['jawabana'][$i],
						'jawabanb' => $_SESSION['jawabanb'][$i],
						'jawabanc' => $_SESSION['jawabanc'][$i],
						'jawaband' => $_SESSION['jawaband'][$i],
						'jawabane' => $_SESSION['jawabane'][$i],
						'kunci' => $_SESSION['kunci'][$i],
						'index' => $i+1						
			);
		}
	echo json_encode($data);
}
?>