 <?php
 $a = "select * from siswa where id_siswa = '$_GET[id_siswa]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
 ?>
<?php
 function kelas(){
    $q = "SELECT * FROM `kelas` ORDER BY 'id_kelas' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[2]."</option>";
    }
}

function jurusan(){
    $q = "SELECT * FROM `jurusan` ORDER BY 'id_jurusan' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[1]."</option>";
    }
}

?>
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
                                <i class="fa fa-users"></i> Siswa
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Siswa forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_siswa_p&id_siswa=<?php echo $c['id_siswa'];?>">
                                        <div class="form-group">
                                            <label>ID Siswa</label>
                                            <input type="text" class="form-control" name="id_siswa" value="<?php echo $c['id_siswa'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_siswa" value="<?php echo $c['nama_siswa'];?>" required>
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
                                            <label>Kelas</label>
                                              <select class="form-control" name="id_kelas" value="<?php echo $c['id_kelas'];?>">
                                                <?php kelas();?>
                                              </select>
                                        </div>
                                         
                                         <div class="form-group">
                                            <label>Nama Ortu</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_ortu" value="<?php echo $c['nama_ortu'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter text" name="email" value="<?php echo $c['email'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="password" value="<?php echo $c['password'];?>" required>
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


