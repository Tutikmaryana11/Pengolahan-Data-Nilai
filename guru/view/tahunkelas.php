<?php

function kelas(){
  $q = "SELECT * from kelas";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[1]."</option>";
  }
}

function ayah(){
  $q = "SELECT * from ayah_kandung order by ayah_id asc";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[1]."</option>";
  }
}

function ibu(){
  $q = "SELECT * from ibu_kandung order by ibu_id asc";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[1]."</option>";
  }
}

function wali(){
  $q = "SELECT * from wali_siswa order by wali_id asc";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[1]."</option>";
  }
}
?>

<?php include_once 'lib/operation/siswa/auto.php';?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> Siswa</h1>
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
            <i class="fa fa-users"></i> <a href="index.php?view=siswa">Siswa</a>
          </li>
           <li class="active">
            <i class="fa fa-plus"></i> Tambah Siswa
          </li>
        </ol>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          Siswa forms
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" id="form" action="index.php?view=insert_siswa" enctype="multipart/form-data">
                <div class="form-group">
                  <label>ID Siswa</label>
                  <input type="text" class="form-control" name="id_siswa" value="<?php echo $kd;?>" required>
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" placeholder="Enter text" name="nama_siswa" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Enter text" name="alamat" required>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="katolik">Katolik</option>
                    <option value="budha">Budha</option>
                    <option value="khonghucu">Khonghucu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kelas</label>

                  <select class="form-control" id="kelas" name="id_rombel">
                    <option value="">Pilih Kelas</option>
                    <?php kelas();?>

                  </select>
                </div>   

                 <div class="form-group">
                  <label>Ayah Kandung</label>

                  <select class="form-control" name="ayah_id">
                    <!-- <option value="">Pilih Ayah Kandung</option> -->
                    <?php ayah();?>

                  </select>
                </div>   

                 <div class="form-group">
                  <label>Ibu Kandung</label>

                  <select class="form-control" name="ibu_id">
                    <!-- <option value="">Pilih Ibu Kandung</option> -->
                    <?php ibu();?>

                  </select>
                </div>  

                 <div class="form-group">
                  <label>Wali</label>

                  <select class="form-control" name="wali_id">
                    <!-- <option value="">Pilih Wali Kelas</option> -->
                    <?php wali();?>

                  </select>
                </div>                                                          

         <!--      <div class="form-group">
                <label>Nama Ortu</label>
                <input type="text" class="form-control" placeholder="Enter text" name="nama_ortu" required>
              </div> -->
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter text" name="email">
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

<!-- start show siswa -->
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
            <th>ID Siswa</th>
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
          $q = "SELECT * FROM siswa ORDER BY id_siswa ASC";
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
    </div>
  </div>
</div>
</div>

</div> -->
<!-- end tampil siswa -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>