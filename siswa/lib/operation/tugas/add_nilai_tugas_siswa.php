    <?php

    $id = addslashes(strip_tags ($_POST['id_nilai_tugas']));
    $id_k = addslashes(strip_tags ($_POST['id_kumpul']));
    $nilai = addslashes(strip_tags ($_POST['nilai']));

    $qry = "insert into nilai_tugas values ('$id', '$id_k', '$nilai')";
    $qry2 = mysql_query($qry);


    if ($qry2) {
        $a = "update kumpul_tugas set status='dinilai' where id_kumpul='$id_k'";
        $b = mysql_query($a);
        if ($b) {
                            # code...
            echo "<script>alert('Data was added');</script>";
            echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
        }
        else {
            echo "<script>alert('Regitration failed 2');</script>";
            echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
        }


    }

    else {
        echo "<script>alert('Regitration failed 2');</script>";
        echo "<script>document.location.href='index.php?view=nilai_tugas_siswa&hal=1';</script>";
    }


    ?>