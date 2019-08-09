     <?php
     function id_kumpul(){
      $id_guru=$_SESSION['id_guru'];

      $q = "SELECT * FROM kumpul_tugas
      JOIN tugas on kumpul_tugas.id_tugas=tugas.id_tugas
      JOIN mengajar on tugas.id_mengajar=mengajar.id_mengajar
      JOIN guru on mengajar.id_guru=guru.id_guru
      JOIN siswa on kumpul_tugas.id_siswa=siswa.id_siswa
      where guru.id_guru='$id_guru'
      ORDER BY kumpul_tugas.id_kumpul ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        if ($res['status']=='') {
             
          echo "<option value='".$res['id_kumpul']."'>".$res['id_kumpul']." -- ".$res['id_tugas']." -- ".$res['nama_siswa']."</option>";
        
        }else{

        }

      }
    }

    ?>

    <?php include_once 'lib/operation/tugas/auto_id.php';?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><span class="fa fa-file"></span> Nilai Tugas Siswa</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12">
          <div>
            <ol class="breadcrumb">
              <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php?view=home">Dashboard</a>
              </li>
              <li class="active">
                <span class="fa fa-file"></span> Nilai Tugas Siswa
              </li>
            </ol>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="fa fa-file"></span> Nilai Tugas Siswa
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  <form role="form" method="post" action="index.php?view=add_nilai_tugas_s">
                    <div class="form-group">
                      <label>ID Nilai</label>
                      <input type="text" class="form-control" name="id_nilai_tugas" value="<?php echo $kda;?>" required>
                    </div>
                    <div class="form-group">
                      <label>ID Kumpul</label>
                      <select name="id_kumpul" class="form-control">
                        <option>Pilih ID Tugas</option>
                        <?php id_kumpul();?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Nilai</label>
                      <input type="number" class="form-control" placeholder="Enter text" name="nilai" required>
                    </div>

                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                  </form>
                </div>
                <!-- /.col-lg-6 (nested) -->

                <!-- /.col-lg-6 (nested) -->
              </div>
              <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->

          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->

      <div class="row">
       <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Jurusan
          </div>
          <div class="panel-body">
            <div class="table-responsive dataTable_wrapper">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead >
                <tr>
                  <th>No</th>
                  <th>ID Nilai</th>
                  <th>ID Kumpul</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Nilai</th>
                  <th  align="center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $id=$_SESSION['id_guru'];
                $q = "SELECT * FROM nilai_tugas 
                JOIN kumpul_tugas on nilai_tugas.id_kumpul=kumpul_tugas.id_kumpul
                JOIN siswa on kumpul_tugas.id_siswa=siswa.id_siswa
                JOIN tugas on kumpul_tugas.id_tugas=tugas.id_tugas
                JOIN kelas on tugas.id_kelas=kelas.id_kelas
                JOIN jurusan on tugas.id_jurusan=jurusan.id_jurusan
                JOIN mengajar on tugas.id_mengajar=mengajar.id_mengajar
                JOIN guru on mengajar.id_guru=guru.id_guru
                where guru.id_guru='$id'
                ORDER BY id_nilai_tugas ASC";
                $sql = mysql_query($q);
                $no = 1;
                while($res = mysql_fetch_array($sql)){?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $res[0]; ?></td>
                    <td><?php echo $res[1]; ?></td>
                    <td><?php echo $res['nama_siswa']; ?></td>
                    <td><?php echo $res['nama_kelas']; ?></td>
                    <td><?php echo $res['nama_jurusan']; ?></td>
                    <td><?php echo $res['nilai']; ?></td>
                    <td>
                      <a href="index.php?view=edit_nilai_tugas&id_nilai_tugas=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                      &nbsp;&nbsp;
                      <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_nilai_tugas&id_nilai_tugas=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

                    </td>

                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>