    <?php

        $id = addslashes(strip_tags ($_POST['id_kuis']));
        $id_map = addslashes(strip_tags ($_POST['id_mapel']));
        //$id_detail = addslashes(strip_tags ($_POST['id_kuis_detail']));
        $id_g = addslashes(strip_tags ($_POST['id_guru']));
        $id_m = addslashes(strip_tags ($_POST['id_mengajar']));
        $nama_kuis = addslashes(strip_tags ($_POST['nama_kuis']));
        $tanya = addslashes(strip_tags ($_POST['pertanyaan']));
        $jawaban = addslashes(strip_tags ($_POST['jawaban']));
        $score = addslashes(strip_tags ($_POST['score']));

            $qry = "insert into kuis values ('$id', '$nama_kuis', '$id_g','$id_m','$id_map')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                    $qry1 = "insert into kuis_detail values ('$id', '$tanya','$jawaban','$score')";
                    $qry3 = mysql_query($qry1);

                    if ($qry3) {
                        # code...
                            echo "<script>alert('Data was added');</script>";
                            echo "<script>document.location.href='index.php?view=soal_kuis&hal=1';</script>";
                        }
                        else {
                            echo "<script>alert('Regitration failed 1');</script>";
                            echo "<script>document.location.href='index.php?view=soal_kuis&hal=1';</script>";
                        }
                    }

                else {
                    echo "<script>alert('Regitration failed 2');</script>";
                    echo "<script>document.location.href='index.php?view=soal_kuis&hal=1';</script>";
                }
            

?>