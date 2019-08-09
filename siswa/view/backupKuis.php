<?php
                                          $q = "SELECT * FROM kuis 
                                          JOIN kuis_detail ON kuis.id_kuis=kuis_detail.id_kuis
                                          JOIN mapel on kuis.id_mapel=mapel.id_mapel
                                          ORDER BY mapel.id_mapel ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_kuis']; ?></td>
                                              <td><?php echo $res['pertanyaan']; ?></td>
                                              <td><?php echo $res['score']; ?></td>
                                
                                              <td>
                                                <a href="index.php?view=edit_kuis&id_kuis=<?php echo $res[0];?>&id_kuis_detail=<?php echo $res['id_kuis_detail'];?>"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;
                                                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_kuis&id_kuis=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

                                              </td>
                                              
                                            </tr>
                                          <?php
                                            $no++;
                                          }
                                          ?>