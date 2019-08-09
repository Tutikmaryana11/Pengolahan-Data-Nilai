 <div class="container">
  <div class="section">
   
    <!--   Icon Section   -->
    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-info">
          <?php
          
                  $a = $_GET['id_kelas'];
                  // $b = $_GET['id_mapel'];
          ?>
          <div class="panel-heading">
            Laporan Data Siswa<br>
            ID KElas : <?php echo $_GET['id_kelas'];?> // 
            <!-- ID Mapel : <?php echo $_GET['id_mapel'];?> -->
            
            
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Siswa</th>
                    <th>Kelas - Tahun</th>
                    <th>Nama Siswa</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $q = "SELECT * from siswa JOIN tahun_kelas on siswa.id_siswa=tahun_kelas.id_siswa JOIN kelas on kelas.id_kelas=tahun_kelas.id_kelas WHERE tahun_kelas.flag_aktif='Y' and kelas.id_kelas = '$a' ";
                  $sql = mysql_query($q);
                  $no = 1;
                  while($res = mysql_fetch_array($sql)){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $res['id_siswa']; ?></td>
                      <td><?php echo $res['nama_kelas']." - ".$res['tahun'];?></td>
                      <td><?php echo $res['nama_siswa']; ?></td>
                      <td><?php echo $res['alamat']; ?></td>
                      <td><?php echo $res['jenis_kelamin']; ?></td>

                      <td><?php echo $res['email']; ?></td>
                       
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
          <!-- /.panel-body -->

        </div>
        <!-- /.panel -->
        <input class="pull-left" type='button' value='print' onclick=javascript:window.print();>
        <!-- <a target="_blank" href="view/export_nilai.php?id_kelas=<?php echo $a;?>&id_mapel=<?php echo $b; ?>">EXPORT KE EXCEL</a> -->

        <!-- <a target="_blank" href="view/export_nilai.php&id_kelas=<?php echo $a;?>&id_mapel=<?php echo $b; ?>">EXPORT KE EXCEL</a> -->


      </div>


    </div>
  </div>
 </div>