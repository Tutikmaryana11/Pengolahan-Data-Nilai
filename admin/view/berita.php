     <?php include_once 'lib/operation/berita/auto.php';
     $id_operator = $_SESSION['id_admin'];
     ?>


     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-upload"></span> Upload Berita</h1>
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
                                <i class="fa fa-upload"></i> Upload Berita
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload Berita forms
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=insert_berita" enctype="multipart/form-data">
                                    	<input type="hidden" name="id_operator" value="<?php echo $id_operator;?>">
                                        <div class="form-group">
                                            <label>ID Berita</label>
                                            <input type="text" class="form-control" name="id_berita" value="<?php echo $kd;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Berita</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_berita" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita</label>
                                            <textarea type="text" class="form-control" placeholder="Enter text" name="isi_berita" required></textarea>
                                        </div>

                                         <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
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
                                Data Berita
                                <p align="right">
                                        
                                  <a target="_blank" href="view/export_berita.php"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a></p>
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Berita</th>
                                                <th>Nama Berita</th>
                                                <th>Isi Berita</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT * from berita 
                                          
                                          ORDER BY id_berita DESC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_berita']; ?></td>
                                              <td><?php echo $res['nama_berita']; ?></td>
                                              <td><?php echo $res['isi_berita']; ?></td>

                                              <td>
                                                <a href="index.php?view=edit_berita&id_berita=<?php echo $res['id_berita'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_berita&id_berita=<?php echo $res['id_berita'];?>"><i class="fa fa-trash"></i></a>

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