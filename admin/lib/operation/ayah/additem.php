<?php

        $id = addslashes(strip_tags ($_POST['ayah_id']));
        $nama = addslashes(strip_tags ($_POST['ayah_nama']));
        $alamat = addslashes(strip_tags ($_POST['ayah_tahun_lahir']));
        $jk = addslashes(strip_tags ($_POST['ayah_jenjang_pendidikan']));
        $agama = addslashes(strip_tags ($_POST['ayah_pekerjaan']));
        $id_rombel = addslashes(strip_tags ($_POST['ayah_penghasilan']));
        // $jurusan = addslashes(strip_tags ($_POST['id_jurusan']));
        // $nama_ortu = addslashes(strip_tags ($_POST['nama_ortu']));
        $email = addslashes(strip_tags ($_POST['ayah_nik']));
        // $pass = addslashes(strip_tags ($_POST['password']));


            $qry = "insert into ayah_kandung values ('$id', '$nama', '$alamat', '$jk','$agama', '$id_rombel' ,'$email')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                    //kayane masuk kene ki sing mengajar ki

                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=ayah&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=ayah&hal=1';</script>";
                }
            

?>