<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_nilai';
$konek = mysql_connect($server, $user, $pass);

if(!$konek) {
	echo "Gagal konek".mysql_error();
}

mysql_select_db($dbname);


?>