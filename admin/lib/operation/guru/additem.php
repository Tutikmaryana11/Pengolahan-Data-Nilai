<?php
// echo $_POST;
// exit();

$id = addslashes(strip_tags ($_POST['id_guru']));
$nama = addslashes(strip_tags ($_POST['nama_guru']));
$alamat = addslashes(strip_tags ($_POST['alamat']));
$jk = addslashes(strip_tags ($_POST['jenis_kelamin']));
$agama = addslashes(strip_tags ($_POST['agama']));
$email = addslashes(strip_tags ($_POST['email']));
$pass = addslashes(strip_tags ($_POST['password']));
$id_mapel = addslashes(strip_tags ($_POST['id_mapel']));
$id_mengajar = addslashes(strip_tags ($_POST['id_mengajar']));
$id_operator = addslashes(strip_tags ($_POST['id_operator']));
// -------------------------------------------------------------------------

$nik = addslashes(strip_tags ($_POST['nik']));
$tempat_lahir = addslashes(strip_tags ($_POST['tempat_lahir']));
$tanggal_lahir = addslashes(strip_tags ($_POST['tanggal_lahir']));
$status_kepegawaian = addslashes(strip_tags ($_POST['status_kepegawaian']));
$pendidikan_terakhir = addslashes(strip_tags ($_POST['pendidikan_terakhir']));


$dup = mysql_query("SELECT email FROM guru WHERE email ='".$_POST['email']."'");

if(mysql_num_rows($dup) > 0){

    if ($dup) {

        echo "<script>alert('Oppppsss, Email telah digunakan');</script>";
        echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
    }
}

else {

    $qry = "insert into operator values ('$id_operator', '$nama','$email', '$pass', '','2')";
    $qry2 = mysql_query($qry);
    echo $qry;


    if ($qry2) {

        // $qry3 = "insert into mengajar values ('$id_mengajar','$id_mapel', '$id')";
        $qry3 = "
        insert into guru values (
                '$id',
                '$nama',
                '$alamat',
                '$jk',
                '$agama',
                '$email',
                '$id_mapel',
                '$pass',
                '$nik'
                ,'$tempat_lahir'
                ,'$tanggal_lahir'
                ,'$status_kepegawaian'
                ,'$pendidikan_terakhir')
        ";
        echo $qry3;
        $qry4 = mysql_query($qry3);


        if ($qry4) {
                        # code...
            $qry5 ="insert into mengajar values ('$id_mengajar','$id_mapel', '$id')";
            $oke5 = mysql_query($qry5);
            echo $qry5;
            // echo $oke5;
            // exit();
            if ($oke5) {
                            # code...
                echo "<script>alert('Selamat, semua data telah masuk.');</script>";
                echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
            }
            else {
                echo "<script>alert('Mengajar gagal');</script>";
                echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
            }


        }
        else {
            echo $oke5;
            echo $insert_operator;
            exit();
            echo "<script>alert('Proses Insert data Gagal');</script>";
            echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
        }

    }
    else {
        echo "<script>alert('Proses Insert data Gagal');</script>";
        echo "<script>document.location.href='index.php?view=guru&hal=1';</script>";
    }
}

?>