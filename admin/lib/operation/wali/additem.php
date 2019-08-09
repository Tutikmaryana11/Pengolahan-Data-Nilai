<?php

        $id = addslashes(strip_tags ($_POST['wali_id']));
        $nama = addslashes(strip_tags ($_POST['wali_nama']));
        $alamat = addslashes(strip_tags ($_POST['wali_tahun_lahir']));
        $jk = addslashes(strip_tags ($_POST['wali_jenjang_pendidikan']));
        $agama = addslashes(strip_tags ($_POST['wali_pekerjaan']));
        $id_rombel = addslashes(strip_tags ($_POST['wali_penghasilan']));
        // $jurusan = addslashes(strip_tags ($_POST['id_jurusan']));
        // $nama_ortu = addslashes(strip_tags ($_POST['nama_ortu']));
        $email = addslashes(strip_tags ($_POST['wali_nik']));
        // $pass = addslashes(strip_tags ($_POST['password']));


            $qry = "insert into wali_siswa values ('$id', '$nama', '$alamat', '$jk','$agama', '$id_rombel' ,'$email')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                    //kayane masuk kene ki sing mengajar ki

                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=wali&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=wali&hal=1';</script>";
                }
            

?>