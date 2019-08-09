

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
            <i class="fa fa-search"></i> Cari Siswa
          </li>
        </ol>
      </div>
      <div class="panel panel-default">
 
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" method="post" id="form" enctype="multipart/form-data" action="index.php?view=result_siswa">
     
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control"  placeholder="Enter text" id="id_siswa" name="nama_siswa" required>
                  <input type="hidden" name="id_siswa" id="id_siswas">
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