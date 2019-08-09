     <?php include_once 'lib/operation/berita/auto.php';?>


     <div id="page-wrapper">

             <div class="row">
             <div class="col-lg-12">
                  <div class="panel panel-default">
                            <div class="panel-heading">
                                Hover Rows
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <!-- <th>ID Berita</th> -->
                                                <th>Nama Berita</th>
                                                <th>Isi Berita</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $q = "SELECT * from berita
                                          ORDER BY id_berita DESC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <!-- <td><?php echo $res['id_berita']; ?></td> -->
                                              <td><?php echo $res['nama_berita']; ?></td>
                                              <td><?php echo $res['isi_berita']; ?></td>

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