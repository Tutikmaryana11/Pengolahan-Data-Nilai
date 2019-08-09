<?php 

require_once("../../../config/connect.php");

$id = trim(strip_tags($_GET['id']));

$perintah = "select * from rombel r 
join kelas_rombel kr on kr.id_kelas = r.id_kelas
join siswa s on s.id_rombel = r.id_rombel
where r.id_rombel = '$id'";

$query = mysql_query($perintah);

?>

<select name="id_siswa" id="siswaku" class="form-control">

<?php while($data = mysql_fetch_array($query)): ?>
	<option value="<?php echo $data['id_siswa']; ?>"><?php echo $data['nama_siswa']; ?></option>
<?php endwhile; ?>

</select>


