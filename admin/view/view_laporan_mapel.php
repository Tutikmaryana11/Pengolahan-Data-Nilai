 <div class="container">
  <div class="section">
   
    <!--   Icon Section   -->
    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading">
            Laporan Mapel<br>
            
            
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Mapel</th>
                    <th>Nama Mapel</th>
                    <th>KKM</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $q = "select * from mapel";
                  $sql = mysql_query($q);
                  $no = 1;
                  while($res = mysql_fetch_array($sql)){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $res['id_mapel']; ?></td>
                      <td><?php echo $res['nama_mapel']; ?></td>
                      <td><?php echo $res['kkm']; ?></td>
                       
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