    <?php

        $id = $_GET['id_nilai_tugas'];
        $nilai = addslashes(strip_tags ($_POST['nilai']));

            $qry = "update nilai_tugas set nilai = '$nilai' where id_nilai_tugas = '$id'";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                            echo "<script>alert('Data was changed');</script>";
                            echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
                }

                else {
                    echo "<script>alert('Regitration failed 2');</script>";
                    echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
                }
            

?>