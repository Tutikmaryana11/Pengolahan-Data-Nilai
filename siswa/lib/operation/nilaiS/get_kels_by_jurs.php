<?php 

require_once("../../../config/connect.php");

$id = trim(strip_tags($_GET['id']));

$perintah = "select * from kelas
where id_jurusan = '$id'";

$query = mysql_query($perintah);

?>

<select name="kelas" id="kelasku" class="form-control">

<?php while($data = mysql_fetch_array($query)): ?>
	<option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['nama_kelas']; ?></option>
<?php endwhile; ?>

</select>


