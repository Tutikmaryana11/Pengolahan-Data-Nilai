<?php
require '../../config/connect.php';

$term = trim(strip_tags($_GET['term']));
 //$term = 'AHS016-002';

$qstring = "SELECT mengajar.id_mengajar, nama_guru FROM guru 
JOIN mengajar ON mengajar.id_guru = guru.id_guru
WHERE mengajar.id_mengajar LIKE '".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 
while ($row = mysql_fetch_array($result))
{
    $row['value']=htmlentities(stripslashes($row['id_mengajar'].'--'.$row['nama_guru']));
    $row['id']=(int)$row['id_mengajar'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>