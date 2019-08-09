<?php

        $id = addslashes(strip_tags ($_POST['id_admin']));
        $nama = addslashes(strip_tags ($_POST['nama']));
        $email = addslashes(strip_tags ($_POST['email']));
        $pass = addslashes(strip_tags ($_POST['password']));

        $dup = mysql_query("SELECT email FROM admin WHERE email ='".$_POST['email']."'");

        if(mysql_num_rows($dup) > 0){

            if ($dup) {
                
                    echo "<script>alert('email telah digunakan');</script>";
                    echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
                }
            }

        else {

            $qry = "insert into admin values ('$id', '$nama','$email', '$pass','admin')";
            $qry2 = mysql_query($qry);
                
            
                if ($qry2) {
                
                    echo "<script>alert('Data was added');</script>";
                    echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
                }
                else {
                    echo "<script>alert('Regitration failed');</script>";
                    echo "<script>document.location.href='index.php?view=admin&hal=1';</script>";
                }
            }

?>