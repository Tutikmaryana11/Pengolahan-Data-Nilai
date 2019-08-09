 <div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <form method="POST" action="index.php?view=insert_naik_kelas">
      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info">
            <?php
            function kelas(){

              $q = "SELECT * FROM kelas  GROUP by nama_kelas";
              $sql = mysql_query($q);
              while($res = mysql_fetch_array($sql)){
                echo "<option value='".$res[0]."'>".$res[0]." - ".$res[1]."</option>";
              }
            }

            $a = $_GET['id_kelas'];
                  // $b = $_GET['id_mapel'];
            ?>
            <div class="panel-heading">
              ID KElas : <input type="text" name="id_kelas" value="<?php echo $_GET['id_kelas'];?>"> // 
              <!-- ID Mapel : <?php echo $_GET['id_mapel'];?> -->
              <!--  <p align="right"><a target="_blank" href="view/export_nilai.php?id_kelas=<?php echo $a;?>&id_mapel=<?php echo $b; ?>"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a></p> -->

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="table-responsive">
                <div class="col-sm-3">
                  <!-- <div class="form-group"> -->
                    Naik Kelas Ke : 
                    <select class="form-control" id="kelas" name="id_kelas">
                      <option value="">Pilih Kelas</option>
                      <?php kelas();?>

                    </select>
                    <!-- <form method="POST" action="index.php?view=insert_naik_kelas" > -->
                    <table class="table display">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Siswa</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Email</th>
                          <th>Nama Kelas</th>
                          <th>Naik Kelas</th>


                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $q = "SELECT * from siswa JOIN kelas on siswa.id_kelas=kelas.id_kelas WHERE kelas.id_kelas='$a'";
                        $sql = mysql_query($q);
                        $no = 0;
                        while($res = mysql_fetch_array($sql)){
                          $no++;

                        // $sql = "insert into tahun_kelas (id_kelas,id_siswa,tahun,flag_aktif) values '$id_kelas','$res['id_siswa']',".date('Y').",'$status_naik'";
                        // $qry = mysql_query($sql);

                        ?>
                          <tr>
                            <td>
                              <input type="hidden" name="siswa[<?php echo $no?>][id_siswa]" value="<?php echo $res['id_siswa']; ?>"></input>


                              <?php echo $no; ?></td>
                            <td><?php echo $res['id_siswa']; ?></td>
                            <td><?php echo $res['nama_siswa']?></td>
                            <td><?php echo $res['alamat']; ?></td>
                            <td><?php echo $res['jenis_kelamin']; ?></td>
                            <td><?php echo $res['agama']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['nama_kelas']; ?></td>
                            <td><select name="siswa[<?php echo $no?>][status_naik]">
                              <option value="Y">Y</option>
                              <option value="N">N</option>

                            </select>
                          </tr>
                          <?php
                          if (isset($_GET['submit']))
{
 
                          $tgl=date('Y');
                          $a=$_POST['id_kelas'];


                          $id_kelas=$_POST['kelas'];
                          $id_siswa=$res['id_siswa'];
                          $status_naik=$_POST['status_naik'];

                          $sql = "insert into tahun_kelas (id_kelas,id_siswa,tahun,flag_aktif) values '$id_kelas','$id_siswa','$tgl','$status_naik'";
                          $qry = mysql_query($sql);
                          echo $sql;


                          if ($qry) {
                            // echo "<script>alert('Naik Kelas Berhasil');</script>";
                            // echo "<script>document.location.href='index.php?view=naik_kelas&hal=1';</script>";
                            echo "a";
                          }
                          else {
                            echo "<script>alert('Failed to change data');</script>";
                            echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
                          }
                          
                        }
                      }
                        ?>
                      </tbody>
                    </table>

                    <!-- </div>     -->
                  </div> 
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->

            </div>
            <input type="submit" name="submit" value="Input">
            <input class="pull-left" type='button' value='print' onclick=javascript:window.print();>

          <!-- </form> -->

          </div>


        </div>
      </div>
    </div>
  </form>