<?php
        
        $id = addslashes(strip_tags ($_POST['id_berita']));
        $nama = addslashes(strip_tags ($_POST['nama_berita']));
        $isi = addslashes(strip_tags ($_POST['isi_berita']));
        $guru = addslashes(strip_tags ($_POST['id_guru']));

                    $qry = "insert into berita values ('$id', '$nama', '$isi', '$guru')";
                    $qry2 = mysql_query($qry);
                    
                        if ($qry2) {
                    
                                echo "<script>alert('Data was added');</script>";
                                echo "<script>document.location.href='index.php?view=berita&hal=1';</script>";
                            }
                        else {
                                echo "<script>alert('Regitration failed');</script>";
                                echo "<script>document.location.href='index.php?view=berita&hal=1';</script>";
                            }
                         

?>