 <div class="container">
  <div class="section">
   
    <!--   Icon Section   -->
    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-info">
          <?php
          
                  $a = $_GET['id_kelas'];
                  $b = $_GET['id_mapel'];
          ?>
          <div class="panel-heading">
            ID KElas : <?php echo $_GET['id_kelas'];?> // 
            ID Mapel : <?php echo $_GET['id_mapel'];?>
               <a target="_blank" href="view/export_nilai.php?id_kelas=<?php echo $a;?>&id_mapel=<?php echo $b; ?>"><button type="button" class="btn btn-sm btn-primary">EXPORT EXCEL</button></a>
            
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Nilai</th>
                    <th>Kelas - Tahun</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Predikat</th>
                    <th>Materi</th>
                    <th>Keterangan</th>
                    <th>Status</th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $q = "SELECT nilai.id_nilai, kelas.nama_kelas,siswa.nama_siswa, nilai.nilai_angka,nilai.keterangan,mapel.kkm , tahun_kelas.tahun , materi.nama_materi FROM nilai JOIN tahun_kelas on nilai.id_tahunkelas=tahun_kelas.id JOIN kelas on tahun_kelas.id_kelas=kelas.id_kelas JOIN siswa on siswa.id_siswa=tahun_kelas.id_siswa JOIN mapel on nilai.id_mapel=mapel.id_mapel JOIN materi on nilai.id_materi=materi.id_materi
                  where kelas.id_kelas = '$a' and mapel.id_mapel = '$b'";
                  $sql = mysql_query($q);
                  $no = 1;
                  while($res = mysql_fetch_array($sql)){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $res['id_nilai']; ?></td>
                      <td><?php echo $res['nama_kelas']?></td>
                      <td><?php echo $res['nama_siswa']; ?></td>
                      <td><?php echo $res['nilai_angka']; ?></td>
                       <td>
                    <?php if ($res['nilai_angka'] >= 81 and $res['nilai_angka'] <= 100) {?>
                      A
                    <?php } else if ($res['nilai_angka'] >= 69 and $res['nilai_angka'] <= 80) {?>
                      B
                    <?php } else if ($res['nilai_angka'] >= 49 and $res['nilai_angka'] <= 68) {?>
                    C
                    <?php } else if ($res['nilai_angka'] >= 29 and $res['nilai_angka'] <= 48) {?>
                    D
                    <?php } else {?>
                    E
                    <?php } ?>
                    
                  </td>
                      <td><?php echo $res['nama_materi']; ?></td>

                      <td><?php echo $res['keterangan']; ?></td>
                       <td>
                    <?php if ($res['nilai_angka'] < $res['kkm'] ) {?>
                      Tidak Lulus
                    <?php } else {?>
                      Lulus
                    <?php } ?>
                    
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