

<?php include_once 'lib/operation/penghargaan/auto.php';?>


   <script type="text/javascript">
        /*autocomplete muncul setelah user mengetikan minimal2 karakter */
            $(document).ready(function() { 

                $( "#id_siswa" ).autocomplete({
                 source: "view/auto/get_data_siswa.php",  
                   minLength:1,
                   scroll: true,

                   select: function(event,ui){
                    event.preventDefault();
                      $('#id_siswa').val(ui.item.nama_siswa);
                      $('#id_siswas').val(ui.item.id_siswa);
                } 
                });

                });
          </script>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> penghargaan</h1>
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
            <i class="fa fa-users"></i> <a href="index.php?view=penghargaan">penghargaan</a>
          </li>
           <li class="active">
            <i class="fa fa-plus"></i> Tambah penghargaan
          </li>
        </ol>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          penghargaan forms
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" id="form" action="index.php?view=insert_penghargaan" enctype="multipart/form-data">
                <div class="form-group">
                  <label>ID penghargaan</label>
                  <input type="text" class="form-control" readonly name="penghargaan_id" value="<?php echo $kd;?>" required>
                </div>
                <div class="form-group">
                  <label>Nama penghargaan</label>
                  <input type="text" class="form-control" placeholder="Enter text" name="penghargaan_keterangan" required>
                </div>
                 <div class="form-group">
                  <label>Nama siswa</label>
                  <input type="text" class="form-control" placeholder="Enter text" id="id_siswa" required>
                  <input type="hidden" name="penghargaan_id_siswa" id="id_siswas">
                </div>
                 <div class="form-group">
                  <label>Tingkat</label>
                  <select name="penghargaan_tingkat" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Kecamatan">Kecamatan</option>
                    <option value="Kabupaten">Kabupaten</option>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Internasional">Internasional</option>
                  </select>
                </div> 

                 <div class="form-group">
                  <label>Juara</label>
                  <select name="penghargaan_juara" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Juara 1</option>
                    <option value="2">Juara 2</option>
                    <option value="3">Juara 3</option>
                  </select>
                </div>    

                 <div class="form-group">
                  <label>Medali</label>
                  <select name="penghargaan_medali" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Emas">Emas</option>
                    <option value="Perak">Perak</option>
                    <option value="Perunggu">Perunggu</option>
                  </select>
                </div>   

                 <div class="form-group">
                  <label>Tahun</label>
                  <input type="number" class="form-control" placeholder="Enter text" name="penghargaan_tahun" required>
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

<!-- start show penghargaan -->
<!-- <div class="row">
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
            <th>ID penghargaan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>J.Kelamin</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Password</th>
            <th  align="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $q = "SELECT * FROM penghargaan ORDER BY id_penghargaan ASC";
          $sql = mysql_query($q);
          $no = 1;
          while($res = mysql_fetch_array($sql)){?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $res[0]; ?></td>
              <td><?php echo $res[1]; ?></td>
              <td><?php echo $res[2]; ?></td>
              <td><?php if ($res[3]=='L') {
                echo "Laki-laki";
              } else {
                echo "Perempuan";
              }?></td>
              <td><?php echo $res[4]; ?></td>
              <td><?php echo $res[9]; ?></td>
              <td><?php echo $res[9]; ?></td>
              <td>
                <a href="index.php?view=edit_penghargaan&id_penghargaan=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                &nbsp;&nbsp;
                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_penghargaan&id_penghargaan=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

              </td>

            </tr>
            <?php
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

</div> -->
<!-- end tampil penghargaan -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>