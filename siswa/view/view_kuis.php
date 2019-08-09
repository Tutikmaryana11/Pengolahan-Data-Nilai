 <div class="row">
             <div class="col-lg-12">
                  <div class="panel panel-default">
                            <div class="panel-heading">
                                View Kuis
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kuis</th>
                                                <th title="Batas Waktu">E.D</th>
                                                <th>Nama Kuis</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $id = $_SESSION['id_guru'];
                                          $a = "select * from kuis where kuis.id_guru = '$id'";
                                          $b = mysql_query($a);
                                          $no = 1;
                                          while($res = mysql_fetch_array($b)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_kuis']; ?></td>
                                              <td><?php echo $res['expired']; ?></td>
                                              <td><?php echo $res['nama_kuis']; ?></td>
                                              <td>
                                              <a title="Lihat Detail Kuis" href="index.php?view=detail_kuis&id_kuis=<?php echo $res['id_kuis'];?>"><i class="fa fa-eye"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_kuis_u&id_kuis=<?php echo $res['id_kuis'];?>"><i class="fa fa-trash"></i></a>

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
          <script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>