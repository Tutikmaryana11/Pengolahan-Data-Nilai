 <?php
 $a = "select * from mapel where id_mapel = '$_GET[id_mapel]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-th-list"></span> Mata Pelajaran</h1>
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
                                <i class="fa fa-th-list"></i> Mata Pelajaran
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mapel forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_mapel_p&id_mapel=<?php echo $c['id_mapel'];?>">
                                        <div class="form-group">
                                            <label>ID Mapel</label>
                                            <input type="text" class="form-control" name="id_mapel" value="<?php echo $c['id_mapel'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mapel</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_mapel" value="<?php echo $c['nama_mapel'];?>" required>
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

        </div>
        <!-- /#page-wrapper -->
 

  


