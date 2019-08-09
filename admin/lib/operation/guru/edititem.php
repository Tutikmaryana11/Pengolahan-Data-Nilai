 <?php
 $a = "select * from guru where id_guru = '$_GET[id_guru]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
 ?>

  <?php
 $aa = "select * from mengajar where id_mengajar = '$_GET[id_mengajar]'";
 $ba = mysql_query($aa);
 $ca = mysql_fetch_array($ba);
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
                    <h1 class="page-header"><span class="fa fa-th-list"></span> Guru</h1>
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
                                <i class="fa fa-users"></i> Guru
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Guru forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_guru_p&id_guru=<?php echo $c['id_guru'];?>&id_mengajar=<?php echo $ca['id_mengajar'];?>">
                                        <div class="form-group">
                                            <label>ID Guru</label>
                                            <input type="text" class="form-control" name="id_guru" value="<?php echo $c['id_guru'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_guru" value="<?php echo $c['nama_guru'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="alamat" value="<?php echo $c['alamat'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                              <select class="form-control" name="jenis_kelamin" value="<?php echo $c['jenis_kelamin'];?>">
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama" value="<?php echo $c['agama'];?>">
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                                <option value="khonghucu">Khonghucu</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter text" name="email" value="<?php echo $c['email'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Enter text" name="password" value="<?php echo $c['password'];?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>ID Mapel</label>
                                            <select class="form-control" name="id_mapel" value="<?php echo $c['id_mapel'];?>">
                                              <?php id_mapel();?>
                                            </select>
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

    </div>
    <!-- /#wrapper -->
