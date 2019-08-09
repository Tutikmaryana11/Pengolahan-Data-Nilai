
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data Siswa.xls");
 ?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead >
          <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>J.Kelamin</th>
            <th>Agama</th>
            <th>Email</th>
            <th  align="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
             mysql_connect("localhost", "root", "");
 mysql_select_db("db_nilai");
          $q = "SELECT * FROM siswa ORDER BY id_siswa ASC";
          $sql = mysql_query($q);
          $no = 1;
          while($res = mysql_fetch_array($sql)){?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $res['id_siswa']; ?></td>
              <td><?php echo $res['nama_siswa']; ?></td>
              <td><?php echo $res['alamat']; ?></td>
              <td><?php if ($res['jenis_kelamin']=='L') {
                echo "Laki-laki";
              } else {
                echo "Perempuan";
              }?></td>
              <td><?php echo $res['agama']; ?></td>
              <td><?php echo $res['email']; ?></td>
              <td>
                <a href="index.php?view=edit_siswa&id_siswa=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                &nbsp;&nbsp;
                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_siswa&id_siswa=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

              </td>

            </tr>
            <?php
            $no++;
          }
          ?>
        </tbody>
      </table>