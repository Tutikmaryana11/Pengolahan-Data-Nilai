<div class="title">

	<h3>barang</h3>
	<a href="?p=tambahbarang" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Barang</a>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Jenis</th>
		<th>Supplier</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT kdbarang, nmbarang, nmjenis, nmsupplier, harga, stok FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier ORDER BY kdbarang ASC";
$sql = mysql_query($q);
$no = 1;
while($res = mysql_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td><?php echo $res[4]; ?></td>
		<td><?php echo $res[5]; ?></td>
		<td align="center">
			<a href="?p=hapusbarang&kd=<?php echo $res[0]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
			<a href="?p=editbarang&kd=<?php echo $res[0]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>