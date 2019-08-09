<?php
// print_r($_POST);
$id_kelas= addslashes(strip_tags ($_POST['id_kelas']));
$siswa = $_POST['siswa'];
// echo '<pre>';

	// print_r($siswa);
	// echo '</pre>';
	// exit();

foreach ($siswa as $value) {
	
	// exit();
	$id_siswa= addslashes(strip_tags ($value['id_siswa']));
	$status_naik= addslashes(strip_tags ($value['status_naik']));
	// echo '<pre>';
	// print_r($value['id_siswa']);
	// echo '</pre>';
	// exit();
	$tgl=date('Y');
	$a="update tahun_kelas set flag_aktif='N' where id_siswa='$id_siswa'";
	$b=mysql_query($a);

	$c="update siswa set id_kelas='$id_kelas' where id_siswa='$id_siswa'";
	$d=mysql_query($c);

	$qry = "insert into tahun_kelas(id_kelas,id_siswa,tahun,flag_aktif) values ('$id_kelas', '$id_siswa', '$tgl', '$status_naik')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                    //kayane masuk kene ki sing mengajar ki

                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=naik_kelas&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=naik_kelas&hal=1';</script>";
                }
}
?>