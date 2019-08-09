<?php

        $id = addslashes(strip_tags ($_POST['id_kelas']));
        // $id_j = addslashes(strip_tags ($_POST['id_jurusan']));
        $nama = addslashes(strip_tags ($_POST['nama_kelas']));

        $dup = mysql_query("SELECT nama_kelas FROM kelas WHERE nama_kelas='".$_POST['nama_kelas']."'");

        if(mysql_num_rows($dup) > 0){

            if ($dup) {
                
                    echo "<script>alert('Nama Kelas telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
                }
            }

        else {

            $qry = "insert into kelas values ('$id', '$nama')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {
                
                    echo "<script>alert('Data Berhasil Diinput');</script>";
                    echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=kelas&hal=1';</script>";
                }
            }

?>