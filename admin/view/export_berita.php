
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data Berita.xls");
 ?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID Berita</th>
                                                <th>Nama Berita</th>
                                                <th>Isi Berita</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         mysql_connect("localhost", "root", "");
 mysql_select_db("db_nilai");
                                          $q = "SELECT * from berita 
                                          
                                          ORDER BY id_berita DESC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_berita']; ?></td>
                                              <td><?php echo $res['nama_berita']; ?></td>
                                              <td><?php echo $res['isi_berita']; ?></td>

                                              <td>
                                                <a href="index.php?view=edit_berita&id_berita=<?php echo $res['id_berita'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_berita&id_berita=<?php echo $res['id_berita'];?>"><i class="fa fa-trash"></i></a>

                                              </td>  
                                            </tr>
                                          <?php
                                            $no++;
                                          }
                                          ?>
                                    </tbody>
                                    </table>