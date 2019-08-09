 <?php
 $a = "select * from kelas
        where id_kelas = '$_GET[id_kelas]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
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
                            Kelas forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_belajar_p&id_kelas=<?php echo $c['id_kelas'];?>">
                                        <div class="form-group">
                                            <label>ID Kelas</label>
                                            <input type="text" class="form-control" name="id_kelas" value="<?php echo $c['id_kelas'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Jurusan</label>
                                            <input type="text" class="form-control" name="id_jurusan" value="<?php echo $c['id_jurusan'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kelas</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_kelas" value="<?php echo $c['nama_kelas'];?>" required>
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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

