
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data Ibu.xls");
 ?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead >
          <tr>
            <th>No</th>
            <th>ID ibu</th>
            <th>Nama</th>
            <th>Tahun Lahir</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Penghasilan</th>
            <th>NIK</th>
            <th  align="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          mysql_connect("localhost", "root", "");
 mysql_select_db("db_nilai");
          $q = "SELECT * FROM ibu_kandung ORDER BY ibu_id ASC";
          $sql = mysql_query($q);
          $no = 1;
          while($res = mysql_fetch_array($sql)){?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $res['ibu_id']; ?></td>
              <td><?php echo $res['ibu_nama']; ?></td>
              <td><?php echo $res['ibu_tahun_lahir']; ?></td>
              <td><?php echo $res['ibu_jenjang_pendidikan']; ?></td>
              <td><?php echo $res['ibu_pekerjaan']; ?></td>
              <td><?php echo $res['ibu_penghasilan']; ?></td>
              <td><?php echo $res['ibu_nik']; ?></td>
              <!-- <td><?php echo $res[7]; ?></td> -->
              <!-- <td><?php echo $res[9]; ?></td> -->
              <td>
                <a href="index.php?view=edit_siswa&id_siswa=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                &nbsp;&nbsp;
                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_ibu&ibu_id=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

              </td>

            </tr>
            <?php
            $no++;
          }
          ?>
        </tbody>
      </table>