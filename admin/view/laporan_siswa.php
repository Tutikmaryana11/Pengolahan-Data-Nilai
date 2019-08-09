<?php

// echo $c['id_guru'];

function kelas(){
//   $email = $_SESSION['email_guru'];
// $a = "SELECT * FROM guru where email='$email'";
// $b = mysql_query($a);
// $c = mysql_fetch_array($b);

  $q = "SELECT * FROM tahun_kelas JOIN kelas on tahun_kelas.id_kelas=kelas.id_kelas GROUP by kelas.nama_kelas, tahun_kelas.tahun";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[1]."'>".$res[6]." - ".$res[3]."</option>";
  }
}
?>

      <?php
 function id_mapel(){
    $q = "SELECT * FROM `mapel` ORDER BY 'id_mapel' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[1]."</option>";
    }
}

?>


<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-file"></span> Laporan Siswa </h1>
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
            <i class="fa fa-file"></i> Laporan Siswa
          </li>
        </ol>
      </div>
      <div class="panel panel-default">

        <div class="panel-body">    

          <div class="form-group">



            <!-- kelas DAN jurusan -->
            <form class="form-horizontal" id="form" role="form" method="get" enctype="multipart/form-data">
              <div class="row">

                <div class="form-group" style="margin-left:20px;">

                  <div class="col-sm-3">
                    <!-- <div class="form-group"> -->

                    <select class="form-control" id="kelas" name="id_kelas">
                      <option value="">Pilih Kelas</option>
                      <?php kelas();?>

                    </select>
                  <!-- </div>     -->
                  </div>  
                                       

                <div class="col-sm-3">
                  <button type="button" class="btn btn-info" onclick="cetak()">Cetak</button>
                  <!-- <button type="button" class="btn btn-info" onclick="export_excel()">Exxport Excell</button> -->

                </div>                                                           
              </div>                                                 
            </div>

          </form>

          <script type="text/javascript">
            function cetak() {
              var kelas = $("#kelas").val();
              // var mapel = $("#mapel").val();
              window.open('index.php?view=view_laporan_siswa&id_kelas='+kelas);
            }
          </script>

         



        </div>
      </div>
      <!-- /.panel-body -->

    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




