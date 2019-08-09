      <?php
 function id_mapel(){
    $q = "SELECT * FROM `mapel` ORDER BY 'id_mapel' ASC";
    $sql = mysql_query($q);
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[1]."</option>";
    }
}

?>

     <?php include_once 'lib/operation/guru/auto.php';?>
     <?php include_once 'lib/operation/guru/auto_id.php';?>
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
                                    <form role="form" method="post" action="index.php?view=belajar_guru_insert">
                                        <div class="form-group">
                                            <label>ID Guru</label>
                                            <input type="text" class="form-control" name="id_guru" value="<?php echo $kd;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Guru</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_guru" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                              <select class="form-control" name="jenis_kelamin">
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
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
                                            <input type="email" class="form-control" placeholder="Enter text" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Enter text" name="password" required>
                                        </div>
                                         <div class="form-group">
                                            <label>ID Mapel</label>
                                            <select class="form-control" name="id_mapel">
                                              <?php id_mapel();?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="id_mengajar" value="<?php echo $kda;?>">


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
                                Jurusan
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Guru</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>J.Kelamin</th>
                                                <th>Agama</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th  align="center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT * FROM guru 
                                          JOIN mengajar ON mengajar.id_guru=guru.id_guru
                                          ORDER BY guru.id_guru ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res[0]; ?></td>
                                              <td><?php echo $res[1]; ?></td>
                                              <td><?php echo $res[2]; ?></td>
                                              <td><?php echo $res[3]; ?></td>
                                              <td><?php echo $res[4]; ?></td>
                                              <td><?php echo $res[5]; ?></td>
                                              <td><?php echo $res[6]; ?></td>
                                              <td>
                                                <a href="index.php?view=edit_guru&id_guru=<?php echo $res[0];?>&id_mengajar=<?php echo $res['id_mengajar'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=belajar_guru_delete&id_guru=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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