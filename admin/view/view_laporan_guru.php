 <div class="container">
  <div class="section">
   
    <!--   Icon Section   -->
    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            Laporan Guru<br>
            
            
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Guru</th>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Email</th>
                    <th>NIK</th>




                    

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $q = "select * from guru";
                  $sql = mysql_query($q);
                  $no = 1;
                  while($res = mysql_fetch_array($sql)){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $res['id_guru']; ?></td>
                      <td><?php echo $res['nama_guru']; ?></td>
                      <td><?php echo $res['alamat']; ?></td>
                      <td><?php echo $res['jenis_kelamin']; ?></td>
                      <td><?php echo $res['agama']; ?></td>
                      <td><?php echo $res['email']; ?></td>
                      <td><?php echo $res['nik']; ?></td>




                       
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