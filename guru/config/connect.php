<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_nilai';
$tanggal = date("d-m-Y H:i:s");
$konek = mysql_connect($server, $user, $pass);

if(!$konek) {
	echo "Gagal konek".mysql_error();
}

mysql_select_db($dbname);


?>