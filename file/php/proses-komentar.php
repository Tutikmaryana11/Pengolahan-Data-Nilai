<?php

$q = "INSERT INTO komentar VALUES('','$_SESSION[loginEmail]','$_GET[kd]', now(), '$_POST[komentar]')";
$sql = mysql_query($q);

?>