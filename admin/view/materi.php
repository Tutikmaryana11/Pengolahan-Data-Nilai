     <?php include_once 'lib/operation/materi/auto.php';?>

      <script type="text/javascript">
        /*autocomplete muncul setelah user mengetikan minimal2 karakter */
            $(document).ready(function() { 

                $( "#id_mengajar" ).autocomplete({
                 source: "view/auto/get_data_guru.php",  
                   minLength:1,
                   scroll: true,

                   select: function(event,ui){
                    event.preventDefault();
                      $('#id_mengajar').val(ui.item.id_mengajar);
                } 
                });

                });
          </script>

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-book"></span> Materi</h1>
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
                                <i class="fa fa-book"></i> Materi
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Materi forms
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=insert_materi" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>ID Materi</label>
                                            <input type="text" class="form-control" name="id_materi" value="<?php echo $kd;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materi</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_materi" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Guru</label>
                                            <input type="text" class="form-control" id="id_mengajar" placeholder="Tekan Spasi" name="id_mengajar" required>
                                        </div>
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="files" class="form-control" placeholder="Foto" accept=".doc, .docx, .pdf" required>                                            
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
                                Hover Rows
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Materi</th>
                                                <th>Guru</th>
                                                <th>file</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT materi.id_materi, nama_materi, guru.nama_guru, materi.files FROM materi 
                                          JOIN mengajar ON materi.id_mengajar = mengajar.id_mengajar
                                          JOIN guru ON mengajar.id_guru = guru.id_guru
                                          ORDER BY id_materi ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res[1]; ?></td>
                                              <td><?php echo $res['nama_guru']; ?></td>
                                
                                              <td>
                                                <a href="./data/files/<?=$res['files'];?>" target="_blank"><i class="fa fa-download"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_materi&id_materi=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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