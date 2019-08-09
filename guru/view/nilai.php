     <?php include_once 'lib/operation/nilai/auto.php';?>

     <?php

     function tahunkelas(){
      $email = $_SESSION['email_guru'];
      $id_guru = $_SESSION['id_guru'];

      $a = "SELECT * FROM guru where email='$email'";
      $b = mysql_query($a);
      $c = mysql_fetch_array($b);

      $q = "SELECT tahun_kelas.id,kelas.id_kelas, kelas.nama_kelas,tahun_kelas.tahun from tahun_kelas JOIN kelas  on tahun_kelas.id_kelas=kelas.id_kelas JOIN mengajar on mengajar.id_kelas=kelas.id_kelas WHERE mengajar.id_guru = '$c[id_guru]'
      ORDER BY kelas.id_kelas ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[2]." - ".$res[3]."</option>";
      }
    }

    function materi(){
      $email = $_SESSION['email_guru'];
      $id_guru = $_SESSION['id_guru'];

      $a = "SELECT * FROM guru where email='$email'";
      $b = mysql_query($a);
      $c = mysql_fetch_array($b);

      $q = "SELECT * from materi";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." - ".$res[1]."</option>";
      }
    }

    function id_mapel(){
      $q = "SELECT * FROM `mapel` ORDER BY 'id_mapel' ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[1]."</option>";
      }
    }

    ?>

    <?php
    function siswa(){
      $q = "SELECT * FROM `siswa` ORDER BY 'id_siswa' ASC";
      $sql = mysql_query($q);
      while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[0]." -- ".$res[1]."</option>";
      }
    }

    ?>

    <script type="text/javascript">

      $(document).ready(function() {

        function getKel(kelas) {

          console.log(kelas);
          var rand_ku= Math.random();
          $.ajax( {

            type: 'post',
            url: 'lib/operation/nilai/get_siswa_by_rombel.php?id='+kelas+'&'+'rand='+rand_ku,
            data: '',
            cache: false,
            success: function(msg) {
             console.log(msg);   
             $('#siswaku').html(msg);

           }
         });

        }

        document.getElementById("form").kelasSiswa.focus();
        $('#kelasSiswa').change(function() {
          getKel(this.value);
        });
      });

      function pilih(a,b,c){
        console.log(a);
        console.log(b);
        console.log(c);

        $('#id_tahun').val(a);
        $('#kelas').val(b);
        $('#siswa').val(c);
        $('#myModal').modal('hide');

      } 
      function cari(){
        $('#myModal').modal('show');
      }
    </script>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><span class="fa fa-upload"></span> Nilai</h1>
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
                <i class="fa fa-upload"></i> Nilai
              </li>
            </ol>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              Nilai forms
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  <form role="form" id="form" method="post" action="index.php?view=insert_nilai" enctype="multipart/form-data">
                   <!-- <input type="hidden" name="id_guru" value="<?php echo $c['id_guru'];?>"> -->
                   <div class="form-group">
                    <label>ID Nilai</label>
                    <input type="text" class="form-control" name="id_nilai" readonly value="<?php echo $kd;?>" required >
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                      <label>ID Tahun Kelas</label>
                    </div>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="tahun_kelas" readonly required id="id_tahun">
                    </div>
                    <div class="col-md-2">
                      <a type="button" class="btn btn-primary" onclick="cari()">Cari</a> 
                    </div>

                  </div>

                  <!-- modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Data Siswa</h4>
                        </div>
                        <div class="modal-body">
                          <p>
                            <table id="example2" class="table table-bordered table-striped">
                              <thead>
                                <tr class="text-red">
                                  <th class="col-sm-1">No</th> 
                                  <th class="col-sm-1">Kelas</th>
                                  <th class="col-sm-3">Tahun</th>
                                  <th class="col-sm-1">Nama Siswa</th> 
                                  <th class="col-sm-1">AKSI</th>  
                                </tr>
                              </thead>

                              <tbody>
                                <?php 
