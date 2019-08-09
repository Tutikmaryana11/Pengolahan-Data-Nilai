<?php

function penghargaan(){
  $q = "SELECT penghargaan_tahun FROM `penghargaan` GROUP BY `penghargaan`.`penghargaan_tahun` ORDER BY `penghargaan`.`penghargaan_tahun` ASC
";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[0]."</option>";
  }
} ?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-star-half-o"></span> penghargaan</h1>
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
            <i class="fa fa-star-half-o"></i> <a href="index.php?view=penghargaan">Penghargaan</a>
          </li>
           <li class="active">
            <i class="fa fa-search"></i> Cari Penghargaan
          </li>
        </ol>
      </div>
      <div class="panel panel-default">
 
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" id="form" enctype="multipart/form-data" action="index.php?view=result_penghargaan">
     
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
                  <select class="form-control" name="pembinaan_seleksi">
                    <option value="">Pilih Tahun</option>
                    <?php penghargaan();?>
                  </select>
                </div>                                          

              <button type="submit" value="submit" class="btn btn-default">Submit Button</button>
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

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>


   <script type="text/javascript">
        /*autocomplete muncul setelah user mengetikan minimal2 karakter */
            $(document).ready(function() { 

                $( "#id_penghargaan" ).autocomplete({
                 source: "view/auto/get_data_penghargaan.php",  
                   minLength:1,
                   scroll: true,

                   select: function(event,ui){
                    event.preventDefault();
                      $('#id_penghargaan').val(ui.item.nama_penghargaan);
                      $('#id_penghargaans').val(ui.item.id_penghargaan);
                } 
                });

                });
          </script>