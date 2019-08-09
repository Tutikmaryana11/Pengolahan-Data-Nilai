<?php
require '../../config/connect.php';

$term = trim(strip_tags($_GET['term']));
 //$term = 'AHS016-002';

$qstring = "SELECT id_kategori, nama_kategori FROM kategori WHERE id_kategori LIKE '".$term."%'";
//query database untuk mengecek tabel anime 
$result = mysql_query($qstring);
 
while ($row = mysql_fetch_array($result))
{
    $row['value']=htmlentities(stripslashes($row['id_kategori'].'--'.$row['nama_kategori']));
    $row['id']=(int)$row['id_kategori'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>