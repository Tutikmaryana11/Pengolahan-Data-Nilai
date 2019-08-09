

<?php 
include_once 'lib/operation/siswa/auto.php';

          $id_siswa = $_POST['id_siswa'];
          $q = "SELECT * FROM siswa where id_siswa = $id_siswa";
          $sql = mysql_query($q);
          // $data = mysql_fetch_array($sql);
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> Siswa</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    
</div>
<!-- /.row -->

<!-- start show siswa -->
<div class="row">
 <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
       Data Siswa
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
  <!--           <th>Email</th>
            <th>Password</th> -->
            <th  align="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
         <?php
          $no = 1;
          while($res = mysql_fetch_array($sql)){?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><a href="index.php?view=detail_siswa&id_siswa=<?php echo $res[0]?>"> <?php echo $res[0]; ?></a></td>
              <td><a href="index.php?view=detail_siswa&id_siswa=<?php echo $res[0]?>"> <?php echo $res[1]; ?></a></td>
              <td><?php echo $res[2]; ?></td>
              <td><?php if ($res[3]=='L') {
                echo "Laki-laki";
              } else {
                echo "Perempuan";
              }?></td>
              <td><?php echo $res[4]; ?></td>
<!--               <td><?php echo $res[9]; ?></td>
              <td><?php echo $res[9]; ?></td> -->
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