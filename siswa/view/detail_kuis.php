 <div class="row">
             <div class="col-lg-12">
                  <div class="panel panel-default">
                            <div class="panel-heading">
                                View Soal Kuis
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kuis</th>
                                                <th title="Batas Waktu">E.D</th>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban A</th>
                                                <th>Jawaban B</th>
                                                <th>Jawaban C</th>
                                                <th>Jawaban D</th>
                                                <th>Jawaban E</th>
                                                <th>Kunci</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $id = $_SESSION['id_guru'];
                                          $id_kuis = $_GET['id_kuis'];

                                          $a = "select * from kuis_detail
                                          JOIN kuis on kuis_detail.id_kuis=kuis.id_kuis
                                          where kuis.id_guru = '$id' and kuis.id_kuis='$id_kuis'";
                                          $b = mysql_query($a);
                                          $no = 1;
                                          while($res = mysql_fetch_array($b)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_kuis']; ?></td>
                                              <td><?php echo $res['expired']; ?></td>
                                              <td><?php echo $res['pertanyaan']; ?></td>
                                              <td><?php echo $res['jawabana']; ?></td>
                                              <td><?php echo $res['jawabanb']; ?></td>
                                              <td><?php echo $res['jawabanc']; ?></td>
                                              <td><?php echo $res['jawaband']; ?></td>
                                              <td><?php echo $res['jawabane']; ?></td>                                            
                                              <td><?php echo $res['kunci']; ?></td>
                                              <td>
                                                <a href="index.php?view=edit_kuis&id_kuis=<?php echo $res['id_kuis'];?>&id_pertanyaan=<?php echo $res['id_pertanyaan'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_kuis&id_kuis=<?php echo $res['id_kuis'];?>&id_pertanyaan=<?php echo $res['id_pertanyaan'];?>"><i class="fa fa-trash"></i></a>

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