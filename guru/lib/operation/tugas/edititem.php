     <?php
   function id_kumpul(){
      $q = "SELECT * FROM `kumpul_tugas` 
      JOIN siswa on kumpul_tugas.id_siswa=siswa.id_siswa
      ORDER BY 'id_kumpul' ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
          echo "<option value='".$res[0]."'>".$res[0]." -- ".$res['nama_siswa']."</option>";
      }
  }

  $id=$_GET['id_nilai_tugas'];
  $a = "select * from nilai_tugas where id_nilai_tugas='$id' ";
  $b = mysql_query($a);
  $c = mysql_fetch_array($b);

  ?>

     <?php include_once 'lib/operation/tugas/auto_id.php';?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-file"></span> Nilai Tugas Siswa</h1>
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
                                <span class="fa fa-file"></span> Nilai Tugas Siswa
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="fa fa-file"></span> Nilai Tugas Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_nilai_tugas_p&id_nilai_tugas=<?php echo $id;?>">
                                        <div class="form-group">
                                            <label>ID Nilai</label>
                                            <input type="text" class="form-control" name="id_nilai_tugas" value="<?php echo $c['id_nilai_tugas']?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Kumpul</label>
                                            <input type="text" class="form-control" name="id_kumpul" value="<?php echo $c['id_kumpul'];?>" readonly>
                                           
                                        </div>

                                         <div class="form-group">
                                            <label>Nilai</label>
                        <input type="number" class="form-control" placeholder="Enter text" name="nilai" value="<?php echo $c['nilai'];?>" required>
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
