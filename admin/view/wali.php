
<?php include_once 'lib/operation/wali/auto.php';?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> Wali</h1>
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
            <i class="fa fa-users"></i> Wali
          </li>
        </ol>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          Wali forms
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" id="form" action="index.php?view=insert_wali" enctype="multipart/form-data">
                <div class="form-group">
                  <label>ID Wali</label>
                  <input type="text" class="form-control" name="wali_id" value="<?php echo $kd;?>" required>
                </div>
                <div class="form-group">
                  <label>Nama Wali</label>
                  <input type="text" class="form-control" placeholder="Enter text" name="wali_nama" required>
                </div>
                <div class="form-group">
                  <label>Tahun Lahir</label>
                  <input type="text" class="form-control" placeholder="Enter text" name="wali_tahun_lahir" required>
                </div>
               
                <div class="form-group">
                  <label>Jenjang Pendidikan</label>
                  <select class="form-control" name="wali_jenjang_pendidikan">
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                  </select>
                </div>
               
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" class="form-control" placeholder="Enter text" name="wali_pekerjaan">
              </div>

               <div class="form-group">
                <label>wali_penghasilan</label>
                <input type="number" class="form-control" placeholder="Enter text" name="wali_penghasilan">
              </div>

               <div class="form-group">
                <label>wali_nik</label>
                <input type="text" class="form-control" placeholder="Enter text" name="wali_nik">
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
      Data Wali
      <p align="right">
                                        
                                  <a target="_blank" href="view/export_wali.php"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a></p>
    </div>
    <div class="panel-body">
      <div class="table-responsive dataTable_wrapper">
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead >
          <tr>
            <th>No</th>
            <th>ID Wali</th>
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
          $q = "SELECT * FROM wali_siswa ORDER BY wali_id ASC";
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
              <td><?php echo $res[6]; ?></td>
              <!-- <td><?php echo $res[7]; ?></td> -->
              <!-- <td><?php echo $res[9]; ?></td> -->
              <td>
                <a href="index.php?view=edit_siswa&id_siswa=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                &nbsp;&nbsp;
                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_wali&wali_id=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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