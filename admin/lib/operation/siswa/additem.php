<?php

        $id = addslashes(strip_tags ($_POST['id_siswa']));
        $nama = addslashes(strip_tags ($_POST['nama_siswa']));
        $alamat = addslashes(strip_tags ($_POST['alamat']));
        $jk = addslashes(strip_tags ($_POST['jenis_kelamin']));
        $agama = addslashes(strip_tags ($_POST['agama']));
        $id_rombel = addslashes(strip_tags ($_POST['id_rombel']));
        $ayah_id = addslashes(strip_tags ($_POST['ayah_id']));
        $ibu_id = addslashes(strip_tags ($_POST['ibu_id']));
        $wali_id = addslashes(strip_tags ($_POST['wali_id']));
        $email = addslashes(strip_tags ($_POST['email']));
        $tahun = date( 'Y' ); // tahun

        // $pass = addslashes(strip_tags ($_POST['password']));

        $dup = mysql_query("SELECT email FROM siswa WHERE email ='".$_POST['email']."'");

        if(mysql_num_rows($dup) > 0){

            if ($dup) {
                
                    echo "<script>alert('Oppppsss, Email telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
                }
            }

        else {

            $qry = "insert into siswa values ('$id', '$nama', '$alamat', '$jk','$agama', '$id_rombel','$ayah_id','$ibu_id','$wali_id','$email')";
            $qry2 = mysql_query($qry);

            $q = "insert into tahun_kelas values (null,'$id_rombel', '$id', '$tahun', 'Y')";
            $qr = mysql_query($q);
            if ($qr) {
                
                    echo "<script>alert('Data Berhasil Diinput');</script>";
                    echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=siswa&hal=1';</script>";
                }
            }

?>