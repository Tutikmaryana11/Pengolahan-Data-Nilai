
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> Penghargaan</h1>
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
       Data Penghargaan
     </div>
     <div class="panel-body">
      <div class="table-responsive dataTable_wrapper">
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead >
          <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Lomba</th>
            <th>Tingkat</th>
            <th>Tahun</th>
            <th>Juara</th>
            <th>Medali</th>
          </tr>
        </thead>
        <tbody>
         <?php
         error_reporting(0);

         $tingkat = $_POST['penghargaan_tingkat']; 
         $juara = $_POST['penghargaan_juara']; 
         $medali = $_POST['penghargaan_medali']; 
         $tahun = $_POST['penghargaan_tahun']; 

         $q = '';

         if ($tingkat != NULL ) {
          $q =" and p.penghargaan_tingkat ='$tingkat'";
         }
         if ($juara !=NULL) {
          $q .=" and p.penghargaan_juara='$juara'";
         }
         if ($medali !=NULL) {
           $q .=" and p.penghargaan_medali = '$medali'";
         }
         if ($tahun !=NULL) {
           $q .=" and p.penghargaan_tahun = '$tahun'";
         }
        

        // echo $q;

        $qs = "SELECT * FROM penghargaan p 
        join siswa s on s.id_siswa = p.penghargaan_id_siswa
        where 1 $q
        order by p.penghargaan_id asc";
        $sql = mysql_query($qs);

        // echo $qs;

        $no = 1;
        while($res = mysql_fetch_array($sql)){
            // print_r($res);
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><a href="index.php?view=detail_siswa&id_siswa=<?php echo $res['penghargaan_id_siswa']?>"> <?php echo $res['penghargaan_id_siswa']; ?></a></td>
            <td><a href="index.php?view=detail_siswa&id_siswa=<?php echo $res['penghargaan_id_siswa']?>"> <?php echo $res['nama_siswa']; ?></a></td>
            <td><?php echo $res['penghargaan_keterangan']; ?></td>

            <td><?php echo $res['penghargaan_tingkat']; ?></td>
            <td><?php echo $res['penghargaan_tahun']; ?></td>
            <td><?php echo $res['penghargaan_juara']; ?></td>
            <td><?php echo $res['penghargaan_medali']; ?></td>

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