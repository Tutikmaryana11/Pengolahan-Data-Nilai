<?php
require '../../config/connect.php';

$term = trim(strip_tags($_GET['term']));
 //$term = 'AHS016-002';

$qstring = "SELECT id_proyek, nama_proyek FROM proyek WHERE id_proyek LIKE '".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 
while ($row = mysql_fetch_array($result))
{
    $row['value']=htmlentities(stripslashes($row['id_proyek'].'--'.$row['nama_proyek']));
    $row['id']=(int)$row['id_proyek'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>