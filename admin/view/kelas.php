     <?php 
     include_once 'lib/operation/kelas/auto.php';
     ?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-windows"></span> Kelas</h1>
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
                                <i class="fa fa-windows"></i> Kelas
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kelas 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=insert_kelas">
                                        <div class="form-group">
                                            <label>ID Kelas</label>
                                            <input type="text" class="form-control" name="id_kelas" value="<?php echo $kd;?>" required>
                                        </div>
                              
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_kelas" required>
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
                                Kelas
                                <p align="right">
                                        
                                  <a target="_blank" href="view/export_kelas.php"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a></p>
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th  align="center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT * FROM kelas ORDER BY id_kelas ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res[0]; ?></td>
                                              <td><?php echo $res[1]; ?></td>
                                              <td>
                                                <a href="index.php?view=edit_kelas&id_kelas=<?php echo $res[0];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_kelas&id_kelas=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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