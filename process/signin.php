<?php
session_start();

include "../conf/db.php";

$email = addslashes(strip_tags($_POST['email']));
$pass = $_POST['password'];
$level = addslashes(strip_tags($_POST['level']));

if ($level=='admin') {
	# code...
	$sql = "select * from operator where email = '$email' && level ='1'";
	$qry = mysql_query($sql);
	$data = mysql_fetch_array($qry);

			if ($pass == $data['password'])
			{

			    echo "<script>alert('Selamat Datang Admin');</script>";
				echo "<script>document.location.href='../admin/index.php?view=home';</script>"; 

				$_SESSION['id_admin'] = $data['id_operator'];
				$_SESSION['email_admin'] = $data['email'];
	    		$_SESSION['pass_admin'] = $data['password'];
	    		
			}

			else {
				echo "<script>alert('Gagal login');</script>";
				echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
			}
	}

elseif ($level=='guru') {
	# code...
	$sql = "select * from operator where email = '$email' && level ='2'";
	$qry = mysql_query($sql);
	$data = mysql_fetch_array($qry);

			if ($pass == $data['password'])
			{

			    echo "<script>alert('Selamat Datang GURU');</script>";
				echo "<script>document.location.href='../guru/index.php?view=home_guru';</script>"; 

				$_SESSION['id_guru'] = $data['id_operator'];
				$_SESSION['email_guru'] = $data['email'];
	    		$_SESSION['pass_guru'] = $data['password'];
	    		
			}

			else {
				echo "<script>alert('Gagal login');</script>";
				echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
			}
}

elseif ($level=='siswa') {
	# code...
	$sql = "select * from siswa where email = '$email' && id_siswa ='$pass'";
	$qry = mysql_query($sql);
	echo $sql;
	$data = mysql_fetch_array($qry);

			if ($pass == $data['id_siswa'])
			{

			    echo "<script>alert('Selamat Datang Siswa');</script>";
				echo "<script>document.location.href='../siswa/index.php?view=home';</script>"; 

				$_SESSION['id_siswa'] = $data['id_siswa'];
				$_SESSION['email'] = $data['email'];
	    		// $_SESSION['pass_guru'] = $data['password'];
	    		
			}

			else {
				echo "<script>alert('Gagal login');</script>";
				echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
			}
}



// elseif ($level=='siswa') {
// 	# code...
// 	$sql = "select * from siswa where email = '$email' && level ='siswa'";
// 	$qry = mysql_query($sql);
// 	$data = mysql_fetch_array($qry);

// 			if ($pass == $data['password'])
// 			{

// 			    echo "<script>alert('Selamat Datang Siswa');</script>";
// 				echo "<script>document.location.href='../siswa/index.php?view=home_siswa';</script>"; 

// 				$_SESSION['id_siswa'] = $data['id_siswa'];
// 				$_SESSION['email_siswa'] = $data['email'];
// 	    		$_SESSION['pass_siswa'] = $data['password'];
// 	    		$_SESSION['id_kelas'] = $data['id_kelas'];
	    		
// 			}

// 			else {
// 				echo "<script>alert('Gagal login');</script>";
// 				echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
// 			}
// }
else {
				echo "<script>alert('Gagal login');</script>";
				echo "<script>document.location.href='../admin/landing.php?view=start';</script>";
	}

?>