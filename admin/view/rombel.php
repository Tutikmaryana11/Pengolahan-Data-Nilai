     <?php 
     include_once 'lib/operation/kelas/auto_id.php';
     include_once 'lib/operation/kelas/auto.php';
     ?>

     <?php

     function kelas_rombel(){
      $q = "SELECT * FROM `kelas_rombel` ORDER BY 'id_kelas' ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
      }
    }

    function jurusan(){
      $q = "SELECT * FROM `guru` ORDER BY 'id_guru' ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
      }
    }
    ?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><span class="fa fa-windows"></span> Rombel</h1>
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
                <i class="fa fa-windows"></i> Rombel
              </li>
            </ol>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              Rombel forms
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  <form role="form" method="post" action="index.php?view=insert_rombel">
                    <div class="form-group">
                      <label>ID Rombel</label>
                      <input type="text" class="form-control" name="id_rombel" value="<?php echo $kda;?>" required>
                    </div>

                    <div class="form-group">
                      <label>Jenis Rombel</label>
                      <input type="text" class="form-control" placeholder="Enter text" name="jenis_rombel" required>
                    </div>


                    <div class="form-group">
                      <label>tingkat_kelas</label>
                      <input type="text" class="form-control" placeholder="Enter text" name="tingkat_kelas" required>
                    </div>

                    <div class="form-group">
                      <label>kelas</label>

                      <select class="form-control" id="jurusan" name="id_kelas">
                        <option value="">Pilih Kelas</option>
                        <?php kelas_rombel();?>

                      </select>
                    </div> 

                 <!--    <div class="form-group">
                      <label>kurikulum</label> -->
                      <!-- <input type="text" class="form-control" placeholder="Enter text" name="kurikulum" required> -->
                      <div class="form-group">
                        <label>Kurikulum</label>
                        <select class="form-control" name="kurikulum">
                          <option value="1">K13</option>
                          <option value="2">KTSP</option>
                          <option value="3">KBK</option>
                        </select>
                      </div>
                    <!-- </div> -->


                    <div class="form-group">
                      <label>nama_rombel</label>
                      <input type="text" class="form-control" placeholder="Enter text" name="nama_rombel" required>
                    </div>

                    <div class="form-group">
                      <label>wali_kelas</label>

                      <select class="form-control" id="jurusan" name="id_guru">
                        <option value="">Pilih Wali Kelas</option>
                        <?php jurusan();?>

                      </select>
                    </div> 


                    <div class="form-group">
                      <label>prasarana</label>
                      <input type="text" class="form-control" placeholder="Enter text" name="prasarana" required>
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
            Rombel
          </div>
          <div class="panel-body">
            <div class="table-responsive dataTable_wrapper">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead >
                <tr>
                  <th>No</th>
                  <th>ID Rombel</th>
                  <th>Jenis Rombel</th>
                  <th>Tingkat Kelas</th>
                  <th>Kelas</th>
                  <th>Kurikulum</th>
                  <th>Nama Rombel</th>
                  <th>Wali Kelas</th>
                  <th>Prasarana</th>
                  

                  <th  align="center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $q = "SELECT r.*, kr.nama_kelas as nama_kelas FROM rombel r 
                left join kelas_rombel kr on kr.id_kelas = r.id_kelas
                ORDER BY r.id_rombel ASC";
                $sql = mysql_query($q);
                $no = 1;
                while($res = mysql_fetch_array($sql)){?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $res[0]; ?></td>
                    <td><?php echo $res[1]; ?></td>
                    <td><?php echo $res[2]; ?></td>
                    <td><?php echo $res['nama_kelas']; ?></td>
                    <td><?php echo $res[3]; ?></td>
                    <td><?php echo $res[4]; ?></td>
                    <td><?php echo $res[5]; ?></td>
                    <td><?php echo $res[6]; ?></td>
                    <td>
                      <a href="index.php?view=edit_rombel&id_rombel=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                      &nbsp;&nbsp;
                      <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_rombel&id_rombel=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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