// Tampilkan data dari Database
                                $sql = "select * from tahun_kelas JOIN siswa on tahun_kelas.id_siswa=siswa.id_siswa JOIN kelas on tahun_kelas.id_kelas=kelas.id_kelas where tahun_kelas.flag_aktif='Y'";
                                $tampil = mysql_query($sql);
                                $no=1;
                                while ($tampilkan = mysql_fetch_array($tampil)) { 
                                  $id_tahunkelas = $tampilkan['id'];
                                  ?>

                                  <tr>
                                    <td><?php echo $no++; ?></td> 
                                    <td><?php echo $tampilkan['nama_kelas']; ?></td> 
                                    <td><?php echo $tampilkan['tahun']; ?></td> 
                                    <td><?php echo $tampilkan['nama_siswa']; ?></td> 

                                    <td align="center">
                                     <a type="button"  onclick="pilih(<?php echo $tampilkan['id']; ?> ,'<?php echo $tampilkan['id_kelas']; ?>','<?php echo $tampilkan['id_siswa']; ?>')" class="btn btn-primary"> Pilih</a>
                                   </td>
                                   <?php
                                 }
                                 ?>
                               </tr>
                             </tbody>
                           </table>
                         </p>
                       </div>

                       <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div></div></div>
                    <!-- akhir modal -->

                    <div class="form-group">
                      <label>Kelas</label>
                      <input type="text" class="form-control" name="id_kelas" readonly required id="kelas">


                    <!-- <select class="form-control" id="tahunkelas" name="kelas">
                      <option value="">Pilih Kelas</option>
                      <?php tahunkelas();?>

                    </select> -->
                  </div>                                                          

                  <div class="form-group">
                    <label>Siswa</label>
                    <input type="text" class="form-control" name="id_siswa" readonly required id="siswa">

                    <!-- <select name="id_siswa" id="siswa"  class="form-control">
                      <option value="">Pilih Siswa</option>
                      <?php siswa();?>

                    </select> -->
                  </div>

                  <div class="form-group">
                    <label>Materi</label>

                    <select class="form-control" name="id_materi">
                      <option value="">Pilih Materi</option>
                      <?php materi();?>

                    </select>
                  </div>   

                  <div class="form-group">
                    <label>Mapel</label>

                    <select class="form-control" name="id_mapel">
                      <option value="">Pilih Mapel</option>
                      <?php id_mapel();?>

                    </select>
                  </div>   

                  <div class="form-group">
                    <label>Nilai Angka</label>
                    <input type="text" class="form-control" placeholder="Enter text" name="nilai_angka" required></input>
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea type="text" class="form-control" placeholder="Enter text" name="keterangan" ></textarea>
                  </div>

                   <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                </form>
              </div>
              <!-- /.col-lg-6 (nested) -->

              <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->

        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Hover Rows
        </div>
        <div class="panel-body">
          <div class="table-responsive dataTable_wrapper">
           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead >
              <tr>
                <th>No</th>
                <th>ID Nilai</th>
                <th>Nama Siswa</th>
                <th>Nilai Angka</th>
                <th>Predikat</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $q = "SELECT * from nilai JOIN tahun_kelas on nilai.id_tahunkelas=tahun_kelas.id JOIN kelas on tahun_kelas.id_kelas=kelas.id_kelas JOIN siswa on siswa.id_siswa=tahun_kelas.id_siswa JOIN mapel on mapel.id_mapel=nilai.id_mapel";
              $sql = mysql_query($q);

              $no = 1;

              while($res = mysql_fetch_array($sql)){?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $res['id_nilai']; ?></td>
                  <td><?php echo $res['nama_siswa']; ?></td>
                  <td><?php echo $res['nilai_angka']; ?></td>
                  <td>
                    <?php if ($res['nilai_angka'] >= 81 and $res['nilai_angka'] <= 100) {?>
                      A
                    <?php } else if ($res['nilai_angka'] >= 69 and $res['nilai_angka'] <= 80) {?>
                      B
                    <?php } else if ($res['nilai_angka'] >= 49 and $res['nilai_angka'] <= 68) {?>
                      C
                    <?php } else if ($res['nilai_angka'] >= 29 and $res['nilai_angka'] <= 48) {?>
                      D
                    <?php } else {?>
                      E
                    <?php } ?>
                    
                  </td>
                  <td><?php echo $res['keterangan']; ?></td>

                  <td>
                    <?php if ($res['nilai_angka'] < $res['kkm'] ) {?>
                      Tidak Lulus
                    <?php } else {?>
                      Lulus
                    <?php } ?>
                    
                  </td>

                  <td>
                    <a href="index.php?view=edit_berita&id_berita=<?php echo $res['id_berita'];?>"><i class="fa fa-edit"></i></a>
                    &nbsp;&nbsp;

                  </td>  
                </tr>
                <?php
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
    </div>
  </div>

</div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
  $('#dataTables-example').DataTable();
});
</script>