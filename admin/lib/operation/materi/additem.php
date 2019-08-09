<?php
        
        $id = addslashes(strip_tags ($_POST['id_materi']));
        $nama = addslashes(strip_tags ($_POST['nama_materi']));
        $id_m = addslashes(strip_tags ($_POST['id_mengajar']));

        $foto_nama = ($_FILES['files']['name']);
        $foto = ($_FILES['files']['tmp_name']);
        $folder = "data/files";
        $folder = $folder."/".basename($_FILES['files']['name']);

        $maxsize    = 1048576;

            if ($_FILES['files']['size'] >= $maxsize) {
                # code...
                echo "<script>alert('Sorry, there was a problem uploading your file.');</script>";
                echo "<script>document.location.href='index.php?view=materi&hal=1';</script>";

            }

            else {
                    $qry = "insert into materi values ('$id', '$nama', '$id_m','$foto_nama')";
                    $qry2 = mysql_query($qry);
                    
                    if (move_uploaded_file($foto, $folder)) {        
                
                        if ($qry2) {
                    
                                echo "<script>alert('Data was added');</script>";
                                echo "<script>document.location.href='index.php?view=materi&hal=1';</script>";
                            }
                        else {
                                echo "<script>alert('Regitration failed');</script>";
                                echo "<script>document.location.href='index.php?view=materi&hal=1';</script>";
                            }
                    }
                }
                
            

?>