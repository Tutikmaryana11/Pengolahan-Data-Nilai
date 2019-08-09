<?php

function kelas(){
  $q = "SELECT * from kelas ";
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
            <i class="fa fa-users"></i> Siswa
          </li>
        </ol>
      </div>
     <!-- MULAI PILIHAN SISWA DARI SINI -->

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-search fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Cari Siswa!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=cari_siswa">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Tambah Siswa!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=tambah_siswa">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
         <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-home fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>Home!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=home">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
 
    </div>
   
</div>
     <!-- MULAI PILIHAN SISWA DARI SINI -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- start show siswa -->
<div class="row">
 <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Data Siswa
      <p align="right">
                                        
                                  <a target="_blank" href="view/export_siswa.php"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a></p>
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

</div>
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