<?php
error_reporting(0);
$stat=1;
		$code = (int) $_POST['code'];
		$rcode = (int) $_POST['rcode'];
			
		if ($code != $rcode) {
			echo "<script>alert('Wrong code, Try Again!');</script>";
			echo "<script>document.location.href='index.php';</script>";
		}
		else {


		

	if (isset($_POST['daftar'])) {
	# code...
	$email = addslashes(strip_tags ($_POST['email']));
	$nama = addslashes(strip_tags ($_POST['nama']));
	$nicknama = addslashes(strip_tags ($_POST['nicknama']));
	$notelp = addslashes(strip_tags ($_POST['notelp']));
	$alamat = addslashes(strip_tags ($_POST['alamat']));

	$pwd = sha1($_POST['password']);
	$qd = "INSERT INTO user VALUES ('$email','$pwd','$nama','$nicknama','$notelp','$alamat')";
	$sqld = mysql_query($qd);
	if($sqld){ ?>

	<script type="text/javascript">
	alert("Registration Done, Click OK to Sign In");
	</script>

	<?php
	}
}
}



if(isset($_POST['masuk'])){
	$pwl = sha1($_POST['password']);
	$ql = "SELECT * FROM karyawan WHERE username='$_POST[username]' AND password='$pwl'";
	$sql = mysql_query($ql);
	$row = mysql_num_rows($sql);
	if($row > 0){
		$r = mysql_fetch_array($sql);
		$_SESSION['loginUsername'] = $r[5];
		$_SESSION['loginNama'] = $r[6];
	}
}
?>