<?php

function jurusan(){
    $q = "SELECT * FROM `jurusan` ORDER BY 'id_jurusan' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}

function kuis(){
    $q = "SELECT * FROM `kuis` ORDER BY 'id_kuis' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}
?>

<script type="text/javascript">

$(document).ready(function() {

      function getKel(kelas) {

        console.log(kelas);
        var rand_ku= Math.random();
        $.ajax( {

              type: 'post',
              url: 'lib/operation/nilai/get_kels_by_jurs.php?id='+kelas+'&'+'rand='+rand_ku,
              data: '',
              cache: false,
              success: function(msg) {
               console.log(msg);   
                  $('#kelasku').html(msg);

              }
          });
          
      }

      document.getElementById("form").jurusan.focus();
      $('#jurusan').change(function() {
        getKel(this.value);
      });
});





</script>

 
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-file"></span> Laporan Nilai Kuis</h1>
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
                                <i class="fa fa-file"></i> Laporan Nilai Kuis
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
                                                                    <select class="form-control" id="jurusan">
                                                                      <option value="">Pilih Jurusan</option>
                                                                       <?php jurusan();?>
                                                                       
                                                                    </select>
                                                                </div>                                                          
                                                              
                                                                <div class="col-sm-3">
                                                                   <select name="kelas" id="kelasku" class="form-control">
                                                                  <option value="">Pilih Kelas</option>
                                                                </select>
                                                                </div> 

                                                                 <div class="col-sm-3">
                                                                    <select class="form-control" id="id_kuis">
                                                                      <option value="">Pilih Kuis</option>
                                                                       <?php kuis();?>
                                                                       
                                                                    </select>
                                                                </div> 
                                                                <div class="col-sm-3">
                                                                  <button type="button" class="btn btn-info" onclick="cetak()">Cetak</button>
                                                                </div>                                                           
                                                              </div>                                                 
                                                            </div>
                                                 
                                                </form>

                                                <script type="text/javascript">
                                                    function cetak() {
                                                        var jurusan = $("#jurusan").val();
                                                        var kelas = $("#kelasku").val();
                                                        var id_kuis = $("#id_kuis").val();
                                                        window.open('index.php?view=view_nilai_kuis&jurusan='+jurusan+'&kelas='+kelas+'&id_kuis='+id_kuis);
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

  


