<?php
// print_r($_POST);
// die();

        $id = addslashes(strip_tags ($_POST['penghargaan_id']));
        $nama = addslashes(strip_tags ($_POST['penghargaan_tingkat']));
        $alamat = addslashes(strip_tags ($_POST['penghargaan_juara']));
        $jk = addslashes(strip_tags ($_POST['penghargaan_medali']));
        $agama = addslashes(strip_tags ($_POST['penghargaan_id_siswa']));
        $id_rombel = addslashes(strip_tags ($_POST['penghargaan_keterangan']));
        $id_rombels = addslashes(strip_tags ($_POST['penghargaan_tahun']));
       

  

            $qry = "INSERT into penghargaan values ('$id', '$nama', '$alamat', '$jk','$agama', '$id_rombel', '$id_rombels')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {

                    //kayane masuk kene ki sing mengajar ki

                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=tambah_penghargaan&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=tambah_penghargaan&hal=1';</script>";
                }
            

?>