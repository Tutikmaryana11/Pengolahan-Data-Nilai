     <?php include_once 'lib/operation/materi/auto.php';?>

     <?php 
     $id = $_SESSION['id_guru'];

     $a = "select id_mengajar from mengajar where id_guru = '$id'";
     $b = mysql_query($a);
     $c = mysql_fetch_array($b);
     ?>

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-upload"></span> Upload Materi</h1>
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
                                <i class="fa fa-upload"></i> Upload Materi
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload Materi forms
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
                                            <label>File</label>
                                            <input type="file" name="files" class="form-control" placeholder="Foto" accept=".doc, .docx, .pdf" required>                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="keterangan" required>
                                        </div>

                                        <input type="hidden" name="id_mengajar" value="<?php echo $c['id_mengajar'];?>">

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
                                                <th>Keterangan</th>
                                                <th>File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT materi.id_materi, nama_materi, guru.nama_guru, materi.files, materi.keterangan FROM materi 
                                          JOIN mengajar ON materi.id_mengajar = mengajar.id_mengajar
                                          JOIN guru ON mengajar.id_guru = guru.id_guru
                                          where guru.id_guru = '$id'
                                          ORDER BY id_materi ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res[1]; ?></td>
                                              <td><?php echo $res['nama_guru']; ?></td>
                                              <td><?php echo $res[4]; ?></td>
                                
                                              <td>
                                                <a href=".././admin/data/files/<?=$res['files'];?>" target="_blank"><i class="fa fa-download"></i></a>
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