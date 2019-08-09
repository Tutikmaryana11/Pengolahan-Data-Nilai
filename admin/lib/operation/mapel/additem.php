<?php

        $id = addslashes(strip_tags ($_POST['id_mapel']));
        $nama = addslashes(strip_tags ($_POST['nama_mapel']));
        $kkm = addslashes(strip_tags ($_POST['kkm']));

        $dup = mysql_query("SELECT nama_mapel FROM mapel WHERE nama_mapel='".$_POST['nama_mapel']."'");

        if(mysql_num_rows($dup) > 0){

            if ($dup) {
                
                    echo "<script>alert('Nama Mata Pelajaran telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
                }
            }

        else {

            $qry = "insert into mapel values ('$id', '$nama', '$kkm')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {
                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=mata_pelajaran&hal=1';</script>";
                }
            }

?>