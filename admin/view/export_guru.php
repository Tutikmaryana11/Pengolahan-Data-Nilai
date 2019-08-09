
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=tutorialpedia-export.xls");
 ?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Guru</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>J.Kelamin</th>
                                                <th>Agama</th>
                                                <th>Email</th>
                                                <th>Status Guru</th>
                                                <th  align="center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        mysql_connect("localhost", "root", "");
 mysql_select_db("db_nilai");
                                          $q = "SELECT * FROM guru 
                                          JOIN mengajar ON mengajar.id_guru=guru.id_guru
                                          ORDER BY guru.id_guru ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_assoc($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_guru']; ?></td>
                                              <td><?php echo $res['nama_guru']; ?></td>
                                              <td><?php echo $res['alamat']; ?></td>
                                              <td><?php echo $res['jenis_kelamin']; ?></td>
                                              <td><?php echo $res['agama']; ?></td>
                                              <td><?php echo $res['email']; ?></td>
                                              <td><?php echo $res['status_kepegawaian']; ?></td>
                                              <td>
                                                <a href="index.php?view=edit_guru&id_guru=<?php echo $res[0];?>&id_mengajar=<?php echo $res['id_mengajar'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_guru&id_guru=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

                                              </td>
                                              
                                            </tr>
                                          <?php
                                            $no++;
                                          }
                                          ?>
                                    </tbody>
                                    </table>