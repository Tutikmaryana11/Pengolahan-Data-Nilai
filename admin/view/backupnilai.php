
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-file-word-o"></span> Laporan Nilai</h1>
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
                                <i class="fa fa-file-word-o"></i> Laporan Nilai
                            </li>
                        </ol>
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
                                <i class="fa fa-file-word-o"></i> Laporan Nilai
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Guru</th>
                                                <th>Siswa</th>
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT mapel.nama_mapel, guru.nama_guru, siswa.nama_siswa, nilai_kuis.nilai  FROM nilai_kuis
                                          JOIN kuis on nilai_kuis.id_kuis=kuis.id_kuis
                                          JOIN guru ON kuis.id_guru = guru.id_guru
                                          JOIN mapel on guru.id_mapel=mapel.id_mapel
                                          JOIN siswa on nilai_kuis.id_siswa=siswa.id_siswa
                                          ORDER BY kuis.id_kuis ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res[0]; ?></td>
                                              <td><?php echo $res[1]; ?></td>
                                              <td><?php echo $res[2]; ?></td>                               
                                              <td><?php echo $res[3]; ?></td>                               
                                              
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