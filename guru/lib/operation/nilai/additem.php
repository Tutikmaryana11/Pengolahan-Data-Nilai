<?php
        
        $id = addslashes(strip_tags ($_POST['id_nilai']));
        $nama = addslashes(strip_tags ($_POST['id_siswa']));
        $id_m = addslashes(strip_tags ($_POST['nilai_angka']));
        $id_mapel = addslashes(strip_tags ($_POST['id_mapel']));
        $ket = addslashes(strip_tags ($_POST['keterangan']));
        $id_tahunkelas = addslashes(strip_tags ($_POST['tahun_kelas']));
        $id_siswa = addslashes(strip_tags ($_POST['id_siswa']));
        $id_materi = addslashes(strip_tags ($_POST['id_materi']));




        // $foto_nama = ($_FILES['files']['name']);
        // $foto = ($_FILES['files']['tmp_name']);
        // $folder = "../admin/data/files";
        // $folder = $folder."/".basename($_FILES['files']['name']);

        // $maxsize    = 1048576;

        //     if ($_FILES['files']['size'] >= $maxsize) {
        //         # code...
        //         echo "<script>alert('Sorry, there was a problem uploading your file.');</script>";
        //         echo "<script>document.location.href='index.php?view=materi&hal=1';</script>";

        //     }

            // else {
                    $qry = "insert into nilai values ('$id', '$id_tahunkelas','$id_mapel', '$id_m','$id_materi','$ket')";
                    $qry2 = mysql_query($qry);
                    
                    // if (move_uploaded_file($foto, $folder)) {        
                echo $qry;
                        if ($qry2) {
                    
                                echo "<script>alert('Data Berhasil Disimpan');</script>";
                                echo "<script>document.location.href='index.php?view=nilai&hal=1';</script>";
                            }
                        else {
                                echo "<script>alert('Regitration failed');</script>";
                                echo "<script>document.location.href='index.php?view=nilai&hal=1';</script>";
                            }
                    // }
                // }
                
            

?>