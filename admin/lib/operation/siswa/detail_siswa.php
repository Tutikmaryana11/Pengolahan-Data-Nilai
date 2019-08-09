
<?php 
include_once 'lib/operation/siswa/auto.php';
$id_siswa = $_GET['id_siswa'];
$sql = mysql_query("SELECT s.*,ak.ayah_nama,ik.ibu_nama, ws.wali_nama,p.*,sl.* FROM siswa s 
  join ayah_kandung ak on ak.ayah_id = s.ayah_id
  join ibu_kandung ik on ik.ibu_id = s.ibu_id
  join wali_siswa ws on ws.wali_id = s.wali_id
  left join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
  left join pembinaan pb on pb.pembinaan_id_siswa = s.id_siswa
  left join seleksi sl on s.id_siswa = sl.seleksi_id_siswa
  WHERE s.id_siswa = $id_siswa");
$data = mysql_fetch_array($sql);

?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa fa-users"></span> Siswa</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div>
        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i>  <a href="index.php?view=home">Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-users"></i> <a href="index.php?view=siswa">Siswa</a>
          </li>
          <li class="active">
            <i class="fa fa-user"></i> Detail Siswa
          </li>
        </ol>
      </div>
      <div>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4>Detail Siswa <?php echo $data['nama_siswa'];?></h4>
                <div class="table-responsive">
                  <h4><p><i>Biodata</i></p></h4>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <!-- <th></th> -->
                        <th>
                          ID Siwa
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Alamat
                        </th>
                        <th>
                          J.Kelamin
                        </th>
                        <th>
                          Agama
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Ayah
                        </th>
                        <th>
                          Ibu
                        </th>
                        <th>
                          Wali
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th><?php echo $data['id_siswa']?></th>
                        <td>
                          <code><?php echo $data['nama_siswa']?></code>
                        </td>
                        <td>
                          <code><?php echo $data['alamat']?></code>
                        </td>
                        <td>
                          <code><?php if ($data['jenis_kelamin']=='P') {?>

                            Perempuan
                            <?php } else { ?>
                              Laki-Laki
                              <?php } ?>
                            </code>
                          </td>
                          <td>
                            <code><?php echo $data['agama']?></code>
                          </td>
                          <td>
                            <code><?php echo $data['email']?></code>
                          </td>
                          <td>
                            <code><?php echo $data['ayah_nama']?></code>
                          </td>
                          <td>
                            <code><?php echo $data['ibu_nama']?></code>
                          </td>
                          <td>
                            <code><?php echo $data['wali_nama']?></code>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <h4><p><i>Penghargaan</i></p></h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            Satuan Pendidikan
                            <small>(Kecamatan)</small>
                          </th>
                          <th>
                            Kabupaten
                          </th>
                          <th>
                            Provinsi
                          </th>
                          <th>
                            Nasional
                          </th>
                          <th>
                            Inter Nasional
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <!-- <th></th> -->
                          <td colspan="6" style="background-color: #c7254e"><span><i style="color: white">Juara yang diperoleh</i></span></td>
                        </tr>
                        <tr>
                          <th>Juara 1</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_juara=1");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_juara=1");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_juara=1");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_juara=1");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_juara=1");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>
                                  <tr>
                          <th>Juara 2</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_juara=2");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_juara=2");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_juara=2");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_juara=2");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_juara=2");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>
                         
                                 <tr>
                          <th>Juara 3</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_juara=3");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_juara=3");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_juara=3");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_juara=3");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_juara=3");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>
                         
                        <tr>
                          <!-- <th></th> -->
                          <td colspan="6" style="background-color: #c7254e"><span><i style="color: white">Medali yang diperoleh</i></span></td>
                        </tr>
                                  <tr>
                          <th>Emas</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_medali='Emas'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_medali='Emas'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_medali='Emas'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_medali='Emas'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_medali='Emas'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>
                         
                                        <tr>
                          <th>Perak</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_medali='Perak'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_medali='Perak'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_medali='Perak'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_medali='Perak'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_medali='Perak'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>
                                        <tr>
                          <th>Perunggu</th>
                          <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kecamatan' and p.penghargaan_medali='Perunggu'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Kabupaten' and p.penghargaan_medali='Perunggu'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Provinsi' and p.penghargaan_medali='Perunggu'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Nasional' and p.penghargaan_medali='Perunggu'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                           <td><?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.penghargaan_tingkat='Internasional' and p.penghargaan_medali='Perunggu'");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['penghargaan_keterangan']?><a href="index.php?view=detail_penghargaan&penghargaan_id=<?php echo $data['penghargaan_id']?>&penghargaan_id_siswa=<?php echo $data['penghargaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                           </td>
                         </tr>

                      </tbody>
                    </table>
                  </div>
                  <h4><p><i>Pembinaan</i></p></h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <!-- <th>No</th> -->
                          <th>
                            Satuan Pendidikan
                            <small>(Kecamatan)</small>
                          </th>
                          <th>
                            Kabupaten
                          </th>
                          <th>
                            Provinsi
                          </th>
                          <th>
                            Nasional
                          </th>
                          <th>
                            Inter Nasional
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join pembinaan p on p.pembinaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.pembinaan_tingkat='Kecamatan' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['pembinaan_keterangan']?> <a href="index.php?view=detail_pembinaan&pembinaan_id=<?php echo $data['pembinaan_id']?>&pembinaan_id_siswa=<?php echo $data['pembinaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                     
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join pembinaan p on p.pembinaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.pembinaan_tingkat='Kabupaten' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['pembinaan_keterangan']?> <a href="index.php?view=detail_pembinaan&pembinaan_id=<?php echo $data['pembinaan_id']?>&pembinaan_id_siswa=<?php echo $data['pembinaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                   
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join pembinaan p on p.pembinaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.pembinaan_tingkat='Provinsi' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['pembinaan_keterangan']?> <a href="index.php?view=detail_pembinaan&pembinaan_id=<?php echo $data['pembinaan_id']?>&pembinaan_id_siswa=<?php echo $data['pembinaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                   
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join pembinaan p on p.pembinaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.pembinaan_tingkat='Nasional' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['pembinaan_keterangan']?> <a href="index.php?view=detail_pembinaan&pembinaan_id=<?php echo $data['pembinaan_id']?>&pembinaan_id_siswa=<?php echo $data['pembinaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                    
                          <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join pembinaan p on p.pembinaan_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.pembinaan_tingkat='Internasional' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['pembinaan_keterangan']?> <a href="index.php?view=detail_pembinaan&pembinaan_id=<?php echo $data['pembinaan_id']?>&pembinaan_id_siswa=<?php echo $data['pembinaan_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                   
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <h4><p><i>Seleksi</i></p></h4>
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            Iptek <small>(Sains)</small>
                          </th>
                          <th>
                            Estetika <small></small>

                          </th>
                          <th>
                           Olahraga
                         </th>

                       </tr>
                     </thead>
                     <tbody>
                      <tr>
                        <th>Kecamatan</th>
                        <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kecamatan' and p.seleksi_jenis='iptek' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kecamatan' and p.seleksi_jenis='estetika' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kecamatan' and p.seleksi_jenis='olahraga' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                      </tr>
                      <tr>
                        <th>Kabupaten</th>
                         <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kabupaten' and p.seleksi_jenis='iptek' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kabupaten' and p.seleksi_jenis='estetika' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Kabupaten' and p.seleksi_jenis='olahraga' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                      </tr>
                      <tr>
                        <th>Provinsi</th>
                         <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Provinsi' and p.seleksi_jenis='iptek' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Provinsi' and p.seleksi_jenis='estetika' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Provinsi' and p.seleksi_jenis='olahraga' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                      </tr>
                      <tr>
                        <th>Nasional</th>
                         <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Nasional' and p.seleksi_jenis='iptek' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Nasional' and p.seleksi_jenis='estetika' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Nasional' and p.seleksi_jenis='olahraga' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                      </tr>
                      <tr>
                        <th>Inter Nasional</th>
                         <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Internasional' and p.seleksi_jenis='iptek' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Internasional' and p.seleksi_jenis='estetika' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                           <td>
                          <?php 
                          $no = 1;
                          $id_siswa = $_GET['id_siswa'];
                          $sqls = mysql_query("SELECT p.* FROM siswa s
                            join seleksi p on p.seleksi_id_siswa = s.id_siswa
                            WHERE s.id_siswa = $id_siswa and p.seleksi_tingkat='Internasional' and p.seleksi_jenis='olahraga' ");
                            while ($data = mysql_fetch_array($sqls)) {?>
                              <?php echo $no;?>. <?php echo $data['seleksi_keterangan']?> <a href="index.php?view=detail_seleksi&seleksi_id=<?php echo $data['seleksi_id']?>&seleksi_id_siswa=<?php echo $data['seleksi_id_siswa']?>">
                              <i class="fa  fa-external-link"></i></a><br>
                             <?php $no ++; } ?>
                          </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>